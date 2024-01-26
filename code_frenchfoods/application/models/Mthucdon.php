<?php 
class Mthucdon extends CI_Model {
    protected $tbl_monan = 'monan';
    var $monan= 'monan';
    var $loaimonan= 'loaimonan';
    var $idloaimonan= 'idloaimonan';
    var $douong= 'douong';
    var $loaidouong= 'loaidouong';
    var $idloaidouong= 'idloaidouong';
    var $combo= 'combo';
    var $idcombo= 'idcombo';
	public function __construct(){
	    parent::__construct();
	        $this->load->database();
	}
    public function record_count() {
      return $this->db->count_all("sanpham");
    }

    public function loaimonan(){
        $this->db->select("*");
        $query=$this->db->get("loaimonan");
        return $query->result_array();
    }

    public function monan(){
        $this->db->select("*");
        $query=$this->db->get("monan");
        return $query->result_array();
    }

    public function get_info_monan($idloaimonan)
    {
        $this->db->select("*");
        $this->db->where("idloaimonan",$idloaimonan);
        $query=$this->db->get("monan");
        return $query->result_array();
    }


    public function loaidouong(){
        $this->db->select("*");
        $query=$this->db->get("loaidouong");
        return $query->result_array();
    }

    public function douong(){
        $this->db->select("*");
        $query=$this->db->get("douong");
        return $query->result_array();
    }

    public function get_info_douong($idloaidouong)
    {
        $this->db->select("*");
        $this->db->where("idloaidouong",$idloaidouong);
        $query=$this->db->get("douong");
        return $query->result_array();
    }


    public function get_info_combo()
    {
        $this->db->select("*");
        $query=$this->db->get("combo");
        return $query->result_array();
    }

    public function insert($data)
    {
        $insert = $this->db->insert('datban', $data);
        if ($insert) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }
}
?>