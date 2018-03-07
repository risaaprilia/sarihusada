<?php

/**
 * Created by PhpStorm.
 * User: Risa Aprilia
 * Date: 11/22/2017
 * Time: 2:17 PM
 */


class Operation extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('form', 'url');

        $this->load->model('job_table','',TRUE);
        $this->load->model('joblist_model','',TRUE);
//        session
        if ($this->session->userdata('status') != 1) {
            redirect(base_url("Main"));
        }
    }

    public function display()
    {
        $data['job_list'] = $this->joblist_model->get_all_jobs();
        $data['content_view'] = "operation_view.php";
        $this->load->view('overview_view', $data);
    }

    function start_job($id)
    {
        $where = array('id' => $id);
        $data['job_list'] = $this->joblist_model->update_status($where,'job_list')->result();
//        $this->load->view('overview_view',$data);
    }

    function stop_job()
    {

    }
}


