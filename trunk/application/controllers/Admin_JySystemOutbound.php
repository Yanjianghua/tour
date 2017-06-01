<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Admin_JySystemOutbound extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->loadService("JySystem");
		$this->loadModel("JySystem");
	}


	/**
	 * 加载主页面
	 */
	public function index() {
        $input = $this->input->get(NULL);
        if (!empty($input)) {
            $where = array("system_type"=>3);
            if (optionExists($input['system_class'])) {
                $where['system_class'] = $input['system_class'];
                $this->assign("system_class",$input['system_class']);
            }
            $system = $this->JySystem_service->get_list($where);
        }else{
            $system = $this->JySystem_service->get_list(array("system_type"=>3));
        }

        $channel = json_decode(JySystem_model::CHANNEL_ARRAY,true);
        $this->assign("channel",$channel);
        $this->assign("system", $system['rows']);
        $this->view("admin/jysystemoutbound/index");
	}

	/**
	 * 修改
	 */
	public function edit() {
        $system_id = $this->input->get('system_id');
        $system_class = $this->input->get('system_class');
		$input = $this->input->post(NULL);
		if (!empty($input)) {
            $input['status'] = 1;
            $success = $this->JySystem_service->addoredit($input);
            if($success['success']){
                alert($success['msg'],"/Admin_JySystemLocal/index?system_class=".$system_class);
            }else{
                alert($success['msg']);
            }
		}
        if(!empty($system_class)){
            $this->assign("system_class",$system_class);
        }
        $system = $this->JySystem_model->where('system_id',$system_id)->get_item();
		$this->assign("system", $system);

        $channel = json_decode(JySystem_model::CHANNEL_ARRAY,true);
        $type = json_decode(JySystem_model::TYPE_ARRAY,true);
        $this->assign("type",$type);
        $this->assign("channel",$channel);
		$this->view("admin/jysystemoutbound/edit");
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
                alert($success['msg'],"/Admin_JySystemLocal/index");
            }else{
                alert($success['msg']);
            }

		}
		$channel = json_decode(JySystem_model::CHANNEL_ARRAY,true);
		$type = json_decode(JySystem_model::TYPE_ARRAY,true);
        $this->assign("type",$type);
        $this->assign("channel",$channel);
		$this->view("admin/jysystemoutbound/add");
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
