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

    public function start_job($id)
    {
        $data = array(
            'job_status' => 1,
        );

        $this->db->where('job_id', $id);
        $this->db->update('tjob_list', $data);

        $data_start['job_list'] = $this->joblist_model->get_starting_jobs();
        $data_start['content_view'] = "operation_view.php";
        $this->load->view('overview_view', $data_start);

    }


    public function stop_job($id)
    {
        $data = array(
            'job_status' => 0,
        );

        $this->db->where('job_id', $id);
        $this->db->update('tjob_list', $data);
        redirect('Operation/display');

    }
}


