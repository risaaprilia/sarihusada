<?php

/**
 * Created by PhpStorm.
 * User: RISA
 * Date: 3/12/2018
 * Time: 11:14 AM
 */
class setting_model extends CI_Model
{

    public function get_all_config()
    {
        $query = $this->db->query("select * from tconfig WHERE device_id=1");
        return $query;
    }

    public function get_all_config_2()
    {
        $query = $this->db->query("select * from tconfig WHERE device_id=2");
        return $query;
    }

    public function get_all_config_3()
    {
        $query = $this->db->query("select * from tconfig WHERE device_id=3");
        return $query;
    }
}