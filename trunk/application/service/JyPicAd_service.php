<?php
class JyPicAd_service extends MY_Service {
	const MSG_USERNAME_NOT_NULL = "标题不能为空";
	const MSG_USERNAME_IS_EXISTS = "名称已存在";

	public function __construct() {
		parent::__construct();
		$this->loadModel("JyPicAd");
	}

	public function addoredit($options = array()) {
		$optionsKeys = array(
			"ad_id",
			"ad_title",
			"ad_position",
			"ad_hide",
			"ad_pic",
			"ad_url",
			"ad_time",
			"status"
		);
		extract(formatOptions($options, $optionsKeys));

		$data = array();

		if (optionExists($ad_id)) {
			$data['ad_id'] = $ad_id;
		}

		if (optionExists($ad_title)) {
			$data['ad_title'] = $ad_title;
		}

		if (optionExists($ad_position)) {
			$data['ad_position'] = $ad_position;
		}

		if (optionExists($ad_hide)) {
			$data['ad_hide'] = $ad_hide;
		}

		if (optionExists($ad_pic)) {
			$data['ad_pic'] = $ad_pic;
		}

		if (optionExists($ad_url)) {
			$data['ad_url'] = $ad_url;
		}else{
			$data['ad_url'] = '/';
		}

		if (optionExists($ad_time)) {
			$data['ad_time'] = strtotime($ad_time);
		}else{
            $data['ad_time'] = time();
        }

		if (optionExists($status)) {
			$data['status'] = $status;
		}

		if ($ad_id) {
			$success = $this->JyPicAd_model->where("ad_id", $ad_id)->set($data)->update();
		} else {
			if (empty($ad_title)) {
				return wrrong_msg(self::MSG_USERNAME_NOT_NULL);
			}
            $channel = $this->JyPicAd_model->where("ad_title",$ad_title)->get_list();
            if($channel){
                return wrrong_msg(self::MSG_USERNAME_IS_EXISTS);
            }
			$success = $this->JyPicAd_model->set($data)->insert();
		}

		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		if($ad_id){
            $this->JySysLog_model->set(array(
                "user_name"=>$this->login_user['user_name'],
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_JyPicAd",
                "class_obj"=>"edit",
                "result"=>$ad_title." ID：".$ad_id."信息修改成功",
                "op_time"=>time()
            ))->insert();
            return success_msg(MSG_EDIT_SUCCESS);
        }else{
            $this->JySysLog_model->set(array(
                "user_name"=>$this->login_user['user_name'],
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_JyPicAd",
                "class_obj"=>"add",
                "result"=>$ad_title."分类信息添加成功",
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
			"ad_id",
			"ad_title",
			"ad_hide",
			"rows",
			"status",
			"page",
            "desc"
		);
		extract(formatOptions($options, $optionsKeys));

		$where = array();
		$result = array();

		if (optionExists($ad_id)) {
			$where['ad_id'] = $ad_id;
		}
		if (optionExists($ad_hide)) {
			$where['ad_hide'] = $ad_hide;
		}
		if (optionExists($status)) {
			$where['status'] = $status;
		}
		//around_name模糊查询
		if (optionExists($ad_title)) {
			$where['ad_title like'] = "%{$ad_title}%";
		}

		//分页
		if (optionExists($rows) && optionExists($page)) {
			$result['total'] = $this->JyPicAd_model->where($where)->count();
			$page = max($page, 1);
			$offset = ($page - 1) * $rows;
			$this->JyPicAd_model->limit($rows, $offset);
		}
		//获取列表
        if($desc){
            $list = $this->JyPicAd_model->where($where)->order_by("ad_id", "DESC")->get_list();
        }else{
            $list = $this->JyPicAd_model->where($where)->get_list();
        }

		$result['rows'] = $list;
		return $result;
	}

	/**
	 *	删除内容
	 */
	public function delete($options = array()) {
		$optionsKeys = array("ad_id");
		extract(formatOptions($options, $optionsKeys));
		if (!$ad_id) {
			return wrrong_msg(MSG_INVALID_ARGUMENTS);
		}
		$success = $this->JyPicAd_model->where("ad_id", $ad_id)->delete();
		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
        $this->JySysLog_model->set(array(
            "user_name"=>$this->login_user['user_name'],
            "action"=>"IP地址: ".ip(),
            "class_name"=>"Admin_JyPicAd",
            "class_obj"=>"del",
            "result"=>"博客文章ID：".$ad_id."删除成功",
            "op_time"=>time()
        ))->insert();
		return success_msg(MSG_DELETE_SUCCESS);

	}

}
?>