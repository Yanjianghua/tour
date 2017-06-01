<?php
class JyThemeTour_service extends MY_Service {
	const MSG_USERNAME_NOT_NULL = "名称不能为空";
	const MSG_USERNAME_IS_EXISTS = "名称已存在";

	public function __construct() {
		parent::__construct();
		$this->loadModel("JyThemeTour","JySystem");
	}

	public function addoredit($options = array()) {
		$optionsKeys = array(
			"theme_id",
			"theme_name",
			"theme_start",
			"theme_end",
			"theme_day",
			"theme_start_time",
			"theme_address",
			"theme_spot",
			"theme_sub_line",
			"theme_tel",
			"theme_pic1",
			"theme_pic2",
			"theme_pic3",
			"theme_pic4",
			"theme_wap_pic1",
			"theme_wap_pic2",
			"theme_cost_price",
			"theme_market_price",
			"theme_details",
			"theme_explain",
			"theme_time",
			"status"
		);
		extract(formatOptions($options, $optionsKeys));

		$data = array();

		if (optionExists($theme_id)) {
			$data['theme_id'] = $theme_id;
		}

		if (optionExists($theme_name)) {
			$data['theme_name'] = $theme_name;
		}

		if (optionExists($theme_start)) {
			$data['theme_start'] = $theme_start;
		}

		if (optionExists($theme_end)) {
			$data['theme_end'] = $theme_end;
		}

		if (optionExists($theme_day)) {
			$data['theme_day'] = $theme_day;
		}

		if (optionExists($theme_start_time)) {
			$data['theme_start_time'] = $theme_start_time;
		}

		if (optionExists($theme_address)) {
			$data['theme_address'] = $theme_address;
		}

		if (optionExists($theme_spot)) {
			$data['theme_spot'] = $theme_spot;
		}

		if (optionExists($theme_sub_line)) {
			$data['theme_sub_line'] = $theme_sub_line;
		}

		if (optionExists($theme_tel)) {
			$data['theme_tel'] = $theme_tel;
		}

		if (optionExists($theme_pic1)) {
			$data['theme_pic1'] = $theme_pic1;
		}
		if (optionExists($theme_pic2)) {
			$data['theme_pic2'] = $theme_pic2;
		}
		if (optionExists($theme_pic3)) {
			$data['theme_pic3'] = $theme_pic3;
		}
		if (optionExists($theme_pic4)) {
			$data['theme_pic4'] = $theme_pic4;
		}
		if (optionExists($theme_wap_pic1)) {
			$data['theme_wap_pic1'] = $theme_wap_pic1;
		}
		if (optionExists($theme_wap_pic2)) {
			$data['theme_wap_pic2'] = $theme_wap_pic2;
		}
		if (optionExists($theme_cost_price)) {
			$data['theme_cost_price'] = $theme_cost_price;
		}
		if (optionExists($theme_market_price)) {
			$data['theme_market_price'] = $theme_market_price;
		}
		if (optionExists($theme_details)) {
			$data['theme_details'] = $theme_details;
		}
		if (optionExists($theme_explain)) {
			$data['theme_explain'] = $theme_explain;
		}

		if (optionExists($theme_time)) {
			$data['theme_time'] = strtotime($theme_time);
		}else{
            $data['theme_time'] = time();
        }

		if (optionExists($status)) {
			$data['status'] = $status;
		}

		if ($theme_id) {
			$success = $this->JyThemeTour_model->where("theme_id", $theme_id)->set($data)->update();
		} else {
			if (empty($theme_name)) {
				return wrrong_msg(self::MSG_USERNAME_NOT_NULL);
			}
            $channel = $this->JyThemeTour_model->where("theme_name",$theme_name)->get_list();
            if($channel){
                return wrrong_msg(self::MSG_USERNAME_IS_EXISTS);
            }
			$success = $this->JyThemeTour_model->set($data)->insert();
		}

		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		if($theme_id){
            $this->JySysLog_model->set(array(
                "user_name"=>$this->login_user['user_name'],
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_JyThemeTour",
                "class_obj"=>"edit",
                "result"=>$theme_name." 周边游ID：".$theme_id."信息修改成功",
                "op_time"=>time()
            ))->insert();
            return success_msg(MSG_EDIT_SUCCESS);
        }else{
            $this->JySysLog_model->set(array(
                "user_name"=>$this->login_user['user_name'],
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_JyThemeTour",
                "class_obj"=>"add",
                "result"=>$theme_name."分类信息添加成功",
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
			"theme_id",
			"theme_name",
            "theme_start",
            "theme_end",
            "theme_day",
            "theme_start_time",
            "theme_sub_line",
			"rows",
			"status",
			"page",
            "desc"
		);
		extract(formatOptions($options, $optionsKeys));

		$where = array();
		$result = array();

		if (optionExists($theme_id)) {
			$where['theme_id'] = $theme_id;
		}
		if (optionExists($status)) {
			$where['status >='] = $status;
		}
		if (optionExists($theme_start)) {
			$where['theme_start'] = $theme_start;
		}
		if (optionExists($theme_end)) {
			$where['theme_end'] = $theme_end;
		}
		if (optionExists($theme_day)) {
			$where['theme_day'] = $theme_day;
		}
		if (optionExists($theme_start_time)) {
			$where['theme_start_time'] = $theme_start_time;
		}
		if (optionExists($theme_sub_line)) {
			$where['theme_sub_line'] = $theme_sub_line;
		}
		//theme_name模糊查询
		if (optionExists($theme_name)) {
			$where['theme_name like'] = "%{$theme_name}%";
		}

		//分页
		if (optionExists($rows) && optionExists($page)) {
			$result['total'] = $this->JyThemeTour_model->where($where)->count();
			$page = max($page, 1);
			$offset = ($page - 1) * $rows;
			$this->JyThemeTour_model->limit($rows, $offset);
		}
		//获取列表
        if($desc){
            $list = $this->JyThemeTour_model->where($where)->order_by("theme_id", "DESC")->get_list();
        }else{
            $list = $this->JyThemeTour_model->where($where)->get_list();
        }

        foreach ($list as $k=>$v){
            if(!empty($v['theme_start'])){
                $system = $this->JySystem_model->where('system_id',$v['theme_start'])->get_item();
                $list[$k]['theme_start_name'] = $system['system_name'];
            }else{
                $list[$k]['theme_start_name'] = '';
            }
            if(!empty($v['theme_end'])){
                $system = $this->JySystem_model->where('system_id',$v['theme_end'])->get_item();
                $list[$k]['theme_end_name'] = $system['system_name'];
            }else{
                $list[$k]['theme_end_name'] = '';
            }
            if(!empty($v['theme_day'])){
                $system = $this->JySystem_model->where('system_id',$v['theme_day'])->get_item();
                $list[$k]['theme_day_name'] = $system['system_name'];
            }else{
                $list[$k]['theme_day_name'] = '';
            }
            if(!empty($v['theme_start_time'])){
                $system = $this->JySystem_model->where('system_id',$v['theme_start_time'])->get_item();
                $list[$k]['theme_start_time_name'] = $system['system_name'];
            }else{
                $list[$k]['theme_start_time_name'] = '';
            }
            if(!empty($v['theme_sub_line'])){
                $system = $this->JySystem_model->where('system_id',$v['theme_sub_line'])->get_item();
                $list[$k]['theme_sub_line_name'] = $system['system_name'];
            }else{
                $list[$k]['theme_sub_line_name'] = '';
            }
        }
		$result['rows'] = $list;
		return $result;
	}

	/**
	 *	删除内容
	 */
	public function delete($options = array()) {
		$optionsKeys = array("theme_id");
		extract(formatOptions($options, $optionsKeys));
		if (!$theme_id) {
			return wrrong_msg(MSG_INVALID_ARGUMENTS);
		}
		$success = $this->JyThemeTour_model->where("theme_id", $theme_id)->delete();
		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
        $this->JySysLog_model->set(array(
            "user_name"=>$this->login_user['user_name'],
            "action"=>"IP地址: ".ip(),
            "class_name"=>"Admin_JyThemeTour",
            "class_obj"=>"del",
            "result"=>"周边游ID：".$theme_id."删除成功",
            "op_time"=>time()
        ))->insert();
		return success_msg(MSG_DELETE_SUCCESS);

	}

}
?>