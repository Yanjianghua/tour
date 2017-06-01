<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_Layout extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadModel("JyMenuUrl","JyOrder");
	}

	public function index() {
        //今日
        $where_today = array(
            "order_time >="=>date2time(date("Y-m-d",time()),'START'),
            "order_time <"=>date2time(date("Y-m-d",time()),''),
        );
        $order_today = $this->JyOrder_model->where($where_today)->count();
        //本周
        $where_week = array(
            "order_time >="=>mktime(0, 0 , 0,date("m"),date("d")-date("w")+1-7,date("Y")),
            "order_time <"=>mktime(23,59,59,date("m"),date("d")-date("w")+7-7,date("Y")),
        );
        $order_week = $this->JyOrder_model->where($where_week)->count();
        //本月
        $where_month = array(
            "order_time >="=>mktime(0, 0 , 0,date("m") ,1,date("Y")),
            "order_time <"=>mktime(23,59,59,date("m")+1,0,date("Y")),
        );
        $order_month = $this->JyOrder_model->where($where_month)->count();
        $order_all = $this->JyOrder_model->count();
		$sys_info = $this->getSysInfo();


		$this->assign('sys_info',$sys_info);
		$this->assign('order_all',$order_all);
		$this->assign('order_month',$order_month);
		$this->assign('order_week',$order_week);
		$this->assign('order_today',$order_today);
		$this->view('admin/layout/index');
	}

	function getSysInfo() {
		$sys_info_array = array ();
		$sys_info_array ['gmt_time'] = gmdate ( "Y-m-d H:i:s", time () );
		$sys_info_array ['bj_time'] = gmdate ( "Y-m-d H:i:s", time () + 8 * 3600 );
		$sys_info_array ['server_ip'] = gethostbyname ( $_SERVER ["SERVER_NAME"] );
		$sys_info_array ['software'] = $_SERVER ["SERVER_SOFTWARE"];
		$sys_info_array ['port'] = $_SERVER ["SERVER_PORT"];
		$sys_info_array ['admin'] = $this->login_user['user_name'];
		$sys_info_array ['diskfree'] = intval ( diskfreespace ( "." ) / (1024 * 1024) ) . 'Mb';
		$sys_info_array ['current_user'] = $this->login_user['user_name'];
		$sys_info_array ['timezone'] = date_default_timezone_get();
		return $sys_info_array;
	}

}
