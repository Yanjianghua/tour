<?php
class JyAroundTour_service extends MY_Service {
	const MSG_USERNAME_NOT_NULL = "名称不能为空";
	const MSG_USERNAME_IS_EXISTS = "名称已存在";

	public function __construct() {
		parent::__construct();
		$this->loadModel("JyAroundTour","JySystem");
	}

	public function addoredit($options = array()) {
		$optionsKeys = array(
			"around_id",
			"around_name",
			"around_start",
			"around_end",
			"around_day",
			"around_start_time",
			"around_address",
			"around_spot",
			"around_sub_line",
			"around_tel",
			"around_pic1",
			"around_pic2",
			"around_pic3",
			"around_pic4",
			"around_wap_pic1",
			"around_wap_pic2",
			"around_cost_price",
			"around_market_price",
			"around_details",
			"around_explain",
			"around_time",
			"status"
		);
		extract(formatOptions($options, $optionsKeys));

		$data = array();

		if (optionExists($around_id)) {
			$data['around_id'] = $around_id;
		}

		if (optionExists($around_name)) {
			$data['around_name'] = $around_name;
		}

		if (optionExists($around_start)) {
			$data['around_start'] = $around_start;
		}

		if (optionExists($around_end)) {
			$data['around_end'] = $around_end;
		}

		if (optionExists($around_day)) {
			$data['around_day'] = $around_day;
		}

		if (optionExists($around_start_time)) {
			$data['around_start_time'] = $around_start_time;
		}

		if (optionExists($around_address)) {
			$data['around_address'] = $around_address;
		}

		if (optionExists($around_spot)) {
			$data['around_spot'] = $around_spot;
		}

		if (optionExists($around_sub_line)) {
			$data['around_sub_line'] = $around_sub_line;
		}

		if (optionExists($around_tel)) {
			$data['around_tel'] = $around_tel;
		}

		if (optionExists($around_pic1)) {
			$data['around_pic1'] = $around_pic1;
		}
		if (optionExists($around_pic2)) {
			$data['around_pic2'] = $around_pic2;
		}
		if (optionExists($around_pic3)) {
			$data['around_pic3'] = $around_pic3;
		}
		if (optionExists($around_pic4)) {
			$data['around_pic4'] = $around_pic4;
		}
		if (optionExists($around_wap_pic1)) {
			$data['around_wap_pic1'] = $around_wap_pic1;
		}
		if (optionExists($around_wap_pic2)) {
			$data['around_wap_pic2'] = $around_wap_pic2;
		}
		if (optionExists($around_cost_price)) {
			$data['around_cost_price'] = $around_cost_price;
		}
		if (optionExists($around_market_price)) {
			$data['around_market_price'] = $around_market_price;
		}
		if (optionExists($around_details)) {
			$data['around_details'] = $around_details;
		}
		if (optionExists($around_explain)) {
			$data['around_explain'] = $around_explain;
		}

		if (optionExists($around_time)) {
			$data['around_time'] = strtotime($around_time);
		}else{
            $data['around_time'] = time();
        }

		if (optionExists($status)) {
			$data['status'] = $status;
		}

		if ($around_id) {
			$success = $this->JyAroundTour_model->where("around_id", $around_id)->set($data)->update();
		} else {
			if (empty($around_name)) {
				return wrrong_msg(self::MSG_USERNAME_NOT_NULL);
			}
            $channel = $this->JyAroundTour_model->where("around_name",$around_name)->get_list();
            if($channel){
                return wrrong_msg(self::MSG_USERNAME_IS_EXISTS);
            }
			$success = $this->JyAroundTour_model->set($data)->insert();
		}

		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		if($around_id){
            $this->JySysLog_model->set(array(
                "user_name"=>$this->login_user['user_name'],
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_JyAroundTour",
                "class_obj"=>"edit",
                "result"=>$around_name." 周边游ID：".$around_id."信息修改成功",
                "op_time"=>time()
            ))->insert();
            return success_msg(MSG_EDIT_SUCCESS);
        }else{
            $this->JySysLog_model->set(array(
                "user_name"=>$this->login_user['user_name'],
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_JyAroundTour",
                "class_obj"=>"add",
                "result"=>$around_name."分类信息添加成功",
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
			"around_id",
			"around_name",
            "around_start",
            "around_end",
            "around_day",
            "around_start_time",
            "around_sub_line",
			"rows",
			"status",
			"page",
            "desc"
		);
		extract(formatOptions($options, $optionsKeys));

		$where = array();
		$result = array();

		if (optionExists($around_id)) {
			$where['around_id'] = $around_id;
		}
		if (optionExists($status)) {
			$where['status >='] = $status;
		}
		if (optionExists($around_start)) {
			$where['around_start'] = $around_start;
		}
		if (optionExists($around_end)) {
			$where['around_end'] = $around_end;
		}
		if (optionExists($around_day)) {
			$where['around_day'] = $around_day;
		}
		if (optionExists($around_start_time)) {
			$where['around_start_time'] = $around_start_time;
		}
		if (optionExists($around_sub_line)) {
			$where['around_sub_line'] = $around_sub_line;
		}
		//around_name模糊查询
		if (optionExists($around_name)) {
			$where['around_name like'] = "%{$around_name}%";
		}

		//分页
		if (optionExists($rows) && optionExists($page)) {
			$result['total'] = $this->JyAroundTour_model->where($where)->count();
			$page = max($page, 1);
			$offset = ($page - 1) * $rows;
			$this->JyAroundTour_model->limit($rows, $offset);
		}
		//获取列表
        if($desc){
            $list = $this->JyAroundTour_model->where($where)->order_by("around_id", "DESC")->get_list();
        }else{
            $list = $this->JyAroundTour_model->where($where)->get_list();
        }

        foreach ($list as $k=>$v){
            if(!empty($v['around_start'])){
                $system = $this->JySystem_model->where('system_id',$v['around_start'])->get_item();
                $list[$k]['around_start_name'] = $system['system_name'];
            }else{
                $list[$k]['around_start_name'] = '';
            }
            if(!empty($v['around_end'])){
                $system = $this->JySystem_model->where('system_id',$v['around_end'])->get_item();
                $list[$k]['around_end_name'] = $system['system_name'];
            }else{
                $list[$k]['around_end_name'] = '';
            }
            if(!empty($v['around_day'])){
                $system = $this->JySystem_model->where('system_id',$v['around_day'])->get_item();
                $list[$k]['around_day_name'] = $system['system_name'];
            }else{
                $list[$k]['around_day_name'] = '';
            }
            if(!empty($v['around_start_time'])){
                $system = $this->JySystem_model->where('system_id',$v['around_start_time'])->get_item();
                $list[$k]['around_start_time_name'] = $system['system_name'];
            }else{
                $list[$k]['around_start_time_name'] = '';
            }
            if(!empty($v['around_sub_line'])){
                $system = $this->JySystem_model->where('system_id',$v['around_sub_line'])->get_item();
                $list[$k]['around_sub_line_name'] = $system['system_name'];
            }else{
                $list[$k]['around_sub_line_name'] = '';
            }
        }
		$result['rows'] = $list;
		return $result;
	}

	/**
	 *	删除内容
	 */
	public function delete($options = array()) {
		$optionsKeys = array("around_id");
		extract(formatOptions($options, $optionsKeys));
		if (!$around_id) {
			return wrrong_msg(MSG_INVALID_ARGUMENTS);
		}
		$success = $this->JyAroundTour_model->where("around_id", $around_id)->delete();
		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
        $this->JySysLog_model->set(array(
            "user_name"=>$this->login_user['user_name'],
            "action"=>"IP地址: ".ip(),
            "class_name"=>"Admin_JyAroundTour",
            "class_obj"=>"del",
            "result"=>"周边游ID：".$around_id."删除成功",
            "op_time"=>time()
        ))->insert();
		return success_msg(MSG_DELETE_SUCCESS);

	}

}
?>