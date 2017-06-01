<?php
class JyOrder_service extends MY_Service {
	const MSG_USERNAME_NOT_NULL = "标题不能为空";
	const MSG_USERNAME_IS_EXISTS = "名称已存在";
	const MSG_ID_NOT_NULL = "ID不存在";

	public function __construct() {
		parent::__construct();
		$this->loadModel("JyOrder","JyAroundTour","JyInboundTour","JyLocalTour","JyOutboundTour","JyThemeTour","JyTicketTour");
	}

	public function addoredit($options = array()) {
		$optionsKeys = array(
			"order_id",
			"order_name",
			"order_class_tour",
			"order_correlation",
			"order_username",
			"order_tel",
			"order_start_time",
			"order_adult",
			"order_children",
			"order_time",
			"status"
		);
		extract(formatOptions($options, $optionsKeys));

		$data = array();

		if (optionExists($order_id)) {
			$data['order_id'] = $order_id;
		}

		if (optionExists($order_name)) {
			$data['order_name'] = $order_name;
		}

		if (optionExists($order_class_tour)) {
			$data['order_class_tour'] = $order_class_tour;
		}

		if (optionExists($order_correlation)) {
			$data['order_correlation'] = $order_correlation;
		}

		if(optionExists($order_class_tour) and optionExists($order_correlation)){
            $order_array = json_decode(JyOrder_model::ORDER_ARRAY,true);
            foreach($order_array as $key=>$value){
                if($value==$order_class_tour){
                    $model = $key.'_model';
                    $id = strtolower(substr($key,2,strrpos($key,'T')-2).'_id');
                    $order_list = $this->$model->where("$id", $order_correlation)->get_item();
                    if(!$order_list){
                        return wrrong_msg(self::MSG_ID_NOT_NULL);
                    }
                }
            }
        }

		if (optionExists($order_username)) {
			$data['order_username'] = $order_username;
		}

		if (optionExists($order_tel)) {
			$data['order_tel'] = $order_tel;
		}

		if (optionExists($order_start_time)) {
			$data['order_start_time'] = strtotime($order_start_time);
		}

		if (optionExists($order_adult)) {
			$data['order_adult'] = $order_adult;
		}

		if (optionExists($order_children)) {
			$data['order_children'] = $order_children;
		}

		if (optionExists($order_time)) {
			$data['order_time'] = strtotime($order_time);
		}else{
            $data['order_time'] = time();
        }

		if (optionExists($status)) {
			$data['status'] = $status;
		}

		if ($order_id) {
			$success = $this->JyOrder_model->where("order_id", $order_id)->set($data)->update();
		} else {
			$success = $this->JyOrder_model->set($data)->insert();
		}

		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
		if($order_id){
            $this->JySysLog_model->set(array(
                "user_name"=>'',
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_JyOrder",
                "class_obj"=>"edit",
                "result"=>$order_name." ID：".$order_id."信息修改成功",
                "op_time"=>time()
            ))->insert();
            return success_msg(MSG_EDIT_SUCCESS);
        }else{
            $this->JySysLog_model->set(array(
                "user_name"=>'',
                "action"=>"IP地址: ".ip(),
                "class_name"=>"Admin_JyOrder",
                "class_obj"=>"add",
                "result"=>$order_name."分类信息添加成功",
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
			"order_id",
			"order_name",
			"rows",
			"status",
			"page",
            "desc"
		);
		extract(formatOptions($options, $optionsKeys));

		$where = array();
		$result = array();

		if (optionExists($order_id)) {
			$where['order_id'] = $order_id;
		}
		if (optionExists($status)) {
			$where['status'] = $status;
		}
		//around_name模糊查询
		if (optionExists($order_name)) {
			$where['order_name like'] = "%{$order_name}%";
		}

		//分页
		if (optionExists($rows) && optionExists($page)) {
			$result['total'] = $this->JyOrder_model->where($where)->count();
			$page = max($page, 1);
			$offset = ($page - 1) * $rows;
			$this->JyOrder_model->limit($rows, $offset);
		}
		//获取列表
        if($desc){
            $list = $this->JyOrder_model->where($where)->order_by("order_id", "DESC")->get_list();
        }else{
            $list = $this->JyOrder_model->where($where)->get_list();
        }

		$result['rows'] = $list;
		return $result;
	}

	/**
	 *	删除内容
	 */
	public function delete($options = array()) {
		$optionsKeys = array("order_id");
		extract(formatOptions($options, $optionsKeys));
		if (!$order_id) {
			return wrrong_msg(MSG_INVALID_ARGUMENTS);
		}
		$success = $this->JyOrder_model->where("order_id", $order_id)->delete();
		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
        $this->JySysLog_model->set(array(
            "user_name"=>$this->login_user['user_name'],
            "action"=>"IP地址: ".ip(),
            "class_name"=>"Admin_JyOrder",
            "class_obj"=>"del",
            "result"=>"ID：".$order_id."删除成功",
            "op_time"=>time()
        ))->insert();
		return success_msg(MSG_DELETE_SUCCESS);

	}

}
?>