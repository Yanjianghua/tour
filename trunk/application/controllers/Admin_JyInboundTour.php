<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_JyInboundTour extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("JyInboundTour","JySystem");
		$this->loadModel("JySystem","JyInboundTour");
	}


	/**
	 * 加载主页面
	 */
	public function index() {
		$inbound = $this->JyInboundTour_service->get_list();
		$this->assign("inbound", $inbound['rows']);
		$this->view("admin/jyinboundtour/index");
	}

	/**
	 * 修改
	 */
	public function edit() {
        $inbound_id = $this->input->get('inbound_id');
		$input = $this->input->post(NULL);
		if (!empty($input)) {
            $input['status'] = 1;
            if($_FILES){
                $input['inbound_pic1'] = $this->upload($_FILES['inbound_pic1']);
                $input['inbound_pic2'] = $this->upload($_FILES['inbound_pic2']);
                $input['inbound_pic3'] = $this->upload($_FILES['inbound_pic3']);
                $input['inbound_pic4'] = $this->upload($_FILES['inbound_pic4']);
                $input['inbound_wap_pic1'] = $this->upload($_FILES['inbound_wap_pic1']);
                $input['inbound_wap_pic2'] = $this->upload($_FILES['inbound_wap_pic2']);
            }else{
                $input['inbound_pic1'] = NULL;
                $input['inbound_pic2'] = NULL;
                $input['inbound_pic3'] = NULL;
                $input['inbound_pic4'] = NULL;
                $input['inbound_wap_pic1'] = NULL;
                $input['inbound_wap_pic2'] = NULL;
            }
            $success = $this->JyInboundTour_service->addoredit($input);
            if($success['success']){
                alert($success['msg'],"/Admin_JyInboundTour/index");
            }else{
                alert($success['msg']);
            }
		}
        $inbound = $this->JyInboundTour_model->where('inbound_id',$inbound_id)->get_item();
		$this->assign("inbound", $inbound);
        $channel_1 = $this->JySystem_service->get_list(array('status'=>'1','system_class'=>'1','system_type'=>2));
        $this->assign("channel_1",$channel_1['rows']);
        $channel_2 = $this->JySystem_service->get_list(array('status'=>'1','system_class'=>'2','system_type'=>2));
        $this->assign("channel_2",$channel_2['rows']);
        $channel_3 = $this->JySystem_service->get_list(array('status'=>'1','system_class'=>'3','system_type'=>2));
        $this->assign("channel_3",$channel_3['rows']);
        $channel_4 = $this->JySystem_service->get_list(array('status'=>'1','system_class'=>'4','system_type'=>2));
        $this->assign("channel_4",$channel_4['rows']);
        $channel_5 = $this->JySystem_service->get_list(array('status'=>'1','system_class'=>'5','system_type'=>2));
        $this->assign("channel_5",$channel_5['rows']);
		$this->view("admin/jyinboundtour/edit");
	}

	/**
	 * 添加
	 */
	public function add() {
		$input = $this->input->post(NULL);
		if (!empty($input)) {
            $input['status'] = 1;
            if($_FILES){
                $input['inbound_pic1'] = $this->upload($_FILES['inbound_pic1']);
                $input['inbound_pic2'] = $this->upload($_FILES['inbound_pic2']);
                $input['inbound_pic3'] = $this->upload($_FILES['inbound_pic3']);
                $input['inbound_pic4'] = $this->upload($_FILES['inbound_pic4']);
                $input['inbound_wap_pic1'] = $this->upload($_FILES['inbound_wap_pic1']);
                $input['inbound_wap_pic2'] = $this->upload($_FILES['inbound_wap_pic2']);
            }else{
                $input['inbound_pic1'] = NULL;
                $input['inbound_pic2'] = NULL;
                $input['inbound_pic3'] = NULL;
                $input['inbound_pic4'] = NULL;
                $input['inbound_wap_pic1'] = NULL;
                $input['inbound_wap_pic2'] = NULL;
            }
			$success = $this->JyInboundTour_service->addoredit($input);
            if($success['success']){
                alert($success['msg'],"/Admin_JyInboundTour/index");
            }else{
                alert($success['msg']);
            }
		}
        $channel_1 = $this->JySystem_service->get_list(array('status'=>'1','system_class'=>'1','system_type'=>2));
        $this->assign("channel_1",$channel_1['rows']);
        $channel_2 = $this->JySystem_service->get_list(array('status'=>'1','system_class'=>'2','system_type'=>2));
        $this->assign("channel_2",$channel_2['rows']);
        $channel_3 = $this->JySystem_service->get_list(array('status'=>'1','system_class'=>'3','system_type'=>2));
        $this->assign("channel_3",$channel_3['rows']);
        $channel_4 = $this->JySystem_service->get_list(array('status'=>'1','system_class'=>'4','system_type'=>2));
        $this->assign("channel_4",$channel_4['rows']);
        $channel_5 = $this->JySystem_service->get_list(array('status'=>'1','system_class'=>'5','system_type'=>2));
        $this->assign("channel_5",$channel_5['rows']);
		$this->view("admin/jyinboundtour/add");
	}

	/**
	 * 删除
	 */
	public function del() {
		$input = $this->input->get(NULL);
        $success = $this->JyInboundTour_service->delete($input);
		alert($success['msg']);
	}

	/**
	 * 禁用
	 */
	public function disable() {
		$input = $this->input->get(NULL);
		$input['status'] = FALSE;
        $success = $this->JyInboundTour_service->addoredit($input);
		alert($success['msg']);
	}

	/**
	 * 启用
	 */
	public function enable() {
		$input = $this->input->get(NULL);
		$input['status'] = TRUE;
        $success = $this->JyInboundTour_service->addoredit($input);
        alert($success['msg']);
	}

    /**
     * 推荐
     */
    public function recommend() {
        $input = $this->input->get(NULL);
        $input['status'] = 2;
        $success = $this->JyInboundTour_service->addoredit($input);
        alert($success['msg']);
    }

    /**
     * 团购
     */
    public function group() {
        $input = $this->input->get(NULL);
        $input['status'] = 3;
        $success = $this->JyInboundTour_service->addoredit($input);
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

    /**
     * ajax上传图片返回路径
     * @param null $file
     */
	public function uploadFile($file = NULL){
        $file = $_FILES['upload'];
        $img = upload($file, "/uploads/pic", function() use ($file) {
            if (!maxFileSize($file)) {
                return false;
            }
            if (!isImage($file)) {
                return false;
            }
        });
        $fn = $this->input->get('CKEditorFuncNum') ? $this->input->get('CKEditorFuncNum') : 1;
        $message = "";
        if (!$img) {
            $message = '上传失败';
        }
        mkhtml($fn, config_item("server_url") . str_replace("\\",'/',substr($img,1)), $message);
    }


}
