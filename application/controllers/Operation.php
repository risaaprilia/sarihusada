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
        $this->load->model('config_model','',TRUE);
//        session
//        if ($this->session->userdata('status') != 1) {
//            redirect(base_url("Main"));
//        }
    }

    public function display()
    {
        $value = $this->joblist_model->check_job_status2();
//        $status = mysql_fetch_array($value);
                $status = $value->job_status;
        if( $status == 1) {
//            if job status =1
            $data['job_list'] = $this->joblist_model->get_starting_jobs();
            $data['status_lamp'] = '1';

        }else{
            //            if query null

            $data['job_list'] = $this->joblist_model->get_all_jobs();
            $data['status_lamp'] ='0';


        }

        $data['device_pallet']= $this->config_model->get_printer_pallet(); //pallete 1
        $data['device_bag']= $this->config_model->get_printer_bag(); //bag 2
        $data['device_camera']= $this->config_model->get_camera();// camera 3
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

//        same as display
        $data_start['device_pallet']= $this->config_model->get_printer_pallet(); //pallete 1
        $data_start['device_bag']= $this->config_model->get_printer_bag(); //bag 2
        $data_start['device_camera']= $this->config_model->get_camera();// camera 3
        $data_start['job_list'] = $this->joblist_model->get_starting_jobs();
        $data_start['status_lamp'] = '1';
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

//        same as display
        $data_start['device_pallet']= $this->config_model->get_printer_pallet(); //pallete 1
        $data_start['device_bag']= $this->config_model->get_printer_bag(); //bag 2
        $data_start['device_camera']= $this->config_model->get_camera();// camera 3
        $data_start['job_list'] = $this->joblist_model->get_all_jobs();
        $data_start['status_lamp'] = '0';
        $data_start['content_view'] = "operation_view.php";
        $this->load->view('overview_view', $data_start);

    }
}


