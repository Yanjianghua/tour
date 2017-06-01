<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	const MSG_ERROR_ACCESS = "您没有权限，请重新登陆";

	public function __construct() {
		parent::__construct();
		$this->loadService("Permission");
		$this->loadService("MyMenu");
		if (preg_match("/^Admin_/", $this->uri->rsegments[1])) {
			$this->login_user = $this->Permission_service->authority_check(Login_service::ADMIN_USER);
			$this->my_menu = $this->MyMenu_service->get_list();
//			var_dump($this->my_menu);die;
			if ($this->login_user === 0) {
				alert("", "/Admin_Login/index", "", ".top");
			}
			if ($this->login_user === false) {
				if ($this->input->is_ajax_request()) {
					print_json(wrrong_msg(self::MSG_NO_AUTH));
				} else {
					alert(self::MSG_ERROR_ACCESS, "/Admin_Login/index", "", ".top");
				}
			}
			$this->assign("COOKIE_LOGIN", $this->COOKIE_LOGIN);
			$this->assign("login_user", $this->login_user);
			$this->assign("my_menu", $this->my_menu[0]['children']);
            $this->assign("web_name", $this->config->config['web_name_h']);
			$this->load->driver('Cache');
		} elseif(preg_match("/^admin_Login/", $this->uri->rsegments[1])){
        }else {
			$this->jump2mobile();
			$query = isset($this->uri->rsegments[3]) ? explode("&", preg_replace("/^\?/", "", $this->uri->rsegments[3])) : array();
			foreach ($query as $v) {
				$s = explode("=", $v);
				$_GET[$s[0]] = $s[1];
			}
			$this->load->driver('Cache');
			$this->load->config("system");
			$this->assign("web_name", $this->config->config['web_name']);
            $this->assign("footer", $this->config->config['footer']);
		}
		if(in_array($this->router->fetch_method(),array("add","edit","delete"))){
            $class = $this->router->fetch_class();
            $method = "index";
        }else{
            $class = $this->router->fetch_class();
            $method = $this->router->fetch_method();
        }
//		$class_method = "/".$this->router->fetch_class()."/".$this->router->fetch_method();
		$active = $this->JyMenuUrl_model->where(array(
			"menu_controller"=>$this->router->fetch_class(),
			"menu_method"=>$this->router->fetch_method()
		))->get_item();

		if(!empty($active)){
			$this->assign('menu_id',$active['menu_id']);
		}else{
			$this->assign('menu_id',0);
		}
		$this->assign('class',$class);
		$this->assign('method',$method);
        $this->assign("code", $this->config->config['code']);
	}

	public function jump2mobile() {
		$url = preg_replace("/\/\//", "/", $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
		if (!isset($_SERVER['HTTP_USER_AGENT'])) {
			return;
		}
		if (preg_match("/(android|iphone|nokia|samsung|mobile)+/i", $_SERVER['HTTP_USER_AGENT']) && $url == str_replace($_SERVER['HTTP_HOST'] . formatUrl("home_m"), "", $url)) {
			$url = str_replace($_SERVER['HTTP_HOST'] . formatUrl("home"), formatUrl("home_m"), $url);
			header("Location:" . $this->config->config['url']['oldomain'] . $url);
			exit ;
		}
	}

	public function loadModel($model) {
		$models = func_get_args();
		if (count($models) > 1) {
			foreach ($models as $k => $v) {
				$this->load->model($v . "_model");
			}
			return;
		}
		$this->load->model($model . "_model");
	}

	public function loadService($service) {
		$services = func_get_args();
		if (count($services) > 1) {
			foreach ($services as $k => $v) {
				$this->load->service($v . "_service");
			}
			return;
		}
		$this->load->service($service . "_service");
	}

	public function view($tpl) {
		$this->Smartyci->display($tpl . '.html');
	}

	public function assign($key, $val) {
		$this->Smartyci->assign($key, $val);
	}

}
