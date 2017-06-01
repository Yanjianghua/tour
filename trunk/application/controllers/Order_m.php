<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Order_m extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->loadService("JyOrder");
    }

    public function index() {
        $name = $this->input->get('name');
        $id = $this->input->get('id');
        $class = $this->input->get('class');

        $this->assign("class", $class);
        $this->assign("name", $name);
        $this->assign("id", $id);
        $this->view(config_item("style") . '/wap/order/index');
    }

    public function order_add(){
        $input = $this->input->post(NULL);
        if (!empty($input)) {
            $input['status'] = 1;
            $success = $this->JyOrder_service->addoredit($input);
            if($success['success']){
                if(isset($input['source']) and $input['source']=='details'){
                    alert($success['msg'],"/m/");
                }else{
                    alert($success['msg'],"/m/");
                }
            }else{
                alert($success['msg']);
            }

        }else{
            alert('上传数据为空');
        }
    }


}
