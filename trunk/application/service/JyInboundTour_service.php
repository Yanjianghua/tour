<?php
class JyInboundTour_service extends MY_Service {
	const MSG_USERNAME_NOT_NULL = "名称不能为空";
	const MSG_USERNAME_IS_EXISTS = "名称已存在";

	public function __construct() {
		parent::__construct();
		$this->loadModel("JyInboundTour","JySystem");
	}

	public function addoredit($options = array()) {
		$optionsKeys = array(
			"inbound_id",
			"inbound_name",
			"inbound_start",
			"inbound_end",
			"inbound_day",
			"inbound_start_time",
			"inbound_address",
			"inbound_spot",
			"inbound_sub_line",
			"inbound_tel",
			"inbound_pic1",
			"inbound_pic2",
			"inbound_pic3",
			"inbound_pic4",
			"inbound_wap_pic1",
			"inbound_wap_pic2",
			"inbound_cost_price",
			"inbound_market_price",
			"inbound_details",
			"inbound_explain",
			"inbound_time",
			"status"
		);
		extract(formatOptions($options, $optionsKeys));

		$data = array();

		if (optionExists($inbound_id)) {
			$data['inbound_id'] = $inbound_id;
		}

		if (optionExists($inbound_name)) {
			$data['inbound_name'] = $inbound_name;
		}

		if (optionExists($inbound_start)) {
			$data['inbound_start'] = $inbound_start;
		}

		if (optionExists($inbound_end)) {
			$data['inbound_end'] = $inbound_end;
		}

		if (optionExists($inbound_day)) {
			$data['inbound_day'] = $inbound_day;
		}

		if (optionExists($inbound_start_time)) {
			$data['inbound_start_time'] = $inbound_start_time;
		}

		if (optionExists($inbound_address)) {
			$data['inbound_address'] = $inbound_address;
		}

		if (optionExists($inbound_spot)) {
			$data['inbound_spot'] = $inbound_spot;
		}

		if (optionExists($inbound_sub_line)) {
			$data['inbound_sub_line'] = $inbound_sub_line;
		}

		if (optionExists($inbound_tel)) {
			$data['inbound_tel'] = $inbound_tel;
		}

		if (optionExists($inbound_pic1)) {
			$data['inbound_pic1'] = $inbound_pic1;
		}
		if (optionExists($inbound_pic2)) {
			$data['inbound_pic2'] = $inbound_pic2;
		}
		if (optionExists($inbound_pic3)) {
			$data['inbound_pic3'] = $inbound_pic3;
		}
		if (optionExists($inbound_pic4)) {
			$data['inbound_pic4'] = $inbound_pic4;
		}
		if (optionExists($inbound_wap_pic1)) {
			$data['inbound_wap_pic1'] = $inbound_wap_pic1;
		}
		if (optionExists($inbound_wap_pic2)) {
			$data['inbound_wap_pic2'] = $inbound_wap_pic2;
		}
		if (optionExists($inbound_cost_price)) {
			$data['inbound_cost_price'] = $inbound_cost_price;
		}
		if (optionExists($inbound_market_price)) {
			$data['inbound_market_price'] = $inbound_market_price;
		}
		if (optionExists($inbound_details)) {
			$data['inbound_details'] = $inbound_details;
		}
		if (optionExists($inbound_explain)) {
			$data['inbound_explain'] = $inbound_explain;
		}

		if (optionExists($inbound_time)) {
			$data['inbound_time'] = strtotime($inbound_time);
		}else{
            $data['inbound_time'] = time();
        }

		if (optionExists($status)) {
			$data['status'] = $status;
		}

		if ($inbound_id) {
			$success = $this->JyInboundTour_model->where("inbound_id", $inbound_id)->set($data)->update();
		} else {
			if (empty($inbound_name)) {
				return wrrong_msg(self::MSG_USERNAME_NOT_NULL);
			}
            $channel = $this->JyInboundTour_model->where("inbound_name",$inbound_name)->get_list();
            if($channel){
                return wrrong_msg(self::MSG_USERNAME_IS_EXISTS);
            }
			$success = $this->JyInboundTour_model->set($data)->insert();
		}

		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		if($inbound_id){
            $this->JySysLog_model->set(array(
                "user_name"=>$this->login_user['user_name'],
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_JyinboundTour",
                "class_obj"=>"edit",
                "result"=>$inbound_name." 周边游ID：".$inbound_id."信息修改成功",
                "op_time"=>time()
            ))->insert();
            return success_msg(MSG_EDIT_SUCCESS);
        }else{
            $this->JySysLog_model->set(array(
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_JyInboundTour",
                "class_obj"=>"add",
                "result"=>$inbound_name."分类信息添加成功",
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
			"inbound_id",
			"inbound_name",
            "inbound_start",
            "inbound_end",
            "inbound_day",
            "inbound_start_time",
            "inbound_sub_line",
			"rows",
			"status",
			"page",
            "desc"
		);
		extract(formatOptions($options, $optionsKeys));

		$where = array();
		$result = array();

		if (optionExists($inbound_id)) {
			$where['inbound_id'] = $inbound_id;
		}
		if (optionExists($status)) {
			$where['status >='] = $status;
		}
		if (optionExists($inbound_start)) {
			$where['inbound_start'] = $inbound_start;
		}
		if (optionExists($inbound_end)) {
			$where['inbound_end'] = $inbound_end;
		}
		if (optionExists($inbound_day)) {
			$where['inbound_day'] = $inbound_day;
		}
		if (optionExists($inbound_start_time)) {
			$where['inbound_start_time'] = $inbound_start_time;
		}
		if (optionExists($inbound_sub_line)) {
			$where['inbound_sub_line'] = $inbound_sub_line;
		}
		//inbound_name模糊查询
		if (optionExists($inbound_name)) {
			$where['inbound_name like'] = "%{$inbound_name}%";
		}

		//分页
		if (optionExists($rows) && optionExists($page)) {
			$result['total'] = $this->JyInboundTour_model->where($where)->count();
			$page = max($page, 1);
			$offset = ($page - 1) * $rows;
			$this->JyInboundTour_model->limit($rows, $offset);
		}
		//获取列表
        if($desc){
            $list = $this->JyInboundTour_model->where($where)->order_by("inbound_id", "DESC")->get_list();
        }else{
            $list = $this->JyInboundTour_model->where($where)->get_list();
        }

        foreach ($list as $k=>$v){
            if(!empty($v['inbound_start'])){
                $system = $this->JySystem_model->where('system_id',$v['inbound_start'])->get_item();
                $list[$k]['inbound_start_name'] = $system['system_name'];
            }else{
                $list[$k]['inbound_start_name'] = '';
            }
            if(!empty($v['inbound_end'])){
                $system = $this->JySystem_model->where('system_id',$v['inbound_end'])->get_item();
                $list[$k]['inbound_end_name'] = $system['system_name'];
            }else{
                $list[$k]['inbound_end_name'] = '';
            }
            if(!empty($v['inbound_day'])){
                $system = $this->JySystem_model->where('system_id',$v['inbound_day'])->get_item();
                $list[$k]['inbound_day_name'] = $system['system_name'];
            }else{
                $list[$k]['inbound_day_name'] = '';
            }
            if(!empty($v['inbound_start_time'])){
                $system = $this->JySystem_model->where('system_id',$v['inbound_start_time'])->get_item();
                $list[$k]['inbound_start_time_name'] = $system['system_name'];
            }else{
                $list[$k]['inbound_start_time_name'] = '';
            }
            if(!empty($v['inbound_sub_line'])){
                $system = $this->JySystem_model->where('system_id',$v['inbound_sub_line'])->get_item();
                $list[$k]['inbound_sub_line_name'] = $system['system_name'];
            }else{
                $list[$k]['inbound_sub_line_name'] = '';
            }
        }
		$result['rows'] = $list;
		return $result;
	}

	/**
	 *	删除内容
	 */
	public function delete($options = array()) {
		$optionsKeys = array("inbound_id");
		extract(formatOptions($options, $optionsKeys));
		if (!$inbound_id) {
			return wrrong_msg(MSG_INVALID_ARGUMENTS);
		}
		$success = $this->JyInboundTour_model->where("inbound_id", $inbound_id)->delete();
		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
        $this->JySysLog_model->set(array(
            "user_name"=>$this->login_user['user_name'],
            "action"=>"IP地址: ".ip(),
            "class_name"=>"Admin_JyInboundTour",
            "class_obj"=>"del",
            "result"=>"周边游ID：".$inbound_id."删除成功",
            "op_time"=>time()
        ))->insert();
		return success_msg(MSG_DELETE_SUCCESS);

	}

}
?>