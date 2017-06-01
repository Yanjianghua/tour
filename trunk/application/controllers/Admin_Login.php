<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_Login extends MY_Controller {
	const MSG_LOGIN_SUCCESS = "登录成功";
	const MSG_LOGOUT_SUCCESS = "退出成功";
    const MSG_CODE_WRRONG = "验证码错误";

	public function __construct() {
		parent::__construct();
		$this->loadService("Login");
		$this->loadModel("JySysLog");
        $this->load->library("CaptchaCode", array(
            "width" => 84,
            "height" => 26
        ));
	}

	public function index() {
        $input = $this->input->post(NULL, TRUE);
		if (!empty($input)) {
			$input['cookiename'] = Login_service::ADMIN_USER;
            if (!$this->CaptchaCode->verify($this->input->post("code"))) {
                alert(self::MSG_CODE_WRRONG, "", "", ".top");
            }
            $login = $this->Login_service->logindo($input);
            if(!$login['success']){
                alert($login['msg'], "", "", ".top");
            }
            Header("Location:/Admin_Layout/index/");
//            alert(self::MSG_LOGIN_SUCCESS, "/Admin_Layout/index/", "", ".top");
		}
		$this->view('admin/login/index');
	}

	public function logout() {
		delete_cookie(Login_service::ADMIN_USER);
        $this->JySysLog_model->set(array(
            "user_name"=>$this->login_user['user_name'],
            "action"=>"IP地址: ".ip(),
            "class_name"=>"Admin_Login",
            "class_obj"=>"logout",
            "result"=>"退出登陆",
            "op_time"=>time()
        ))->insert();
		alert(self::MSG_LOGOUT_SUCCESS, "/Admin_Layout/index/");
	}

    public function code() {
        $this->CaptchaCode->show();
    }

}
