<?php
class JyOutboundTour_service extends MY_Service {
	const MSG_USERNAME_NOT_NULL = "名称不能为空";
	const MSG_USERNAME_IS_EXISTS = "名称已存在";

	public function __construct() {
		parent::__construct();
		$this->loadModel("JyOutboundTour","JySystem");
	}

	public function addoredit($options = array()) {
		$optionsKeys = array(
			"outbound_id",
			"outbound_name",
			"outbound_start",
			"outbound_end",
			"outbound_day",
			"outbound_start_time",
			"outbound_address",
			"outbound_spot",
			"outbound_sub_line",
			"outbound_tel",
			"outbound_pic1",
			"outbound_pic2",
			"outbound_pic3",
			"outbound_pic4",
			"outbound_wap_pic1",
			"outbound_wap_pic2",
			"outbound_cost_price",
			"outbound_market_price",
			"outbound_details",
			"outbound_explain",
			"outbound_time",
			"status"
		);
		extract(formatOptions($options, $optionsKeys));

		$data = array();

		if (optionExists($outbound_id)) {
			$data['outbound_id'] = $outbound_id;
		}

		if (optionExists($outbound_name)) {
			$data['outbound_name'] = $outbound_name;
		}

		if (optionExists($outbound_start)) {
			$data['outbound_start'] = $outbound_start;
		}

		if (optionExists($outbound_end)) {
			$data['outbound_end'] = $outbound_end;
		}

		if (optionExists($outbound_day)) {
			$data['outbound_day'] = $outbound_day;
		}

		if (optionExists($outbound_start_time)) {
			$data['outbound_start_time'] = $outbound_start_time;
		}

		if (optionExists($outbound_address)) {
			$data['outbound_address'] = $outbound_address;
		}

		if (optionExists($outbound_spot)) {
			$data['outbound_spot'] = $outbound_spot;
		}

		if (optionExists($outbound_sub_line)) {
			$data['outbound_sub_line'] = $outbound_sub_line;
		}

		if (optionExists($outbound_tel)) {
			$data['outbound_tel'] = $outbound_tel;
		}

		if (optionExists($outbound_pic1)) {
			$data['outbound_pic1'] = $outbound_pic1;
		}
		if (optionExists($outbound_pic2)) {
			$data['outbound_pic2'] = $outbound_pic2;
		}
		if (optionExists($outbound_pic3)) {
			$data['outbound_pic3'] = $outbound_pic3;
		}
		if (optionExists($outbound_pic4)) {
			$data['outbound_pic4'] = $outbound_pic4;
		}
		if (optionExists($outbound_wap_pic1)) {
			$data['outbound_wap_pic1'] = $outbound_wap_pic1;
		}
		if (optionExists($outbound_wap_pic2)) {
			$data['outbound_wap_pic2'] = $outbound_wap_pic2;
		}
		if (optionExists($outbound_cost_price)) {
			$data['outbound_cost_price'] = $outbound_cost_price;
		}
		if (optionExists($outbound_market_price)) {
			$data['outbound_market_price'] = $outbound_market_price;
		}
		if (optionExists($outbound_details)) {
			$data['outbound_details'] = $outbound_details;
		}
		if (optionExists($outbound_explain)) {
			$data['outbound_explain'] = $outbound_explain;
		}

		if (optionExists($outbound_time)) {
			$data['outbound_time'] = strtotime($outbound_time);
		}else{
            $data['outbound_time'] = time();
        }

		if (optionExists($status)) {
			$data['status'] = $status;
		}

		if ($outbound_id) {
			$success = $this->JyOutboundTour_model->where("outbound_id", $outbound_id)->set($data)->update();
		} else {
			if (empty($outbound_name)) {
				return wrrong_msg(self::MSG_USERNAME_NOT_NULL);
			}
            $channel = $this->JyOutboundTour_model->where("outbound_name",$outbound_name)->get_list();
            if($channel){
                return wrrong_msg(self::MSG_USERNAME_IS_EXISTS);
            }
			$success = $this->JyOutboundTour_model->set($data)->insert();
		}

		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		if($outbound_id){
            $this->JySysLog_model->set(array(
                "user_name"=>$this->login_user['user_name'],
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_JyOutboundTour",
                "class_obj"=>"edit",
                "result"=>$outbound_name." 周边游ID：".$outbound_id."信息修改成功",
                "op_time"=>time()
            ))->insert();
            return success_msg(MSG_EDIT_SUCCESS);
        }else{
            $this->JySysLog_model->set(array(
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_JyOutboundTour",
                "class_obj"=>"add",
                "result"=>$outbound_name."分类信息添加成功",
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
			"outbound_id",
			"outbound_name",
            "outbound_start",
            "outbound_end",
            "outbound_day",
            "outbound_start_time",
            "outbound_sub_line",
			"rows",
			"status",
			"page",
            "desc"
		);
		extract(formatOptions($options, $optionsKeys));

		$where = array();
		$result = array();

		if (optionExists($outbound_id)) {
			$where['outbound_id'] = $outbound_id;
		}
		if (optionExists($status)) {
			$where['status >='] = $status;
		}
		if (optionExists($outbound_start)) {
			$where['outbound_start'] = $outbound_start;
		}
		if (optionExists($outbound_end)) {
			$where['outbound_end'] = $outbound_end;
		}
		if (optionExists($outbound_day)) {
			$where['outbound_day'] = $outbound_day;
		}
		if (optionExists($outbound_start_time)) {
			$where['outbound_start_time'] = $outbound_start_time;
		}
		if (optionExists($outbound_sub_line)) {
			$where['outbound_sub_line'] = $outbound_sub_line;
		}
		//outbound_name模糊查询
		if (optionExists($outbound_name)) {
			$where['outbound_name like'] = "%{$outbound_name}%";
		}

		//分页
		if (optionExists($rows) && optionExists($page)) {
			$result['total'] = $this->JyOutboundTour_model->where($where)->count();
			$page = max($page, 1);
			$offset = ($page - 1) * $rows;
			$this->JyOutboundTour_model->limit($rows, $offset);
		}
		//获取列表
        if($desc){
            $list = $this->JyOutboundTour_model->where($where)->order_by("outbound_id", "DESC")->get_list();
        }else{
            $list = $this->JyOutboundTour_model->where($where)->get_list();
        }

        foreach ($list as $k=>$v){
            if(!empty($v['outbound_start'])){
                $system = $this->JySystem_model->where('system_id',$v['outbound_start'])->get_item();
                $list[$k]['outbound_start_name'] = $system['system_name'];
            }else{
                $list[$k]['outbound_start_name'] = '';
            }
            if(!empty($v['outbound_end'])){
                $system = $this->JySystem_model->where('system_id',$v['outbound_end'])->get_item();
                $list[$k]['outbound_end_name'] = $system['system_name'];
            }else{
                $list[$k]['outbound_end_name'] = '';
            }
            if(!empty($v['outbound_day'])){
                $system = $this->JySystem_model->where('system_id',$v['outbound_day'])->get_item();
                $list[$k]['outbound_day_name'] = $system['system_name'];
            }else{
                $list[$k]['outbound_day_name'] = '';
            }
            if(!empty($v['outbound_start_time'])){
                $system = $this->JySystem_model->where('system_id',$v['outbound_start_time'])->get_item();
                $list[$k]['outbound_start_time_name'] = $system['system_name'];
            }else{
                $list[$k]['outbound_start_time_name'] = '';
            }
            if(!empty($v['outbound_sub_line'])){
                $system = $this->JySystem_model->where('system_id',$v['outbound_sub_line'])->get_item();
                $list[$k]['outbound_sub_line_name'] = $system['system_name'];
            }else{
                $list[$k]['outbound_sub_line_name'] = '';
            }
        }
		$result['rows'] = $list;
		return $result;
	}

	/**
	 *	删除内容
	 */
	public function delete($options = array()) {
		$optionsKeys = array("outbound_id");
		extract(formatOptions($options, $optionsKeys));
		if (!$outbound_id) {
			return wrrong_msg(MSG_INVALID_ARGUMENTS);
		}
		$success = $this->JyOutboundTour_model->where("outbound_id", $outbound_id)->delete();
		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
        $this->JySysLog_model->set(array(
            "user_name"=>$this->login_user['user_name'],
            "action"=>"IP地址: ".ip(),
            "class_name"=>"Admin_JyOutboundTour",
            "class_obj"=>"del",
            "result"=>"周边游ID：".$outbound_id."删除成功",
            "op_time"=>time()
        ))->insert();
		return success_msg(MSG_DELETE_SUCCESS);

	}

}
?>