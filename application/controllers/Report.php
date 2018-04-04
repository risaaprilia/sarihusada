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
        $this->load->model('table_job_model','',TRUE);
        $this->load->model('user_model','',TRUE);
//        session
//        if($this->session->userdata('status')!= 1){
//            redirect(base_url("Main"));
//        }
    }

    public function display()
    {
        $data['data_table'] = 0;
        $data['content_view']="report_view.php";
        $data['job_list']=$this->joblist_model->get_all_jobs();
        $data['user_data']=$this->user_model->get_user_data_login();
        $this->load->view('overview_view',$data);
    }

    public function view_job($job_id = 0,$status = 0)
    {
        $data_table['data_table'] = 1;
      $data_table['table_view']= $this->table_job_model->get_all_table($job_id,$status);
      $data_table['content_view']="report_view.php";
      $data_table['job_list']=$this->joblist_model->get_all_jobs();
      $this->load->view('overview_view',$data_table);

    }



}