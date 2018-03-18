<?php

/**
 * Created by PhpStorm.
 * User: RISA
 * Date: 3/18/2018
 * Time: 10:04 PM
 */
class table_job_model extends CI_Model
{
    public function get_all_table($job_id,$status)
    {
        $query = $this->db->query("select * from tjob_$job_id WHERE status=$status");
        return $query;
    }

}