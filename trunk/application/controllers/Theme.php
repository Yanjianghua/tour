<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Theme extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("JySystem","JyThemeTour","JyOrder","JyPicAd");
		$this->loadModel("JyThemeTour");
	}

	public function index() {
        $page = (int)$this->input->get('page');
        $input = $this->input->get();
        $rows = 10;
        if(isset($page) and $page<0 ){
            alert(MSG_INVALID_ARGUMENTS,'/theme');
        }
        if($page == NULL){
            $page = 0;
        }
        $ad_1 = $this->JyPicAd_service->get_list(array("ad_id"=>"1","status"=>"1"));
        $ad_2 = $this->JyPicAd_service->get_list(array("ad_id"=>"2","status"=>"1"));
        $ad_3 = $this->JyPicAd_service->get_list(array("ad_id"=>"3","status"=>"1"));
        $system = $this->JySystem_service->get_list(array("status"=>1,'system_type'=>6));
        $input['desc'] = true;
        $input['rows'] = $rows;
        $input['status'] = "1";
        $input['page'] = $page+1;
        $theme = $this->JyThemeTour_service->get_list($input);
        $theme_recommend = $this->JyThemeTour_service->get_list(array("desc"=>true,"status"=>"2"));
        if($page>=0){
            $theme['page'] = $page;
            $theme['page_all'] = ceil($theme['total']/$rows);
        }

        $this->assign("system", $system['rows']);
        $this->assign("theme", $theme);
        $this->assign("theme_recommend", $theme_recommend);
        $this->assign("ad_1", $ad_1['rows'][0]);
        $this->assign("ad_2", $ad_2['rows'][0]);
        $this->assign("ad_3", $ad_3['rows'][0]);
		$this->view(config_item("style") . '/theme/index');
	}

	public function details() {
        $id = $this->input->get('id');
        $ad_1 = $this->JyPicAd_service->get_list(array("ad_id"=>"1","status"=>"1"));
        $ad_2 = $this->JyPicAd_service->get_list(array("ad_id"=>"2","status"=>"1"));
        $ad_3 = $this->JyPicAd_service->get_list(array("ad_id"=>"3","status"=>"1"));
        $theme = $this->JyThemeTour_service->get_list(array("theme_id"=>$id,"status"=>"1"));
        $theme_recommend = $this->JyThemeTour_service->get_list(array("desc"=>true,"status"=>"2"));
        if(empty($theme['rows'])){
            alert(MSG_INVALID_ARGUMENTS,'/theme');
        }

        $this->assign("theme_recommend", $theme_recommend);
        $this->assign("theme", $theme['rows'][0]);
        $this->assign("ad_1", $ad_1['rows'][0]);
        $this->assign("ad_2", $ad_2['rows'][0]);
        $this->assign("ad_3", $ad_3['rows'][0]);
		$this->view(config_item("style") . '/theme/details');
	}

    public function order_add(){
        $input = $this->input->post(NULL);
        if (!empty($input)) {
            $input['status'] = 1;
            $success = $this->JyOrder_service->addoredit($input);
            if($success['success']){
                if(isset($input['source']) and $input['source']=='details'){
                    alert($success['msg'],"/theme/details?id=".$input['order_correlation']);
                }else{
                    alert($success['msg'],"/theme");
                }
            }else{
                alert($success['msg']);
            }

        }else{
            alert('上传数据为空');
        }
    }

}
