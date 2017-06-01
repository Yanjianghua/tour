<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Layout_m extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->loadService("JyPicAd","JyAroundTour","JyInboundTour","JyOutboundTour","JyLocalTour","JyThemeTour","JyTicketTour","JySystem");
        $this->loadModel("JyAroundTour","JyInboundTour","JyOutboundTour","JyLocalTour","JyThemeTour","JyTicketTour");
    }

    public function index() {
        $ad_4 = $this->JyPicAd_service->get_list(array("ad_hide"=>"1","status"=>"1"));
        $around = $this->JyAroundTour_service->get_list(array("rows"=>"5","page"=>"0","desc"=>true,"status"=>"2"));
        $inbound = $this->JyInboundTour_service->get_list(array("rows"=>"5","page"=>"0","desc"=>true,"status"=>"2"));
        $local = $this->JyLocalTour_service->get_list(array("rows"=>"5","page"=>"0","desc"=>true,"status"=>"2"));
        $ticket = $this->JyTicketTour_service->get_list(array("rows"=>"5","page"=>"0","desc"=>true,"status"=>"2"));

        $this->assign("around", $around['rows']);
        $this->assign("inbound", $inbound['rows']);
        $this->assign("local", $local['rows']);
        $this->assign("ticket", $ticket['rows']);
        $this->assign("ad_4", $ad_4['rows']);
        $this->view(config_item("style") . '/wap/layout/index');
    }


}
