<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: RISA
 * Date: 3/5/2018
 * Time: 1:27 AM
 */
class joblist_model extends CI_Model
{

    var $table = 'tjob_list';

    public function get_all_jobs()
    {
        $query=$this->db->query("select * from tjob_list WHERE deleted_job!='t' ");
        return $query;
    }

    public function get_all_status_jobs()
    {
        $query=$this->db->query("select * from tjob_list ");
        return $query;
    }

    public function get_starting_jobs()
    {
        $query=$this->db->query("select * from tjob_list WHERE job_status = 1");
        return $query;
    }


    public function get_by_id($id)
    {
        $this->db->from($this->table);
        $this->db->where('job_id',$id);
        $query = $this->db->get();

        return $query->row();
    }

    public function insert_jobs($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    public function update_job($where, $data)
    {
        $this->db->update($this->table, $data, $where);
        return $this->db->affected_rows();
    }

    public function delete_by_id($id)
    {
        $this->db->where('job_id', $id);
        $this->db->delete($this->table);
    }

    function update_status($where,$table){
        return $this->db->get_where($table,$where);
    }



}