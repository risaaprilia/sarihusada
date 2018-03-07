<?php
/**
 * Created by PhpStorm.
 * User: Risa Aprilia
 * Date: 12/5/2017
 * Time: 3:40 PM
 */
class operation_table_model extends CI_Model{
    function get_table_data(){
        $query=$this->db->query("select * from OPERATION_TABLE");
        return $query;
    }
}

?>