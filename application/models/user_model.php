<?php
/**
 * Created by PhpStorm.
 * User: Risa Aprilia
 * Date: 12/5/2017
 * Time: 2:33 PM
 */
class user_model extends CI_model{

    function get_user_data(){
    $query=$this->db->query("select * from tuser ");
    return $query;
    }

    function login_check($table,$where){
        return $this->db->get_where($table,$where);
    }
}
?>