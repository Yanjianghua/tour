<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Layout extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("JyPicAd","JyAroundTour","JyInboundTour","JyOutboundTour","JyLocalTour","JyThemeTour","JyTicketTour","JySystem");
		$this->loadModel("JyAroundTour","JyInboundTour","JyOutboundTour","JyLocalTour","JyThemeTour","JyTicketTour");
	}

	public function index() {
        $ad_1 = $this->JyPicAd_service->get_list(array("ad_id"=>"1","status"=>"1"));
        $ad_2 = $this->JyPicAd_service->get_list(array("ad_id"=>"2","status"=>"1"));
        $ad_3 = $this->JyPicAd_service->get_list(array("ad_id"=>"3","status"=>"1"));
        $ad_4 = $this->JyPicAd_service->get_list(array("ad_hide"=>"1","status"=>"1"));
        $around = $this->JyAroundTour_service->get_list(array("rows"=>"3","page"=>"0","desc"=>true,"status"=>"2"));
        $inbound = $this->JyInboundTour_service->get_list(array("rows"=>"3","page"=>"0","desc"=>true,"status"=>"2"));
        $outbound = $this->JyOutboundTour_service->get_list(array("rows"=>"3","page"=>"0","desc"=>true,"status"=>"2"));
        $local = $this->JyLocalTour_service->get_list(array("rows"=>"3","page"=>"0","desc"=>true,"status"=>"2"));
        $ticket = $this->JyTicketTour_service->get_list(array("desc"=>true,"status"=>"2"));
        //团购
        $around_t = $this->JyAroundTour_service->get_list(array("rows"=>"1","page"=>"0","desc"=>true,"status"=>"3"));
        $inbound_t = $this->JyInboundTour_service->get_list(array("rows"=>"1","page"=>"0","desc"=>true,"status"=>"3"));
        $outbound_t = $this->JyOutboundTour_service->get_list(array("rows"=>"1","page"=>"0","desc"=>true,"status"=>"3"));
        $local_t = $this->JyLocalTour_service->get_list(array("rows"=>"1","page"=>"0","desc"=>true,"status"=>"3"));
        $ticket_t = $this->JyTicketTour_service->get_list(array("rows"=>"1","page"=>"0","desc"=>true,"status"=>"3"));
        //景点门票
        $system = $this->JySystem_service->get_list(array("system_class"=>"2","status"=>"2"));
        //导航拦目的地
        $system_around = self::system('around');
        $system_inbound = self::system('inbound');
        $system_outbound = self::system('outbound');
        $system_local = self::system('local');
        $system_ticket = self::system('ticket');
        $system_theme = self::system('theme');

        $this->assign("system_around", $system_around);
        $this->assign("system_inbound", $system_inbound);
        $this->assign("system_outbound", $system_outbound);
        $this->assign("system_local", $system_local);
        $this->assign("system_ticket", $system_ticket);
        $this->assign("system_theme", $system_theme);
        $this->assign("system", $system['rows']);
        $this->assign("around", $around['rows']);
        $this->assign("inbound", $inbound['rows']);
        $this->assign("outbound", $outbound['rows']);
        $this->assign("local", $local['rows']);
        $this->assign("ticket", $ticket['rows']);
        $this->assign("around_t", $around_t['rows']);
        $this->assign("inbound_t", $inbound_t['rows']);
        $this->assign("outbound_t", $outbound_t['rows']);
        $this->assign("local_t", $local_t['rows']);
        $this->assign("ticket_t", $ticket_t['rows']);
        $this->assign("ad_1", $ad_1['rows'][0]);
        $this->assign("ad_2", $ad_2['rows'][0]);
        $this->assign("ad_3", $ad_3['rows'][0]);
        $this->assign("ad_4", $ad_4['rows']);
		$this->view(config_item("style") . '/layout/index');
	}

	function system($system){
        $list = array();
        if($system=='around'){
            $system_around = $this->JySystem_model->where(array("status"=>1,"system_type"=>1,"system_class"=>2,"system_hide"=>1))->limit(4)->order_by('system_id','desc')->get_list();
            foreach($system_around as $key=>$value) {
                $list[] = array(
                    "system_id"=>$value['system_id'],
                    "system_name"=>$value['system_name']
                );
            }
        }elseif($system=='inbound'){
            $system_inbound = $this->JySystem_model->where(array("status"=>1,"system_type"=>2,"system_class"=>2,"system_hide"=>1))->limit(4)->order_by('system_id','desc')->get_list();
            foreach($system_inbound as $key=>$value){
                $list[] = array(
                    "system_id"=>$value['system_id'],
                    "system_name"=>$value['system_name']
                );
            }
        }elseif($system=='outbound'){
            $system_outbound = $this->JySystem_model->where(array("status"=>1,"system_type"=>3,"system_class"=>2,"system_hide"=>1))->limit(4)->order_by('system_id','desc')->get_list();
            foreach($system_outbound as $key=>$value){
                $list[] = array(
                    "system_id"=>$value['system_id'],
                    "system_name"=>$value['system_name']
                );
            }
        }elseif($system=='local'){
            $system_local = $this->JySystem_model->where(array("status"=>1,"system_type"=>4,"system_class"=>2,"system_hide"=>1))->limit(4)->order_by('system_id','desc')->get_list();
            foreach($system_local as $key=>$value){
                $list[] = array(
                    "system_id"=>$value['system_id'],
                    "system_name"=>$value['system_name']
                );
            }
        }elseif($system=='ticket'){
            $system_ticket = $this->JySystem_model->where(array("status"=>1,"system_type"=>5,"system_class"=>2,"system_hide"=>1))->limit(4)->order_by('system_id','desc')->get_list();
            foreach($system_ticket as $key=>$value){
                $list[] = array(
                    "system_id"=>$value['system_id'],
                    "system_name"=>$value['system_name']
                );
            }
        }elseif($system=='theme'){
            $system_theme = $this->JySystem_model->where(array("status"=>1,"system_type"=>6,"system_class"=>2,"system_hide"=>1))->limit(4)->order_by('system_id','desc')->get_list();
            foreach($system_theme as $key=>$value){
                $list[] = array(
                    "system_id"=>$value['system_id'],
                    "system_name"=>$value['system_name']
                );
            }
        }
        return $list;
    }

}
