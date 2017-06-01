<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Inbound extends MY_Controller {

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
            alert(MSG_INVALID_ARGUMENTS,'/inbound');
        }
        if($page == NULL){
            $page = 0;
        }
        $ad_1 = $this->JyPicAd_service->get_list(array("ad_id"=>"1","status"=>"1"));
        $ad_2 = $this->JyPicAd_service->get_list(array("ad_id"=>"2","status"=>"1"));
        $ad_3 = $this->JyPicAd_service->get_list(array("ad_id"=>"3","status"=>"1"));
        $system = $this->JySystem_service->get_list(array("status"=>"1",'system_type'=>2));
        $input['desc'] = true;
        $input['rows'] = $rows;
        $input['status'] = "1";
        $input['page'] = $page+1;
        $inbound = $this->JyInboundTour_service->get_list($input);
        $inbound_recommend = $this->JyInboundTour_service->get_list(array("desc"=>true,"status"=>"2"));
        if($page>=0){
            $inbound['page'] = $page;
            $inbound['page_all'] = ceil($inbound['total']/$rows);
        }

        $this->assign("system", $system['rows']);
        $this->assign("inbound", $inbound);
        $this->assign("inbound_recommend", $inbound_recommend);
        $this->assign("ad_1", $ad_1['rows'][0]);
        $this->assign("ad_2", $ad_2['rows'][0]);
        $this->assign("ad_3", $ad_3['rows'][0]);
		$this->view(config_item("style") . '/inbound/index');
	}

	public function details() {
        $id = $this->input->get('id');
        $ad_1 = $this->JyPicAd_service->get_list(array("ad_id"=>"1","status"=>"1"));
        $ad_2 = $this->JyPicAd_service->get_list(array("ad_id"=>"2","status"=>"1"));
        $ad_3 = $this->JyPicAd_service->get_list(array("ad_id"=>"3","status"=>"1"));
        $inbound = $this->JyInboundTour_service->get_list(array("inbound_id"=>$id,"status"=>"1"));
        $inbound_recommend = $this->JyInboundTour_service->get_list(array("desc"=>true,"status"=>"2"));
        if(empty($inbound['rows'])){
            alert(MSG_INVALID_ARGUMENTS,'/inbound');
        }

        $this->assign("inbound_recommend", $inbound_recommend);
        $this->assign("inbound", $inbound['rows'][0]);
        $this->assign("ad_1", $ad_1['rows'][0]);
        $this->assign("ad_2", $ad_2['rows'][0]);
        $this->assign("ad_3", $ad_3['rows'][0]);
		$this->view(config_item("style") . '/inbound/details');
	}

    public function order_add(){
        $input = $this->input->post(NULL);
        if (!empty($input)) {
            $input['status'] = 1;
            $success = $this->JyOrder_service->addoredit($input);
            if($success['success']){
                if(isset($input['source']) and $input['source']=='details'){
                    alert($success['msg'],"/inbound/details?id=".$input['order_correlation']);
                }else{
                    alert($success['msg'],"/inbound");
                }
            }else{
                alert($success['msg']);
            }

        }else{
            alert('上传数据为空');
        }
    }

}
