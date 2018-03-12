<?php


/**
 * Created by PhpStorm.
 * User: Risa Aprilia
 * Date: 11/22/2017
 * Time: 4:51 PM
 */



class Setting extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('form','url');
        $this->load->model('setting_model','',TRUE);
//        session
//        if($this->session->userdata('status')!= 1){
//            redirect(base_url("Main"));
//        }
    }

    public function display()
    {
        $data['content_view']="setting_view.php";
        $data['data_table1']=$this->setting_model->get_all_config();
        $data['data_table2']=$this->setting_model->get_all_config_2();
        $data['data_table3']=$this->setting_model->get_all_config_3();
        $this->load->view('overview_view',$data);
    }

}

