<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inbound_m extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("JySystem","JyInboundTour","JyOrder","JyPicAd");
		$this->loadModel("JyInboundTour");
	}

	public function index() {
        $page = (int)$this->input->get('page');
        $input = $this->input->get();
        $rows = 10;
        if(isset($page) and $page<0 ){
            alert(MSG_INVALID_ARGUMENTS,'/m/inbound');
        }
        if($page == NULL){
            $page = 0;
        }
        $input['desc'] = true;
        $input['rows'] = $rows;
        $input['status'] = "1";
        $input['page'] = $page+1;
        $inbound = $this->JyInboundTour_service->get_list($input);
        if($page>=0){
            $inbound['page'] = $page;
            $inbound['page_all'] = ceil($inbound['total']/$rows);
        }
        $system = $this->JySystem_service->get_list(array("status"=>"1",'system_type'=>2));

        $this->assign("system", $system['rows']);
        $this->assign("inbound", $inbound);
		$this->view(config_item("style") . '/wap/inbound/index');
	}

	public function details() {
        $id = $this->input->get('id');
        $inbound = $this->JyInboundTour_service->get_list(array("inbound_id"=>$id,"status"=>"1"));
        if(empty($inbound['rows'])){
            alert(MSG_INVALID_ARGUMENTS,'/m/inbound');
        }
        $system = $this->JySystem_service->get_list(array("status"=>"1"));

        $this->assign("system", $system['rows']);
        $this->assign("inbound", $inbound['rows'][0]);
		$this->view(config_item("style") . '/wap/inbound/details');
	}

}
