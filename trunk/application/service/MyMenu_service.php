<?php
class MyMenu_service extends MY_Service {
	const MSG_NAME_NOT_NULL = "菜单名称不能为空";
	const MSG_CONTROLLER_NOT_NULL = "控制器不能为空";
	const MSG_METHOD_NOT_NULL = "方法名不能为空";
	const MSG_MENU_EXISTS = "此菜单已存在";
	const MSG_BUILT = "内置菜单不可执行此操作";

	public function __construct() {
		parent::__construct();
		$this->loadModel("JyMenuUrl","JySysLog");
		$this->loadService("Permission");
	}

	/**
	 *添加信息
	 */
	public function addoredit($options = array()) {
		$optionsKeys = array(
			"menu_id",
			"menu_name",
			"menu_controller",
			"menu_method",
			"menu_hide",
			"menu_note",
			"module_icon",
            "father_menu",
            "status"
		);
		extract(formatOptions($options, $optionsKeys));

		$data = array();

		if (optionExists($menu_id)) {
			$data['menu_id'] = $menu_id;
		}
		if (optionExists($menu_name)) {
			$data['menu_name'] = $menu_name;
		} else {
			return wrrong_msg(self::MSG_NAME_NOT_NULL);
		}

		if (optionExists($father_menu)) {
			$data['father_menu'] = $father_menu;
		} else {
			return wrrong_msg(MSG_INVALID_ARGUMENTS);
		}

		if (optionExists($menu_controller)) {
			$data['menu_controller'] = $menu_controller;
		} else {
			if ($father_menu != 0) {
				return wrrong_msg(self::MSG_CONTROLLER_NOT_NULL);
			}
		}

		if (optionExists($menu_method)) {
			$data['menu_method'] = $menu_method;
		} else {
			if ($father_menu != 0) {
				return wrrong_msg(self::MSG_METHOD_NOT_NULL);
			}
		}

		if (optionExists($menu_note)) {
			$data['menu_note'] = $menu_note;
		}
		if (optionExists($module_icon)) {
			$data['module_icon'] = $module_icon;
		}
		if (optionExists($menu_hide)) {
			$data['menu_hide'] = $menu_hide;
		} else {
			$data['menu_hide'] = JyMenuUrl_model::HIDE_NO;
		}

		if ($father_menu > 0) {
			$m = $this->JyMenuUrl_model->where(array(
				"menu_controller" => $menu_controller,
				"menu_method" => $menu_method,
				"menu_id !=" => $menu_id
			))->get_item();
			if (!empty($m)) {
				return wrrong_msg(self::MSG_MENU_EXISTS);
			}
		}

		if (optionExists($menu_id)) {
			if (!$this->editable($menu_id)) {
				return wrrong_msg(self::MSG_BUILT);
			}
			$success = $this->JyMenuUrl_model->where("menu_id", $menu_id)->set($data)->update();
		} else {
			$success = $this->JyMenuUrl_model->set($data)->insert();
		}

		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		if(!$menu_id){
            $this->JySysLog_model->set(array(
                "user_name"=>$this->login_user['user_name'],
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_MyMenu",
                "class_obj"=>"add",
                "result"=>$menu_name."添加成功",
                "op_time"=>time()
            ))->insert();
            return success_msg(MSG_ADD_SUCCESS);
        }else{
            $this->JySysLog_model->set(array(
                "user_name"=>$this->login_user['user_name'],
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_MyMenu",
                "class_obj"=>"add",
                "result"=>$menu_name."修改成功",
                "op_time"=>time()
            ))->insert();
            return success_msg(MSG_EDIT_SUCCESS);
        }
	}

	public function editable($id) {
		$m = $this->JyMenuUrl_model->where(array("menu_id" => $id))->select("menu_built")->get_item();
		if (empty($m)) {
			return false;
		}
		if ($m['menu_built'] == JyMenuUrl_model::BUILT_YES) {
			return false;
		}
		return true;
	}

    /**
     * 修改状态
     * @param array $options
     * @return array
     */
	public function editStatus($options = array()){
        $optionsKeys = array(
            "menu_id",
            "status"
        );
        extract(formatOptions($options, $optionsKeys));
        $data = array();
        if (!$menu_id) {
            return wrrong_msg(MSG_INVALID_ARGUMENTS);
        }
        if (optionExists($status)) {
            $data['status'] = $status;
        }

        $success = $this->JyMenuUrl_model->where("menu_id", $menu_id)->set($data)->update();
        if (!$success) {
            return wrrong_msg(MSG_SERVICE_BUSY);
        }
        $this->JySysLog_model->set(array(
            "user_name"=>$this->login_user['user_name'],
            "action"=>"IP地址: ".ip(),
            "class_name"=>"Admin_MyMenu",
            "class_obj"=>"editStatus",
            "result"=>"修改menu_id为".$menu_id."的状态",
            "op_time"=>time()
        ))->insert();
        return success_msg(MSG_EDIT_SUCCESS);
    }

	/**
	 * 获取列表
	 * @param unknown $options	数组
	 * @return multitype:NULL string
	 */
	public function get_list($options = array()) {
        $optionsKeys = array(
            "menu_hide",
            "status"
        );
        extract(formatOptions($options, $optionsKeys));
        $where=array();
        if (optionExists($status)) {
            $where['status'] = $status;
        }
        if (optionExists($menu_hide)) {
            $where['menu_hide'] = $menu_hide;
        }else{
            $where['menu_hide'] = 1;
        }
		$menu_url = $this->JyMenuUrl_model->where($where)->get_list();
		$menu = $this->getTree($menu_url,0);
		return $menu;
	}

    public function getTree($data, $pId)
	{
		$tree = '';
		foreach($data as $k => $v)
		{
			if($v['father_menu'] == $pId)
			{         //父亲找到儿子
				$v['children'] = self::getTree($data, $v['menu_id']);
				$tree[] = $v;
				//unset($data[$k]);
			}
		}
		return $tree;
	}

	/**
	 *	删除内容
	 */
	public function delete($options = array()) {
		$optionsKeys = array("menu_id");
		extract(formatOptions($options, $optionsKeys));
		if (!$menu_id) {
			return wrrong_msg(MSG_INVALID_ARGUMENTS);
		}

		if (!$this->editable($menu_id)) {
			return wrrong_msg(self::MSG_BUILT);
		}

		$success = $this->JyMenuUrl_model->where("menu_id", $menu_id)->delete();
		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
        $this->JySysLog_model->set(array(
            "user_name"=>$this->login_user['user_name'],
            "action"=>"IP地址: ".ip(),
            "class_name"=>"Admin_MyMenu",
            "class_obj"=>"del",
            "result"=>"删除菜单：menu_id为".$menu_id,
            "op_time"=>time()
        ))->insert();
		return success_msg(MSG_DELETE_SUCCESS);

	}

}
?>