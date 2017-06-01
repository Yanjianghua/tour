<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_MyUserGroup extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("MyUserGroup", "MyMenu");
		$this->loadModel("JyUser","JyUserGroup");
	}


	/**
	 * 加载主页面
	 */
	public function index() {
		$Users = $this->MyUserGroup_service->get_list();
		$this->assign("Users", $Users['rows']);
//        print_r($Users['rows']);die;

		$this->view("admin/myusergroup/index");
	}

	/**
	 * 修改
	 */
	public function edit() {
        $group_id = $this->input->get('group_id');
		$input = $this->input->post(NULL);
		if (!empty($input)) {
            $success = $this->MyUserGroup_service->addoredit($input);
            if($success['success']){
                alert($success['msg'],"/Admin_MyUserGroup/index");
            }else{
                alert($success['msg']);
            }
		}
		$group = $this->JyUserGroup_model->where('group_id',$group_id)->get_item();
		$this->assign("group", $group);
        $menu = $this->JyMenuUrl_model->get_list();
        $menu = $this->MyMenu_service->getTree($menu,0);
        $this->assign("menu",$menu);
		$this->view("admin/myusergroup/edit");
	}

	/**
	 * 添加
	 */
	public function add() {
		$input = $this->input->post(NULL);
		if (!empty($input)) {
			$success = $this->MyUserGroup_service->addoredit($input);
            if($success['success']){
                alert($success['msg'],"/Admin_MyUserGroup/index");
            }else{
                alert($success['msg']);
            }

		}
        $menu = $this->JyMenuUrl_model->get_list();
        $menu = $this->MyMenu_service->getTree($menu,0);
        $this->assign("menu",$menu);
		$this->view("admin/myusergroup/add");
	}

	/**
	 * 删除
	 */
	public function del() {
		$input = $this->input->get(NULL);
        $success = $this->MyUserGroup_service->delete($input);
		alert($success['msg']);
	}

	/**
	 * 禁用
	 */
	public function disable() {
		$input = $this->input->get(NULL);
		$input['status'] = FALSE;
        $success = $this->MyUserGroup_service->editStatus($input);
		alert($success['msg']);
	}

	/**
	 * 启用
	 */
	public function enable() {
		$input = $this->input->get(NULL);
		$input['status'] = TRUE;
        $success = $this->MyUserGroup_service->editStatus($input);
        alert($success['msg']);
	}


}
