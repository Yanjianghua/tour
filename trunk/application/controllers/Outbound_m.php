<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Outbound_m extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("JySystem","JyOutboundTour","JyOrder","JyPicAd");
		$this->loadModel("JyOutboundTour");
	}

	public function index() {
        $page = (int)$this->input->get('page');
        $input = $this->input->get();
        $rows = 10;
        if(isset($page) and $page<0 ){
            alert(MSG_INVALID_ARGUMENTS,'/m/outbound');
        }
        if($page == NULL){
            $page = 0;
        }
        $input['desc'] = true;
        $input['rows'] = $rows;
        $input['status'] = "1";
        $input['page'] = $page+1;
        $outbound = $this->JyOutboundTour_service->get_list($input);
        if($page>=0){
            $outbound['page'] = $page;
            $outbound['page_all'] = ceil($outbound['total']/$rows);
        }
        $system = $this->JySystem_service->get_list(array("status"=>"1",'system_type'=>3));

        $this->assign("system", $system['rows']);
        $this->assign("outbound", $outbound);
		$this->view(config_item("style") . '/wap/outbound/index');
	}

	public function details() {
        $id = $this->input->get('id');
        $outbound = $this->JyOutboundTour_service->get_list(array("outbound_id"=>$id,"status"=>"1"));
        if(empty($outbound['rows'])){
            alert(MSG_INVALID_ARGUMENTS,'/m/outbound');
        }
        $system = $this->JySystem_service->get_list(array("status"=>"1"));

        $this->assign("system", $system['rows']);
        $this->assign("outbound", $outbound['rows'][0]);
		$this->view(config_item("style") . '/wap/outbound/details');
	}

}
