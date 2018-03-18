<?php
/**
 * Created by PhpStorm.
 * User: Risa Aprilia
 * Date: 11/22/2017
 * Time: 5:02 PM
 */


class log extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->helper('form','url');
//        session
//        if($this->session->userdata('status')!= 1){
//            redirect(base_url("Main"));
//        }
    }

    public function display()
    {
        $data['content_view']="log_view.php";
        $this->load->view('overview_view',$data);
    }

    public function logView(){
        $file = 'log/3-14-2018_10-54_System.log';
        $last_modify_time = 0;
        while (true) {
            sleep(1); // 1 s
            clearstatcache(true, $file);
            $curr_modify_time = filemtime($file);
            if ($last_modify_time < $curr_modify_time) {
                echo file_get_contents($file);
            }

            $last_modify_time = $curr_modify_time;
        }
    }

}