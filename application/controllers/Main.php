<?php
/**
 * Created by PhpStorm.
 * User: Risa Aprilia
 * Date: 11/14/2017
 * Time: 10:18 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper('form', 'url');
        $this->load->model('user_model','',TRUE);
        $this->load->model('job_table','',TRUE);
    }

   function index()
    {
        $data['list_user']=$this->user_model->get_user_data();
        $this->load->view('login_view',$data);
    }

    function validate()
    {
        $username = $this->input->post('username');
        $code = $this->input->post('code');
        $where = array(
            'username'=>$username,
            'pin' => $code
        );
        $cek = $this->user_model->login_check("tuser", $where)-> num_rows();
        if($cek >0 ){

            $username_login = $username;
            $status_login ='1';
            $this->user_model->set_userdata($username_login,$status_login);

            $data['content_view']="overviewcontent_view.php";
            $data['data_table']=$this->job_table->get_table_data();
            $data['user_data']=$this->user_model->get_user_data_login();
            $this->load->view('overview_view',$data);

       }else{
             echo " <script type='text/javascript'>
                      alert('Wrong Pin, Please Try Again');
                     </script>";
            redirect('Main','refresh');
            }
    }

    function logout(){
        $this->session->sess_destroy();
        redirect('Main','refresh');
    }



}