<?php 
class Msukien extends CI_Model {
	public function __construct(){
	    parent::__construct();
	        $this->load->database();
	}
	public function listall(){
        $this->db->select("*");
        $this->db->order_by("idkhuyenmai desc");
        $this->db->limit(4);
        $query=$this->db->get("khuyenmai");
        return $query->result_array();
    }

    public function listall_skt(){
        $this->db->select("*");
        $this->db->order_by("idsukien desc");
        $this->db->limit(4);
        $query=$this->db->get("sukienthang");
        return $query->result_array();
    }
    public function listall_slidetk(){
        $this->db->select("*");
        $this->db->order_by("idslidetk desc");
        $this->db->limit(3);
        $query=$this->db->get("slidetk");
        return $query->result_array();
    }
    public function insert($data)
    {
        $insert = $this->db->insert('tochucsk', $data);
        if ($insert) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }

    public function insert_td($data)
    {
        $insert = $this->db->insert('tuyendung', $data);
        if ($insert) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }
}
?>