<?php
/**
 * Created by PhpStorm.
 * User: Risa Aprilia
 * Date: 11/22/2017
 * Time: 10:34 AM
 */

class Overview extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('form','url');
        $this->load->model('job_table','',TRUE);
        $this->load->model('joblist_model','',TRUE);

        if($this->session->userdata('status')!= 1){
            redirect(base_url("Main"));
        }
    }

    public function display()
    {

        $data['content_view']="overviewcontent_view.php";
        $data['data_table']=$this->joblist_model->get_all_jobs();
        $this->load->view('overview_view',$data);

    }

    function logout(){
        $this->session->sess_destroy();
        echo "logout berhasil";
        redirect('Main','refresh');
    }

    function create_job(){

        $data = array(
          'job_name' => $this->input->post('job_name'),
            'job_desc' => $this->input->post('job_desc'),

        );
        $insert = $this->joblist_model->insert_jobs($data);
        echo json_encode(array("status"=>TRUE));
    }


    public function ajax_edit($id)
    {
        $data = $this->joblist_model->get_by_id($id);
        echo json_decode($data);
    }

    public function update_job()
    {
        $data = array(
            'job_id'=> $this->input->post('job_id'),
            'job_name' => $this->input->post('job_name'),
//            'job_desc' => $this->input->post('job_desc'),
        );
        $this->joblist_model->update_job(array('job_id' => $this->input->post('job_id')), $data);
        echo json_encode(array("status" => TRUE));
    }

    public function delete_job($id)
    {
        $this->joblist_model->delete_by_id($id);
        echo json_encode(array("status" => TRUE));
    }

    public function update_data($id)
    {
        $data = array(
            'job_status' => 2,
        );

        $this->db->where('job_id', $id);
        $this->db->update('tjob_list', $data);
        $this->session->set_flashdata('message', 'Your data deleted Successfully..');
        redirect('Overview/display');
    }




}
