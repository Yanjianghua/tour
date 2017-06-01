<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Theme_m extends MY_Controller {

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
            alert(MSG_INVALID_ARGUMENTS,'/m/theme');
        }
        if($page == NULL){
            $page = 0;
        }
        $input['desc'] = true;
        $input['rows'] = $rows;
        $input['status'] = "1";
        $input['page'] = $page+1;
        $theme = $this->JyThemeTour_service->get_list($input);
        if($page>=0){
            $theme['page'] = $page;
            $theme['page_all'] = ceil($theme['total']/$rows);
        }
        $system = $this->JySystem_service->get_list(array("status"=>1,'system_type'=>6));

        $this->assign("system", $system['rows']);
        $this->assign("theme", $theme);
		$this->view(config_item("style") . '/wap/theme/index');
	}

	public function details() {
        $id = $this->input->get('id');
        $theme = $this->JyThemeTour_service->get_list(array("theme_id"=>$id,"status"=>"1"));
        if(empty($theme['rows'])){
            alert(MSG_INVALID_ARGUMENTS,'/m/theme');
        }
        $system = $this->JySystem_service->get_list(array("status"=>"1"));

        $this->assign("system", $system['rows']);
        $this->assign("theme", $theme['rows'][0]);
		$this->view(config_item("style") . '/wap/theme/details');
	}

}
