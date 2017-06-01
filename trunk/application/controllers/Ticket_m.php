<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Ticket_m extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("JySystem","JyTicketTour","JyOrder","JyPicAd");
		$this->loadModel("JyTicketTour");
	}

	public function index() {
        $page = (int)$this->input->get('page');
        $input = $this->input->get();
        $rows = 10;
        if(isset($page) and $page<0 ){
            alert(MSG_INVALID_ARGUMENTS,'/m/ticket');
        }
        if($page == NULL){
            $page = 0;
        }
        $input['desc'] = true;
        $input['rows'] = $rows;
        $input['status'] = "1";
        $input['page'] = $page+1;
        $ticket = $this->JyTicketTour_service->get_list($input);
        if($page>=0){
            $ticket['page'] = $page;
            $ticket['page_all'] = ceil($ticket['total']/$rows);
        }
        $system = $this->JySystem_service->get_list(array("status"=>1,'system_type'=>5));

        $this->assign("system", $system['rows']);
        $this->assign("ticket", $ticket);
		$this->view(config_item("style") . '/wap/ticket/index');
	}

	public function details() {
        $id = $this->input->get('id');
        $ticket = $this->JyTicketTour_service->get_list(array("ticket_id"=>$id,"status"=>"1"));
        if(empty($ticket['rows'])){
            alert(MSG_INVALID_ARGUMENTS,'/m/ticket');
        }
        $system = $this->JySystem_service->get_list(array("status"=>"1"));

        $this->assign("system", $system['rows']);
        $this->assign("ticket", $ticket['rows'][0]);
		$this->view(config_item("style") . '/wap/ticket/details');
	}

}
