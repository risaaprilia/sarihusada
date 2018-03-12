<?php

/**
 * Created by PhpStorm.
 * User: RISA
 * Date: 3/2/2018
 * Time: 1:39 PM
 */
class job_table extends CI_Model{
    function get_table_data(){
        $query=$this->db->query("select * from tjob_list");
        return $query;
    }
}