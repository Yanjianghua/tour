<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Search extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("View","System","MyBlogArticle","MyBlogChannel");
		$this->loadModel("MyBlogChannel");
	}

	public function index() {
        $wd = (string)$this->input->get('wd');
        $page = (int)$this->input->get('page');
        $rows = 5;
        if(isset($page) and $page<0){
            alert(MSG_INVALID_ARGUMENTS);
        }
        if(isset($page) and $page!==""){
            $offset = (int)$page*$rows;
        }
        if($page == NULL){
            $page = 0;
        }
        $channel = $this->MyBlogArticle_service->get_list(array("rows"=>$rows,"page"=>0,"wd"=>$wd));
        $recommend = $this->MyBlogArticle_service->get_list(array("desc"=>true,"rows"=>"5","page"=>"0","status"=>"2"));
        $channel_lei = $this->MyBlogChannel_service->get_list(array("rows"=>"8","page"=>"0"));
        if($page>=0){
            $channel['page'] = $page;
            $channel['page_all'] = ceil($channel['total']/$rows);
        }
        foreach($channel['rows'] as $key=>$value){
            $array = $value;
            $array['article_title'] = str_ireplace($wd,'<font color="red">'.$wd.'</font>',$value['article_title']);
            $array['article_keywords'] = str_ireplace($wd,'<font color="red">'.$wd.'</font>',$value['article_keywords']);
            $array['article_description'] = str_ireplace($wd,'<font color="red">'.$wd.'</font>',$value['article_description']);
            $channel['rows'][$key]= $array;
        }
        $this->assign("wd", $wd);
        $this->assign("channel", $channel);
        $this->assign("recommend", $recommend['rows']);
        $this->assign("channel_lei", $channel_lei['rows']);
        $this->view(config_item("style") . '/search/index');
	}

}
