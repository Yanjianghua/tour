<?php
class JySystem_service extends MY_Service {
	const MSG_USERNAME_NOT_NULL = "标题不能为空";
	const MSG_USERNAME_IS_EXISTS = "名称已存在";

	public function __construct() {
		parent::__construct();
		$this->loadModel("JySystem");
	}

	public function addoredit($options = array()) {
		$optionsKeys = array(
			"system_id",
			"system_name",
			"system_class",
			"system_type",
			"system_hide",
			"system_note",
			"system_time",
			"status"
		);
		extract(formatOptions($options, $optionsKeys));

		$data = array();

		if (optionExists($system_id)) {
			$data['system_id'] = $system_id;
		}

		if (optionExists($system_name)) {
			$data['system_name'] = $system_name;
		}

		if (optionExists($system_class)) {
			$data['system_class'] = $system_class;
		}

		if (optionExists($system_type)) {
			$data['system_type'] = $system_type;
		}

		if (optionExists($system_hide)) {
			$data['system_hide'] = $system_hide;
		}

		if (optionExists($system_note)) {
			$data['system_note'] = $system_note;
		}

		if (optionExists($system_time)) {
			$data['system_time'] = strtotime($system_time);
		}else{
            $data['system_time'] = time();
        }

		if (optionExists($status)) {
			$data['status'] = $status;
		}

		if ($system_id) {
			$success = $this->JySystem_model->where("system_id", $system_id)->set($data)->update();
		} else {
			if (empty($system_name)) {
				return wrrong_msg(self::MSG_USERNAME_NOT_NULL);
			}
//            $channel = $this->JySystem_model->where("system_name",$system_name)->get_list();
//            if($channel){
//                return wrrong_msg(self::MSG_USERNAME_IS_EXISTS);
//            }
			$success = $this->JySystem_model->set($data)->insert();
		}

		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		if($system_id){
            $this->JySysLog_model->set(array(
                "user_name"=>$this->login_user['user_name'],
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_JyAroundTour",
                "class_obj"=>"edit",
                "result"=>$system_name." 文章ID：".$system_id."信息修改成功",
                "op_time"=>time()
            ))->insert();
            return success_msg(MSG_EDIT_SUCCESS);
        }else{
            $this->JySysLog_model->set(array(
                "user_name"=>$this->login_user['user_name'],
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_JyAroundTour",
                "class_obj"=>"add",
                "result"=>$system_name."分类信息添加成功",
                "op_time"=>time()
            ))->insert();
            return success_msg(MSG_ADD_SUCCESS);
        }
	}

	/**
	 * 获取列表
	 * @param unknown $options	数组
	 * @return multitype:NULL string
	 */
	public function get_list($options = array()) {
		$optionsKeys = array(
			"system_id",
			"system_class",
			"system_type",
			"system_name",
			"rows",
			"status",
			"page",
            "desc"
		);
		extract(formatOptions($options, $optionsKeys));

		$where = array();
		$result = array();

		if (optionExists($system_id)) {
			$where['system_id'] = $system_id;
		}
		if (optionExists($status)) {
			$where['status >='] = $status;
		}
		if (optionExists($system_class)) {
			$where['system_class'] = $system_class;
		}
		if (optionExists($system_type)) {
			$where['system_type'] = $system_type;
		}
		//around_name模糊查询
		if (optionExists($system_name)) {
			$where['system_name like'] = "%{$system_name}%";
		}

		//分页
		if (optionExists($rows) && optionExists($page)) {
			$result['total'] = $this->JySystem_model->where($where)->count();
			$page = max($page, 1);
			$offset = ($page - 1) * $rows;
			$this->JySystem_model->limit($rows, $offset);
		}
		//获取列表
        if($desc){
            $list = $this->JySystem_model->where($where)->order_by("system_id", "DESC")->get_list();
        }else{
            $list = $this->JySystem_model->where($where)->get_list();
        }

        $channel = json_decode(JySystem_model::CHANNEL_ARRAY,true);
        $type = json_decode(JySystem_model::TYPE_ARRAY,true);
        foreach ($list as $k=>$v){
            foreach ($channel as $key=>$value){
                if($v['system_class']==$key){
                    $list[$k]['system_class_name'] = $value;
                }
            }
        }
        foreach ($list as $k=>$v){
            foreach ($type as $key=>$value){
                if($v['system_type']==$key){
                    $list[$k]['system_type_name'] = $value;
                }
            }
        }

		$result['rows'] = $list;
		return $result;
	}

	/**
	 *	删除内容
	 */
	public function delete($options = array()) {
		$optionsKeys = array("system_id");
		extract(formatOptions($options, $optionsKeys));
		if (!$system_id) {
			return wrrong_msg(MSG_INVALID_ARGUMENTS);
		}
		$success = $this->JySystem_model->where("system_id", $system_id)->delete();
		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
        $this->JySysLog_model->set(array(
            "user_name"=>$this->login_user['user_name'],
            "action"=>"IP地址: ".ip(),
            "class_name"=>"Admin_JyAroundTour",
            "class_obj"=>"del",
            "result"=>"博客文章ID：".$system_id."删除成功",
            "op_time"=>time()
        ))->insert();
		return success_msg(MSG_DELETE_SUCCESS);

	}

    /**
     * ajax获取
     */
    public function read_addoredit_ajax($options = array()){
        $optionsKeys = array(
            "article_id",
        );
        extract(formatOptions($options, $optionsKeys));
        $data = array();
        if (optionExists($article_id)) {
            $list = $this->JySystem_model->where('article_id',$article_id)->get_item();
            $data['article_readnumber'] = $list['article_readnumber']+1;
            $success = $this->JySystem_model->set($data)->where("article_id", $article_id)->update();
            if (!$success) {
                return wrrong_msg(MSG_SERVICE_BUSY);
            }
        }else{
            return wrrong_msg(MSG_INVALID_ARGUMENTS);
        }
        return wrrong_msg(MSG_METHOD_SUCCESS);
    }

}
?>