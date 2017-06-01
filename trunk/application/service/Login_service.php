<?php
class Login_service extends MY_Service {

	const MSG_ERROR_USERNAME = "用户名不能为空";
	const MSG_ERROR_PASSWORD = "密码不能为空";
	const MSG_ERROR_LOGIN = "用户名密码不正确或未激活";
	const MSG_ERROR_OLDPASSWORD_NULL = "旧密码不能为空";
	const MSG_ERROR_OLDPASSWORD = "旧密码输入错误";
	const MSG_ERROR_REPASSWORD_NULL = "重复密码不能为空";
	const MSG_ERROR_PASSWORD_NULL_NOT_SAME = "两次密码输入不一致";
	const ADMIN_USER = "auth_admin";
	const SMARTOA_USER = "smartoa";
	const NORMAL_USER = "auth";
	const NORMAL_USER_OTHER = "auth_other";

	public function __construct() {
		parent::__construct();
		$this->load->helper("cookie");
		$this->load->config("system", TRUE);
		$this->loadModel("JyUser","JySysLog");
	}

	public function logindo($input) {
		$optionsKeys = array(
			"user_name",
			"password",
			"cookiename",
			"secret_time",
			"secret"
		);
		$input = formatOptions($input, $optionsKeys);
		extract($input);

		if (!$cookiename) {
			return wrrong_msg(MSG_INVALID_ARGUMENTS);
		}

		if ($cookiename == self::SMARTOA_USER && (!$secret_time || !$secret)) {
			return wrrong_msg(MSG_INVALID_ARGUMENTS);
		}

		if (!$user_name) {
			return wrrong_msg(self::MSG_ERROR_USERNAME);
		}

		if (!$password && !$cookiename == self::SMARTOA_USER) {
			return wrrong_msg(self::MSG_ERROR_PASSWORD);
		}

		if ($cookiename == self::NORMAL_USER || $cookiename == self::SMARTOA_USER || $cookiename == self::NORMAL_USER_OTHER) {
			$user = $this->User_model->where(array(
				"username" => $user_name,
				"status" => User_model::STATUS_ACTIVE
			))->get_item();
		} else {
			$user = $this->JyUser_model->where(array(
				"user_name" => $user_name,
				"status" => JyUser_model::STATUS_YES
			))->get_item();
		}
		if (empty($user) || ($cookiename == self::SMARTOA_USER && $user['oauser'] == JyUser_model::OAUSER_NO) || (!$cookiename == self::SMARTOA_USER && $user['oauser'] == JyUser_model::OAUSER_YES)) {
			return wrrong_msg(self::MSG_ERROR_LOGIN);
		}
		$encrypt = $this->config->item("authcode");
		set_cookie(self::SMARTOA_USER, "", 0);
		set_cookie(self::NORMAL_USER, "", 0);
		if ($cookiename == self::SMARTOA_USER || $cookiename == self::NORMAL_USER_OTHER) {
			$result = cms_auth_code($secret_time);
			if ($result['secret'] != $secret) {
				return wrrong_msg(self::MSG_ERROR_LOGIN);
			}
			$result = cms_auth_code();
			$auth = authcode($user['id'] . "\t" . $result['secret_time'] . "\t" . $result['secret'], $encrypt, "ENCODE");
			set_cookie($cookiename, $auth, 0);
		} else {
			$pwd = password($password);
			if ($pwd != $user['password']) {
				return wrrong_msg(self::MSG_ERROR_LOGIN);
			}
			$auth = authcode($user['user_id'] . "\t" . $password, $encrypt, "ENCODE");
			set_cookie($cookiename, $auth, 0);
			if ($cookiename == self::NORMAL_USER) {
				$this->User_model->where("user_id", $user['user_id'])->update(array(
					"login_ip" => ip(),
					"login_time" => time()
				));
				$this->JySysLog_model->set(array(
					"user_name"=>$user['user_name'],
					"action"=>"通过IP: ".ip()." 登陆前台",
					"class_name"=>"login",
					"class_obj"=>"index",
					"result"=>"前台登陆成功",
					"op_time"=>time()
				))->insert();
			} else {
				$this->JyUser_model->where("user_id", $user['user_id'])->update(array(
					"login_ip" => ip(),
					"login_time" => time()
				));
				$this->JySysLog_model->set(array(
					"user_name"=>$user['user_name'],
					"action"=>"通过IP: ".ip()." 登陆后台",
					"class_name"=>"Admin_login",
					"class_obj"=>"index",
					"result"=>"后台登陆成功",
					"op_time"=>time()
				))->insert();
			}
		}

		return success_data(true);
	}

	public function changePassword($input) {
		$filds = array(
			"oldpassword",
			"password",
			"repassword"
		);
		$input = formatOptions($input, $filds);
		extract($input);

		$oldpassword = password($oldpassword);
		if (!$oldpassword) {
			return wrrong_msg(self::MSG_ERROR_OLDPASSWORD_NULL);
		}
		if ($oldpassword != $this->login_user['password']) {
			return wrrong_msg(self::MSG_ERROR_OLDPASSWORD);
		}
		if (!$password) {
			return wrrong_msg(self::MSG_ERROR_PASSWORD);
		}
		if (!$repassword) {
			return wrrong_msg(self::MSG_ERROR_REPASSWORD_NULL);
		}
		if ($password != $repassword) {
			return wrrong_msg(self::MSG_ERROR_PASSWORD_NULL_NOT_SAME);
		}
		$data['password'] = password($password);
		$success = $this->User_model->set($data)->where("id", $this->login_user['id'])->update();
		if (!$success) {
			return wrrong_msg(MSG_SERVICE_BUSY);
		}
        $this->JySysLog_model->set(array(
            "user_name"=>$this->login_user['user_name'],
            "action"=>"IP: ".ip()."",
            "class_name"=>"Admin_login",
            "class_obj"=>"changePassword",
            "result"=>"修改密码成功",
            "op_time"=>time()
        ))->insert();
		return success_msg(MSG_METHOD_SUCCESS);
	}

}
?>