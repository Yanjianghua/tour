<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_MySysLog extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("MyMenu");
		$this->loadModel("JyMenuUrl");
	}


	/**
	 * 加载主页面
	 */
	public function index() {
        $input = $this->input->get(NULL);
        $rows = 20;
        if (!empty($input)) {
            if(isset($input['page']) and $input['page']<0){
                alert(MSG_INVALID_ARGUMENTS);
            }
            $where = array();
            if(isset($input['user_name']) and $input['user_name']!==""){
                $where['user_name'] = $input['user_name'];
                $this->assign("user_name", $input['user_name']);
            }
            if(isset($input['page']) and $input['page']!==""){
                $offset = (int)$input['page']*$rows;
            }
            $log['rows'] = $this->JySysLog_model->where($where)->limit($rows,$offset)->order_by('op_time','desc')->get_list();
            $log['page'] = $input['page'];
            $log['count'] = $this->JySysLog_model->where($where)->count();
            $log['page_all'] = ceil($log['count']/$rows);
        }else{
            $log['rows'] = $this->JySysLog_model->limit($rows,0)->order_by('op_time','desc')->get_list();
            $log['page'] = 0;
            $log['count'] = $this->JySysLog_model->count();
            $log['page_all'] = ceil($log['count']/$rows);
        }
		$this->assign("log", $log);

		$this->view("admin/mysyslog/index");
	}


}
