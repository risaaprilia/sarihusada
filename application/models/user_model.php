<?php
/**
 * Created by PhpStorm.
 * User: Risa Aprilia
 * Date: 12/5/2017
 * Time: 2:33 PM
 */
class user_model extends CI_model{

    var $table = 'tuser';

    function get_user_data(){
    $query=$this->db->query("select * from tuser ");
    return $query;
    }

    function get_user_data_login(){
        $query=$this->db->query("select * from tuser,trole  WHERE is_login=1 AND tuser.roleid = trole.roleid ");
        return $query;
    }

    function set_userdata($username,$status)
    {
        $this->db->query("UPDATE tuser SET is_login =$status WHERE username = '$username'");
        $user_id = $this->db->query("select userid from tuser WHERE username ='$username'");
        return $user_id;
    }

    function login_check($table,$where){
        return $this->db->get_where($table,$where);
    }

    function check_if_login($username){
//        return $this->db->query("SELECT is_login  FROM  tuser WHERE username = '$username'");
        $this->db->from($this->table);
        $this->db->where('is_login','$username');
        $query = $this->db->get();

        return $query->row();

    }

    function get_status_login_user(){
        $query=$this->db->query("select username from tuser,trole  WHERE is_login=1 AND tuser.roleid = trole.roleid ");
        return $query->row();

    }
}
