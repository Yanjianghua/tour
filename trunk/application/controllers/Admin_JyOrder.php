<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_JyOrder extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("JyOrder");
		$this->loadModel("JyOrder");
	}


	/**
	 * 加载主页面
	 */
	public function index() {
		$order = $this->JyOrder_service->get_list();
		$this->assign("order", $order['rows']);
		$this->view("admin/jyorder/index");
	}

	/**
	 * 修改
	 */
	public function edit() {
        $order_id = $this->input->get('order_id');
		$input = $this->input->post(NULL);
		if (!empty($input)) {
            $input['status'] = 1;
            $success = $this->JyOrder_service->addoredit($input);
            if($success['success']){
                alert($success['msg'],"/Admin_JyOrder/index");
            }else{
                alert($success['msg']);
            }
		}
        $order_array = json_decode(JyOrder_model::ORDER_ARRAY,true);
        $this->assign("order_array", $order_array);
        $order = $this->JyOrder_model->where('order_id',$order_id)->get_item();
		$this->assign("order", $order);
		$this->view("admin/jyorder/edit");
	}

	/**
	 * 添加
	 */
	public function add() {
		$input = $this->input->post(NULL);
		if (!empty($input)) {
            $input['status'] = 1;
			$success = $this->JyOrder_service->addoredit($input);
            if($success['success']){
                alert($success['msg'],"/Admin_JyOrder/index");
            }else{
                alert($success['msg']);
            }

		}
        $order_array = json_decode(JyOrder_model::ORDER_ARRAY,true);
        $this->assign("order_array", $order_array);
		$this->view("admin/jyorder/add");
	}

	/**
	 * 删除
	 */
	public function del() {
		$input = $this->input->get(NULL);
        $success = $this->JyOrder_service->delete($input);
		alert($success['msg']);
	}

	/**
	 * 禁用
	 */
	public function disable() {
		$input = $this->input->get(NULL);
		$input['status'] = FALSE;
        $success = $this->JyOrder_service->addoredit($input);
		alert($success['msg']);
	}

	/**
	 * 启用
	 */
	public function enable() {
		$input = $this->input->get(NULL);
		$input['status'] = TRUE;
        $success = $this->JyOrder_service->addoredit($input);
        alert($success['msg']);
	}


}
