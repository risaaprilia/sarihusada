<?php
/**
 * Created by PhpStorm.
 * User: Risa Aprilia
 * Date: 11/22/2017
 * Time: 5:02 PM
 */


class Report extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('form','url');
        $this->load->model('joblist_model','',TRUE);
//        session
        if($this->session->userdata('status')!= 1){
            redirect(base_url("Main"));
        }
    }

    public function display()
    {
        $data['content_view']="report_view.php";
        $data['job_list']=$this->joblist_model->get_all_jobs();
        $this->load->view('overview_view',$data);
    }



}