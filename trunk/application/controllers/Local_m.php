<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Local_m extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("JySystem","JyLocalTour","JyOrder","JyPicAd");
		$this->loadModel("JyLocalTour");
	}

	public function index() {
        $page = (int)$this->input->get('page');
        $input = $this->input->get();
        $rows = 10;
        if(isset($page) and $page<0 ){
            alert(MSG_INVALID_ARGUMENTS,'/m/local');
        }
        if($page == NULL){
            $page = 0;
        }
        $input['desc'] = true;
        $input['rows'] = $rows;
        $input['status'] = "1";
        $input['page'] = $page+1;
        $local = $this->JyLocalTour_service->get_list($input);
        if($page>=0){
            $local['page'] = $page;
            $local['page_all'] = ceil($local['total']/$rows);
        }
        $system = $this->JySystem_service->get_list(array("status"=>1,'system_type'=>4));

        $this->assign("system", $system['rows']);
        $this->assign("local", $local);
		$this->view(config_item("style") . '/wap/local/index');
	}

	public function details() {
        $id = $this->input->get('id');
        $local = $this->JyLocalTour_service->get_list(array("local_id"=>$id,"status"=>"1"));
        if(empty($local['rows'])){
            alert(MSG_INVALID_ARGUMENTS,'/m/local');
        }
        $system = $this->JySystem_service->get_list(array("status"=>1));

        $this->assign("system", $system['rows']);
        $this->assign("local", $local['rows'][0]);
		$this->view(config_item("style") . '/wap/local/details');
	}

}
