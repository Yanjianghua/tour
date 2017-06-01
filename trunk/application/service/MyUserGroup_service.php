<?php
class MyUserGroup_service extends MY_Service {
	const MSG_USERNAME_NOT_NULL = "账户组名不能为空";
	const MSG_USERNAME_IS_EXISTS = "用户名已存在";
	const MSG_PASSWORD_NOT_NULL = "密码不能为空";
	const MSG_RID_NOT_NULL = "用户组不能为空";
	const MSG_BUILT = "内置账户组不可进行此操作";

	public function __construct() {
		parent::__construct();
		$this->loadModel("JyUserGroup");
	}

	public function addoredit($options = array()) {
		$optionsKeys = array(
			"group_id",
			"group_name",
			"group_role",
			"group_desc",
			"owner_id",
			"status"
		);
		extract(formatOptions($options, $optionsKeys));

		$data = array();

		if (optionExists($group_id)) {
			$data['group_id'] = $group_id;
		}

		if (optionExists($group_name)) {
			$data['group_name'] = $group_name;
		}

		if (!empty($group_role) and is_array($group_role)) {
			$data['group_role'] = json_encode($group_role);
		}

		if (optionExists($group_desc)) {
			$data['group_desc'] = $group_desc;
		}

		$data['owner_id'] = $this->login_user['user_id'];


		if (optionExists($status)) {
			$data['status'] = $status;
		}

		if ($group_id) {
			if (!$this->editable($group_id)) {
				return wrrong_msg(self::MSG_BUILT);
			}
			$success = $this->JyUserGroup_model->where("group_id", $group_id)->set($data)->update();
		} else {
			if (empty($group_name)) {
				return wrrong_msg(self::MSG_USERNAME_NOT_NULL);
			}
            $usergroup = $this->JyUserGroup_model->where("group_name",$group_name)->get_list();
            if($usergroup){
                return wrrong_msg(self::MSG_USERNAME_IS_EXISTS);
            }
			$success = $this->JyUserGroup_model->set($data)->insert();
		}

		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		if($group_id){
            $this->JySysLog_model->set(array(
                "user_name"=>$this->login_user['user_name'],
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_UserGroup",
                "class_obj"=>"edit",
                "result"=>$group_name." 菜单ID：".$group_id."信息修改成功",
                "op_time"=>time()
            ))->insert();
            return success_msg(MSG_EDIT_SUCCESS);
        }else{
            $this->JySysLog_model->set(array(
                "user_name"=>$this->login_user['user_name'],
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_UserGroup",
                "class_obj"=>"add",
                "result"=>$group_name."菜单信息添加成功",
                "op_time"=>time()
            ))->insert();
            return success_msg(MSG_ADD_SUCCESS);
        }
	}

	/**
	 * 检测是否为内置账户组
	 * @param $id	用户ID
	 * @return bool
	 */
	public function editable($id) {
        if ($id == JyUserGroup_model::BUILT_ID) {
			return false;
		}
		return true;
	}

	/**
	 * 获取列表
	 * @param unknown $options	数组
	 * @return multitype:NULL string
	 */
	public function get_list($options = array()) {
		$optionsKeys = array(
			"group_id",
			"group_name",
			"rows",
			"page"
		);
		extract(formatOptions($options, $optionsKeys));

		$where = array();
		$result = array();

		if (optionExists($group_id)) {
			$where['group_id'] = $group_id;
		}
		//username模糊查询
		if (optionExists($group_name)) {
			$where['group_name like'] = "%{$group_name}%";
		}

		//分页
		if (optionExists($rows) && optionExists($page)) {
			$result['total'] = $this->JyUserGroup_model->where($where)->count();
			$page = max($page, 1);
			$offset = ($page - 1) * $rows;
			$this->JyUserGroup_model->limit($rows, $offset);
		}
		//获取列表
		$list = $this->JyUserGroup_model->where($where)->get_list();
		//获取用户组
		foreach ($list as $k => $v) {
			$user = $this->JyUser_model->where("user_id",$v['owner_id'])->get_item();
			if (!empty($user)) {
				$list[$k]['user_name'] = $user['user_name'];
			}
		}
		$result['rows'] = $list;
		return $result;
	}

	/**
	 *	删除内容
	 */
	public function delete($options = array()) {
		$optionsKeys = array("group_id");
		extract(formatOptions($options, $optionsKeys));
		if (!$group_id) {
			return wrrong_msg(MSG_INVALID_ARGUMENTS);
		}
		if (!$this->editable($group_id)) {
			return wrrong_msg(self::MSG_BUILT);
		}

		$success = $this->JyUserGroup_model->where("group_id", $group_id)->delete();
		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
        $this->JySysLog_model->set(array(
            "user_name"=>$this->login_user['user_name'],
            "action"=>"IP地址: ".ip(),
            "class_name"=>"Admin_UserGroup",
            "class_obj"=>"editStatus",
            "result"=>"菜单ID：".$group_id."删除成功",
            "op_time"=>time()
        ))->insert();
		return success_msg(MSG_DELETE_SUCCESS);

	}

    /**
     * 修改状态
     * @param array $options
     * @return array
     */
    public function editStatus($options = array()){
        $optionsKeys = array(
            "group_id",
            "status"
        );
        extract(formatOptions($options, $optionsKeys));
        $data = array();
        if (!$group_id) {
            return wrrong_msg(MSG_INVALID_ARGUMENTS);
        }
        if (optionExists($status)) {
            $data['status'] = $status;
        }

        $success = $this->JyUserGroup_model->where("group_id", $group_id)->set($data)->update();
        if (!$success) {
            return wrrong_msg(MSG_SERVICE_BUSY);
        }
        $this->JySysLog_model->set(array(
            "user_name"=>$this->login_user['user_name'],
            "action"=>"IP地址: ".ip(),
            "class_name"=>"Admin_UserGroup",
            "class_obj"=>"editStatus",
            "result"=>"菜单ID：".$group_id."状态修改成功",
            "op_time"=>time()
        ))->insert();
        return success_msg(MSG_EDIT_SUCCESS);
    }

}
?>