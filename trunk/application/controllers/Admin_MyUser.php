<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_MyUser extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("MyUser", "MyMenu");
		$this->loadModel("JyUser","JyUserGroup");
	}


	/**
	 * 加载主页面
	 */
	public function index() {
		$Users = $this->MyUser_service->get_list();
		$this->assign("Users", $Users['rows']);
//        print_r($Users['rows']);die;

		$this->view("admin/myuser/index");
	}

	/**
	 * 修改
	 */
	public function edit() {
        $user_id = $this->input->get('user_id');
		$input = $this->input->post(NULL);
		if (!empty($input)) {
            $success = $this->MyUser_service->addoredit($input);
            if($success['success']){
                alert($success['msg'],"/Admin_MyUser/index");
            }else{
                alert($success['msg']);
            }
		}
		$user= $this->JyUser_model->where('user_id',$user_id)->get_item();
		$this->assign("user", $user);
        $group = $this->JyUserGroup_model->get_list();
        $this->assign("group",$group);
		$this->view("admin/myuser/edit");
	}

	/**
	 * 添加
	 */
	public function add() {
		$input = $this->input->post(NULL);
		if (!empty($input)) {
			$success = $this->MyUser_service->addoredit($input);
            if($success['success']){
                alert($success['msg'],"/Admin_MyUser/index");
            }else{
                alert($success['msg']);
            }

		}
		$group = $this->JyUserGroup_model->get_list();
        $this->assign("group",$group);
		$this->view("admin/myuser/add");
	}

	/**
	 * 删除
	 */
	public function del() {
		$input = $this->input->get(NULL);
        $success = $this->MyUser_service->delete($input);
		alert($success['msg']);
	}

	/**
	 * 禁用
	 */
	public function disable() {
		$input = $this->input->get(NULL);
		$input['status'] = FALSE;
        $success = $this->MyUser_service->addoredit($input);
		alert($success['msg']);
	}

	/**
	 * 启用
	 */
	public function enable() {
		$input = $this->input->get(NULL);
		$input['status'] = TRUE;
        $success = $this->MyUser_service->addoredit($input);
        alert($success['msg']);
	}


}
