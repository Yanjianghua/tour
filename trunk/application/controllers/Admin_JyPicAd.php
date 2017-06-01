<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_JyPicAd extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("JyPicAd");
		$this->loadModel("JyPicAd");
	}


	/**
	 * 加载主页面
	 */
	public function index() {
		$ad = $this->JyPicAd_service->get_list();
		$this->assign("ad", $ad['rows']);
		$this->view("admin/jyad/index");
	}

	/**
	 * 修改
	 */
	public function edit() {
        $ad_id = $this->input->get('ad_id');
		$input = $this->input->post(NULL);
		if (!empty($input)) {
            $input['status'] = 1;
            if($_FILES){
                $input['ad_pic'] = $this->upload($_FILES['ad_pic']);
            }else{
                $input['ad_pic'] = NULL;
            }
            $success = $this->JyPicAd_service->addoredit($input);
            if($success['success']){
                alert($success['msg'],"/Admin_JyPicAd/index");
            }else{
                alert($success['msg']);
            }
		}
        $ad = $this->JyPicAd_model->where('ad_id',$ad_id)->get_item();
		$this->assign("ad", $ad);
		$this->view("admin/jyad/edit");
	}

	/**
	 * 添加
	 */
	public function add() {
		$input = $this->input->post(NULL);
		if (!empty($input)) {
            $input['status'] = 1;
            if($_FILES){
                $input['ad_pic'] = $this->upload($_FILES['ad_pic']);
            }else{
                $input['ad_pic'] = NULL;
            }
			$success = $this->JyPicAd_service->addoredit($input);
            if($success['success']){
                alert($success['msg'],"/Admin_JyPicAd/index");
            }else{
                alert($success['msg']);
            }

		}
		$this->view("admin/jyad/add");
	}

	/**
	 * 删除
	 */
	public function del() {
		$input = $this->input->get(NULL);
        $success = $this->JyPicAd_service->delete($input);
		alert($success['msg']);
	}

	/**
	 * 禁用
	 */
	public function disable() {
		$input = $this->input->get(NULL);
		$input['status'] = FALSE;
        $success = $this->JyPicAd_service->addoredit($input);
		alert($success['msg']);
	}

	/**
	 * 启用
	 */
	public function enable() {
		$input = $this->input->get(NULL);
		$input['status'] = TRUE;
        $success = $this->JyPicAd_service->addoredit($input);
        alert($success['msg']);
	}

    /**
     * 后台上传图片
     * @param null $file
     * @return string
     */
    public function upload($file = NULL){
        $img = upload($file, "/uploads/pic", function() use ($file) {
            if (!maxFileSize($file)) {
                return false;
            }
            if (!isImage($file)) {
                return false;
            }
        });
        if (!$img) {
            $message = '上传失败';
        }
        return $this->config->config['server_url'].$img;
    }

}
