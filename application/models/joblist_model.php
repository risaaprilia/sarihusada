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

    public function create_new_table($data)
    {
        $query = $this->db->query("CREATE TABLE tjob_$data(
      `PrinterIP` varchar(15) DEFAULT NULL,
      `JobID` varchar(20) DEFAULT NULL,
      `Operation` varchar(50) DEFAULT NULL,
      `Template` varchar(50) DEFAULT NULL,
      `SKUDesc` varchar(50) DEFAULT NULL,
      `SKUId` int(11) DEFAULT NULL,
      `SSCC` varchar(50) DEFAULT NULL,
      `MaterialNumber` int(11) DEFAULT NULL,
      `MaterialDescription` varchar(50) DEFAULT NULL,
      `Batch` varchar(50) DEFAULT NULL,
      `UoM` varchar(50) DEFAULT NULL,
      `ExpiryDate` varchar(10) DEFAULT NULL,
      `MaterialSeqNo` int(11) DEFAULT NULL,
      `Quantity` int(11) DEFAULT NULL,
      `Variant` varchar(50) DEFAULT NULL,
      `Count` int(11) DEFAULT NULL,
      `Layers` varchar(50) DEFAULT NULL,
      `ProductionDate` varchar(10) DEFAULT NULL,
      `LotRun` varchar(50) DEFAULT NULL,
      `LineNo` int(11) DEFAULT NULL,
      `EAN13` varchar(13) DEFAULT NULL,
      `LOT` varchar(10) DEFAULT NULL,
      `LOTSequence` varchar(10) DEFAULT NULL,
      `PalletIdentifier` varchar(30) DEFAULT NULL,
      `TargetLocation` varchar(50) DEFAULT NULL,
      `OperId` varchar(30) DEFAULT NULL,
      `CreatedDateTime` varchar(30) DEFAULT NULL,
      `UpdatedDateTime` varchar(30) DEFAULT NULL,
      `BagSequence` varchar(10) DEFAULT NULL,
      `Status` varchar(50) DEFAULT NULL,
      `Reason` varchar(50) DEFAULT NULL,
      `Comments` varchar(50) DEFAULT NULL,
      `ProgressStatus` int(11) DEFAULT '0'
      )");
        return $query;
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

    function check_job_status(){
       $this->db->query("SELECT `job_status` FROM `tjob_list` WHERE job_status=1;");
        $query = $this->db->get();

        return $query->row();

//       return job_status if whereclause exist, else null
    }

    public function check_job_status2()
    {
        $this->db->from($this->table);
        $this->db->where('job_status',1);
        $query = $this->db->get();

        return $query->row();
    }

    public function check_job_status3()
    {
        return $results = mysqli_query("select job_id from tjob_list WHERE 'job_id'=1");

    }



    //        $sql = $this->db->query("select count(*) from tjob_list where 'job_status' = 1;");

}