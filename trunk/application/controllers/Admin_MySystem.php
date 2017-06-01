<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_MySystem extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("MyMenu","Upgrade");
		$this->loadModel("JyMenuUrl");
	}


	/**
	 * 加载主页面
	 */
	public function index() {
        $sys_info = $this->getSysInfo();
        $this->assign('sys_info',$sys_info);
        $this->view('admin/mysystem/index');
	}

    function getSysInfo() {
        $sys_info_array = array ();
        $sys_info_array ['web_name'] = $this->config->config['web_name'];
        $sys_info_array ['server_url'] = $this->config->config['server_url'];
        $sys_info_array ['code'] = $this->config->config['code'];
        $sys_info_array ['footer'] = $this->config->config['footer'];
        return $sys_info_array;
    }

    public function edit(){
        $post = $this->input->post(NULL);
        if (!empty($post)) {
            $post['footer'] = str_replace('"','\"',$post['footer']);
            $this->Upgrade_service->update_config("system", "web_name", "\"{$post['web_name']}\"");
            $this->Upgrade_service->update_config("system", "server_url", "\"{$post['server_url']}\"");
            $this->Upgrade_service->update_config("system", "code", "\"{$post['code']}\"");
            $this->Upgrade_service->update_config("system", "footer", "\"{$post['footer']}\"");
            alert(MSG_EDIT_SUCCESS,"/Admin_MySystem/index");
        }
        $sys_info = $this->getSysInfo();
        $this->assign('sys_info',$sys_info);
        $this->view('admin/mysystem/edit');
    }

}
