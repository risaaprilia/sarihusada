<?php

class config_model extends CI_Model
{
    function get_all_device()
    {
        $query = $this->db->query("select * from tconfig");
        return $query;
    }

    public function get_printer_pallet()
    {
        $query = $this->db->query("select * from tconfig WHERE device_id = 1 ");
        return $query;
    }

    public function get_printer_bag()
    {
        $query = $this->db->query("select * from tconfig WHERE device_id = 2");
        return $query;
    }

    public function get_camera()
    {
        $query = $this->db->query("select * from tconfig WHERE device_id = 3");
        return $query;
    }
}