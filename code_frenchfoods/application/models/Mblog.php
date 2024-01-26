<?php 
class Mblog extends CI_Model {
	public function __construct(){
	    parent::__construct();
	        $this->load->database();
	}
	public function listall(){
        $this->db->select("*");
        $this->db->order_by("idnhanxet desc");
        $this->db->limit(50);
        $query=$this->db->get("khnhanxet");
        return $query->result_array();
    }

    public function insert($data)
    {
        $insert = $this->db->insert('khnhanxet', $data);
        if ($insert) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }
}
?>