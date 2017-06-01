<?php
class JyLocalTour_service extends MY_Service {
	const MSG_USERNAME_NOT_NULL = "名称不能为空";
	const MSG_USERNAME_IS_EXISTS = "名称已存在";

	public function __construct() {
		parent::__construct();
		$this->loadModel("JyLocalTour","JySystem");
	}

	public function addoredit($options = array()) {
		$optionsKeys = array(
			"local_id",
			"local_name",
			"local_start",
			"local_end",
			"local_day",
			"local_start_time",
			"local_address",
			"local_spot",
			"local_sub_line",
			"local_tel",
			"local_pic1",
			"local_pic2",
			"local_pic3",
			"local_pic4",
			"local_wap_pic1",
			"local_wap_pic2",
			"local_cost_price",
			"local_market_price",
			"local_details",
			"local_explain",
			"local_time",
			"status"
		);
		extract(formatOptions($options, $optionsKeys));

		$data = array();

		if (optionExists($local_id)) {
			$data['local_id'] = $local_id;
		}

		if (optionExists($local_name)) {
			$data['local_name'] = $local_name;
		}

		if (optionExists($local_start)) {
			$data['local_start'] = $local_start;
		}

		if (optionExists($local_end)) {
			$data['local_end'] = $local_end;
		}

		if (optionExists($local_day)) {
			$data['local_day'] = $local_day;
		}

		if (optionExists($local_start_time)) {
			$data['local_start_time'] = $local_start_time;
		}

		if (optionExists($local_address)) {
			$data['local_address'] = $local_address;
		}

		if (optionExists($local_spot)) {
			$data['local_spot'] = $local_spot;
		}

		if (optionExists($local_sub_line)) {
			$data['local_sub_line'] = $local_sub_line;
		}

		if (optionExists($local_tel)) {
			$data['local_tel'] = $local_tel;
		}

		if (optionExists($local_pic1)) {
			$data['local_pic1'] = $local_pic1;
		}
		if (optionExists($local_pic2)) {
			$data['local_pic2'] = $local_pic2;
		}
		if (optionExists($local_pic3)) {
			$data['local_pic3'] = $local_pic3;
		}
		if (optionExists($local_pic4)) {
			$data['local_pic4'] = $local_pic4;
		}
		if (optionExists($local_wap_pic1)) {
			$data['local_wap_pic1'] = $local_wap_pic1;
		}
		if (optionExists($local_wap_pic2)) {
			$data['local_wap_pic2'] = $local_wap_pic2;
		}
		if (optionExists($local_cost_price)) {
			$data['local_cost_price'] = $local_cost_price;
		}
		if (optionExists($local_market_price)) {
			$data['local_market_price'] = $local_market_price;
		}
		if (optionExists($local_details)) {
			$data['local_details'] = $local_details;
		}
		if (optionExists($local_explain)) {
			$data['local_explain'] = $local_explain;
		}

		if (optionExists($local_time)) {
			$data['local_time'] = strtotime($local_time);
		}else{
            $data['local_time'] = time();
        }

		if (optionExists($status)) {
			$data['status'] = $status;
		}

		if ($local_id) {
			$success = $this->JyLocalTour_model->where("local_id", $local_id)->set($data)->update();
		} else {
			if (empty($local_name)) {
				return wrrong_msg(self::MSG_USERNAME_NOT_NULL);
			}
            $channel = $this->JyLocalTour_model->where("local_name",$local_name)->get_list();
            if($channel){
                return wrrong_msg(self::MSG_USERNAME_IS_EXISTS);
            }
			$success = $this->JyLocalTour_model->set($data)->insert();
		}

		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		if($local_id){
            $this->JySysLog_model->set(array(
                "user_name"=>$this->login_user['user_name'],
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_JyLocalTour",
                "class_obj"=>"edit",
                "result"=>$local_name." 周边游ID：".$local_id."信息修改成功",
                "op_time"=>time()
            ))->insert();
            return success_msg(MSG_EDIT_SUCCESS);
        }else{
            $this->JySysLog_model->set(array(
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_JyLocalTour",
                "class_obj"=>"add",
                "result"=>$local_name."分类信息添加成功",
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
			"local_id",
			"local_name",
            "local_start",
            "local_end",
            "local_day",
            "local_start_time",
            "local_sub_line",
			"rows",
			"status",
			"page",
            "desc"
		);
		extract(formatOptions($options, $optionsKeys));

		$where = array();
		$result = array();

		if (optionExists($local_id)) {
			$where['local_id'] = $local_id;
		}
		if (optionExists($status)) {
			$where['status >='] = $status;
		}
		if (optionExists($local_start)) {
			$where['local_start'] = $local_start;
		}
		if (optionExists($local_end)) {
			$where['local_end'] = $local_end;
		}
		if (optionExists($local_day)) {
			$where['local_day'] = $local_day;
		}
		if (optionExists($local_start_time)) {
			$where['local_start_time'] = $local_start_time;
		}
		if (optionExists($local_sub_line)) {
			$where['local_sub_line'] = $local_sub_line;
		}
		//local_name模糊查询
		if (optionExists($local_name)) {
			$where['local_name like'] = "%{$local_name}%";
		}

		//分页
		if (optionExists($rows) && optionExists($page)) {
			$result['total'] = $this->JyLocalTour_model->where($where)->count();
			$page = max($page, 1);
			$offset = ($page - 1) * $rows;
			$this->JyLocalTour_model->limit($rows, $offset);
		}
		//获取列表
        if($desc){
            $list = $this->JyLocalTour_model->where($where)->order_by("local_id", "DESC")->get_list();
        }else{
            $list = $this->JyLocalTour_model->where($where)->get_list();
        }

        foreach ($list as $k=>$v){
            if(!empty($v['local_start'])){
                $system = $this->JySystem_model->where('system_id',$v['local_start'])->get_item();
                $list[$k]['local_start_name'] = $system['system_name'];
            }else{
                $list[$k]['local_start_name'] = '';
            }
            if(!empty($v['local_end'])){
                $system = $this->JySystem_model->where('system_id',$v['local_end'])->get_item();
                $list[$k]['local_end_name'] = $system['system_name'];
            }else{
                $list[$k]['local_end_name'] = '';
            }
            if(!empty($v['local_day'])){
                $system = $this->JySystem_model->where('system_id',$v['local_day'])->get_item();
                $list[$k]['local_day_name'] = $system['system_name'];
            }else{
                $list[$k]['local_day_name'] = '';
            }
            if(!empty($v['local_start_time'])){
                $system = $this->JySystem_model->where('system_id',$v['local_start_time'])->get_item();
                $list[$k]['local_start_time_name'] = $system['system_name'];
            }else{
                $list[$k]['local_start_time_name'] = '';
            }
            if(!empty($v['local_sub_line'])){
                $system = $this->JySystem_model->where('system_id',$v['local_sub_line'])->get_item();
                $list[$k]['local_sub_line_name'] = $system['system_name'];
            }else{
                $list[$k]['local_sub_line_name'] = '';
            }
        }
		$result['rows'] = $list;
		return $result;
	}

	/**
	 *	删除内容
	 */
	public function delete($options = array()) {
		$optionsKeys = array("local_id");
		extract(formatOptions($options, $optionsKeys));
		if (!$local_id) {
			return wrrong_msg(MSG_INVALID_ARGUMENTS);
		}
		$success = $this->JyLocalTour_model->where("local_id", $local_id)->delete();
		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
        $this->JySysLog_model->set(array(
            "user_name"=>$this->login_user['user_name'],
            "action"=>"IP地址: ".ip(),
            "class_name"=>"Admin_JyLocalTour",
            "class_obj"=>"del",
            "result"=>"周边游ID：".$local_id."删除成功",
            "op_time"=>time()
        ))->insert();
		return success_msg(MSG_DELETE_SUCCESS);

	}

}
?>