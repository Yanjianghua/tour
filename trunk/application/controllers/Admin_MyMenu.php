<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_MyMenu extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("MyMenu");
		$this->loadModel("JyMenuUrl");
	}


	/**
	 * 加载主页面
	 */
	public function index() {
//		$Menu = $this->MyMenu_service->get_list();
		$Menu = $this->JyMenuUrl_model->get_list();
		$this->assign("Menu", $Menu);

		$this->view("admin/mymenu/index");
	}

	/**
	 * 修改
	 */
	public function edit() {
        $menu_id = $this->input->get('menu_id');
		$input = $this->input->post(NULL);
		if (!empty($input)) {
            $success = $this->MyMenu_service->addoredit($input);
            if($success['success']){
                alert($success['msg'],"/Admin_MyMenu/index");
            }else{
                alert($success['msg']);
            }
		}
		$menu_info = $this->JyMenuUrl_model->where('menu_id',$menu_id)->get_item();
		$this->assign("menu_info", $menu_info);
        $menu = $this->JyMenuUrl_model->where('status','1')->get_list();
        $this->assign("menu",$menu);
		$this->view("admin/mymenu/edit");
	}

	/**
	 * 添加
	 */
	public function add() {
		$input = $this->input->post(NULL);
		if (!empty($input)) {
			$success = $this->MyMenu_service->addoredit($input);
            if($success['success']){
                alert($success['msg'],"/Admin_MyMenu/index");
            }else{
                alert($success['msg']);
            }

		}
		$menu = $this->JyMenuUrl_model->where('status','1')->get_list();
        $this->assign("menu",$menu);
		$this->view("admin/mymenu/add");
	}

	/**
	 * 删除
	 */
	public function del() {
		$input = $this->input->get(NULL);
        $success = $this->MyMenu_service->delete($input);
		alert($success['msg']);
	}

	/**
	 * 禁用
	 */
	public function disable() {
		$input = $this->input->get(NULL);
		$input['status'] = FALSE;
        $success = $this->MyMenu_service->editStatus($input);
		alert($success['msg']);
	}

	/**
	 * 启用
	 */
	public function enable() {
		$input = $this->input->get(NULL);
		$input['status'] = TRUE;
        $success = $this->MyMenu_service->editStatus($input);
        alert($success['msg']);
	}


}
