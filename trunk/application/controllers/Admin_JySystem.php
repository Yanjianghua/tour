<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_JySystem extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("JySystem");
		$this->loadModel("JySystem");
	}


	/**
	 * 加载主页面
	 */
	public function index() {
		$system = $this->JySystem_service->get_list();
		$this->assign("system", $system['rows']);
		$this->view("admin/jysystem/index");
	}

	/**
	 * 修改
	 */
	public function edit() {
        $system_id = $this->input->get('system_id');
		$input = $this->input->post(NULL);
		if (!empty($input)) {
            $input['status'] = 1;
            $success = $this->JySystem_service->addoredit($input);
            if($success['success']){
                alert($success['msg'],"/Admin_JySystem/index");
            }else{
                alert($success['msg']);
            }
		}
        $system = $this->JySystem_model->where('system_id',$system_id)->get_item();
		$this->assign("system", $system);

        $channel = json_decode(JySystem_model::CHANNEL_ARRAY,true);
        $type = json_decode(JySystem_model::TYPE_ARRAY,true);
        $this->assign("type",$type);
        $this->assign("channel",$channel);
		$this->view("admin/jysystem/edit");
	}

	/**
	 * 添加
	 */
	public function add() {
		$input = $this->input->post(NULL);
		if (!empty($input)) {
            $input['status'] = 1;
			$success = $this->JySystem_service->addoredit($input);
            if($success['success']){
                alert($success['msg'],"/Admin_JySystem/index");
            }else{
                alert($success['msg']);
            }

		}
		$channel = json_decode(JySystem_model::CHANNEL_ARRAY,true);
		$type = json_decode(JySystem_model::TYPE_ARRAY,true);
        $this->assign("type",$type);
        $this->assign("channel",$channel);
		$this->view("admin/jysystem/add");
	}

	/**
	 * 删除
	 */
	public function del() {
		$input = $this->input->get(NULL);
        $success = $this->JySystem_service->delete($input);
		alert($success['msg']);
	}

	/**
	 * 禁用
	 */
	public function disable() {
		$input = $this->input->get(NULL);
		$input['status'] = FALSE;
        $success = $this->JySystem_service->addoredit($input);
		alert($success['msg']);
	}

	/**
	 * 启用
	 */
	public function enable() {
		$input = $this->input->get(NULL);
		$input['status'] = TRUE;
        $success = $this->JySystem_service->addoredit($input);
        alert($success['msg']);
	}

    /**
     * 推荐
     */
    public function recommend() {
        $input = $this->input->get(NULL);
        $input['status'] = 2;
        $success = $this->JySystem_service->addoredit($input);
        alert($success['msg']);
    }


}
