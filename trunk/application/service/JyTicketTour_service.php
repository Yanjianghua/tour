<?php
class JyTicketTour_service extends MY_Service {
	const MSG_USERNAME_NOT_NULL = "名称不能为空";
	const MSG_USERNAME_IS_EXISTS = "名称已存在";

	public function __construct() {
		parent::__construct();
		$this->loadModel("JyTicketTour","JySystem");
	}

	public function addoredit($options = array()) {
		$optionsKeys = array(
			"ticket_id",
			"ticket_name",
			"ticket_start",
			"ticket_end",
			"ticket_day",
			"ticket_start_time",
			"ticket_address",
			"ticket_spot",
			"ticket_sub_line",
			"ticket_tel",
			"ticket_pic1",
			"ticket_pic2",
			"ticket_pic3",
			"ticket_pic4",
			"ticket_wap_pic1",
			"ticket_wap_pic2",
			"ticket_cost_price",
			"ticket_market_price",
			"ticket_details",
			"ticket_explain",
			"ticket_time",
			"status"
		);
		extract(formatOptions($options, $optionsKeys));

		$data = array();

		if (optionExists($ticket_id)) {
			$data['ticket_id'] = $ticket_id;
		}

		if (optionExists($ticket_name)) {
			$data['ticket_name'] = $ticket_name;
		}

		if (optionExists($ticket_start)) {
			$data['ticket_start'] = $ticket_start;
		}

		if (optionExists($ticket_end)) {
			$data['ticket_end'] = $ticket_end;
		}

		if (optionExists($ticket_day)) {
			$data['ticket_day'] = $ticket_day;
		}

		if (optionExists($ticket_start_time)) {
			$data['ticket_start_time'] = $ticket_start_time;
		}

		if (optionExists($ticket_address)) {
			$data['ticket_address'] = $ticket_address;
		}

		if (optionExists($ticket_spot)) {
			$data['ticket_spot'] = $ticket_spot;
		}

		if (optionExists($ticket_sub_line)) {
			$data['ticket_sub_line'] = $ticket_sub_line;
		}

		if (optionExists($ticket_tel)) {
			$data['ticket_tel'] = $ticket_tel;
		}

		if (optionExists($ticket_pic1)) {
			$data['ticket_pic1'] = $ticket_pic1;
		}
		if (optionExists($ticket_pic2)) {
			$data['ticket_pic2'] = $ticket_pic2;
		}
		if (optionExists($ticket_pic3)) {
			$data['ticket_pic3'] = $ticket_pic3;
		}
		if (optionExists($ticket_pic4)) {
			$data['ticket_pic4'] = $ticket_pic4;
		}
		if (optionExists($ticket_wap_pic1)) {
			$data['ticket_wap_pic1'] = $ticket_wap_pic1;
		}
		if (optionExists($ticket_wap_pic2)) {
			$data['ticket_wap_pic2'] = $ticket_wap_pic2;
		}
		if (optionExists($ticket_cost_price)) {
			$data['ticket_cost_price'] = $ticket_cost_price;
		}
		if (optionExists($ticket_market_price)) {
			$data['ticket_market_price'] = $ticket_market_price;
		}
		if (optionExists($ticket_details)) {
			$data['ticket_details'] = $ticket_details;
		}
		if (optionExists($ticket_explain)) {
			$data['ticket_explain'] = $ticket_explain;
		}

		if (optionExists($ticket_time)) {
			$data['ticket_time'] = strtotime($ticket_time);
		}else{
            $data['ticket_time'] = time();
        }

		if (optionExists($status)) {
			$data['status'] = $status;
		}

		if ($ticket_id) {
			$success = $this->JyTicketTour_model->where("ticket_id", $ticket_id)->set($data)->update();
		} else {
			if (empty($ticket_name)) {
				return wrrong_msg(self::MSG_USERNAME_NOT_NULL);
			}
            $channel = $this->JyTicketTour_model->where("ticket_name",$ticket_name)->get_list();
            if($channel){
                return wrrong_msg(self::MSG_USERNAME_IS_EXISTS);
            }
			$success = $this->JyTicketTour_model->set($data)->insert();
		}

		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		if($ticket_id){
            $this->JySysLog_model->set(array(
                "user_name"=>$this->login_user['user_name'],
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_JyTicketTour",
                "class_obj"=>"edit",
                "result"=>$ticket_name." 周边游ID：".$ticket_id."信息修改成功",
                "op_time"=>time()
            ))->insert();
            return success_msg(MSG_EDIT_SUCCESS);
        }else{
            $this->JySysLog_model->set(array(
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_JyTicketTour",
                "class_obj"=>"add",
                "result"=>$ticket_name."分类信息添加成功",
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
			"ticket_id",
			"ticket_name",
            "ticket_start",
            "ticket_end",
            "ticket_day",
            "ticket_start_time",
            "ticket_sub_line",
			"rows",
			"status",
			"page",
            "desc"
		);
		extract(formatOptions($options, $optionsKeys));

		$where = array();
		$result = array();

		if (optionExists($ticket_id)) {
			$where['ticket_id'] = $ticket_id;
		}
		if (optionExists($status)) {
			$where['status >='] = $status;
		}
		if (optionExists($ticket_start)) {
			$where['ticket_start'] = $ticket_start;
		}
		if (optionExists($ticket_end)) {
			$where['ticket_end'] = $ticket_end;
		}
		if (optionExists($ticket_day)) {
			$where['ticket_day'] = $ticket_day;
		}
		if (optionExists($ticket_start_time)) {
			$where['ticket_start_time'] = $ticket_start_time;
		}
		if (optionExists($ticket_sub_line)) {
			$where['ticket_sub_line'] = $ticket_sub_line;
		}
		//ticket_name模糊查询
		if (optionExists($ticket_name)) {
			$where['ticket_name like'] = "%{$ticket_name}%";
		}

		//分页
		if (optionExists($rows) && optionExists($page)) {
			$result['total'] = $this->JyTicketTour_model->where($where)->count();
			$page = max($page, 1);
			$offset = ($page - 1) * $rows;
			$this->JyTicketTour_model->limit($rows, $offset);
		}
		//获取列表
        if($desc){
            $list = $this->JyTicketTour_model->where($where)->order_by("ticket_id", "DESC")->get_list();
        }else{
            $list = $this->JyTicketTour_model->where($where)->get_list();
        }

        foreach ($list as $k=>$v){
            if(!empty($v['ticket_start'])){
                $system = $this->JySystem_model->where('system_id',$v['ticket_start'])->get_item();
                $list[$k]['ticket_start_name'] = $system['system_name'];
            }else{
                $list[$k]['ticket_start_name'] = '';
            }
            if(!empty($v['ticket_end'])){
                $system = $this->JySystem_model->where('system_id',$v['ticket_end'])->get_item();
                $list[$k]['ticket_end_name'] = $system['system_name'];
            }else{
                $list[$k]['ticket_end_name'] = '';
            }
            if(!empty($v['ticket_day'])){
                $system = $this->JySystem_model->where('system_id',$v['ticket_day'])->get_item();
                $list[$k]['ticket_day_name'] = $system['system_name'];
            }else{
                $list[$k]['ticket_day_name'] = '';
            }
            if(!empty($v['ticket_start_time'])){
                $system = $this->JySystem_model->where('system_id',$v['ticket_start_time'])->get_item();
                $list[$k]['ticket_start_time_name'] = $system['system_name'];
            }else{
                $list[$k]['ticket_start_time_name'] = '';
            }
            if(!empty($v['ticket_sub_line'])){
                $system = $this->JySystem_model->where('system_id',$v['ticket_sub_line'])->get_item();
                $list[$k]['ticket_sub_line_name'] = $system['system_name'];
            }else{
                $list[$k]['ticket_sub_line_name'] = '';
            }
        }
		$result['rows'] = $list;
		return $result;
	}

	/**
	 *	删除内容
	 */
	public function delete($options = array()) {
		$optionsKeys = array("ticket_id");
		extract(formatOptions($options, $optionsKeys));
		if (!$ticket_id) {
			return wrrong_msg(MSG_INVALID_ARGUMENTS);
		}
		$success = $this->JyTicketTour_model->where("ticket_id", $ticket_id)->delete();
		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
        $this->JySysLog_model->set(array(
            "user_name"=>$this->login_user['user_name'],
            "action"=>"IP地址: ".ip(),
            "class_name"=>"Admin_JyTicketTour",
            "class_obj"=>"del",
            "result"=>"周边游ID：".$ticket_id."删除成功",
            "op_time"=>time()
        ))->insert();
		return success_msg(MSG_DELETE_SUCCESS);

	}

}
?>