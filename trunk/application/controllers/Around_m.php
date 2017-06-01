<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Around_m extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("JySystem","JyAroundTour","JyOrder","JyPicAd");
		$this->loadModel("JyAroundTour");
	}

	public function index() {
        $page = (int)$this->input->get('page');
        $input = $this->input->get();
        $rows = 10;
        if(isset($page) and $page<0 ){
            alert(MSG_INVALID_ARGUMENTS,'/m/around');
        }
        if($page == NULL){
            $page = 0;
        }
        $input['desc'] = true;
        $input['rows'] = $rows;
        $input['status'] = "1";
        $input['page'] = $page+1;
        $around = $this->JyAroundTour_service->get_list($input);
        if($page>=0){
            $around['page'] = $page;
            $around['page_all'] = ceil($around['total']/$rows);
        }
        $system = $this->JySystem_service->get_list(array("status"=>"1",'system_type'=>1));

        $this->assign("system", $system['rows']);
        $this->assign("around", $around);
		$this->view(config_item("style") . '/wap/around/index');
	}

	public function details() {
        $id = $this->input->get('id');
        $around = $this->JyAroundTour_service->get_list(array("around_id"=>$id,"status"=>"1"));
        if(empty($around['rows'])){
            alert(MSG_INVALID_ARGUMENTS,'/m/around');
        }
        $system = $this->JySystem_service->get_list(array("status"=>"1"));

        $this->assign("system", $system['rows']);
        $this->assign("around", $around['rows'][0]);
		$this->view(config_item("style") . '/wap/around/details');
	}

}
