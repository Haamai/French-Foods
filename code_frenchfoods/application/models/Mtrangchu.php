<?php 
class Mtrangchu extends CI_Model {
    var $table= 'taikhoan';

	public function __construct(){
	    parent::__construct();
	        $this->load->database();
	}
	public function listall(){
        $this->db->select("*");
        $this->db->order_by("idbaiviet desc");
        $this->db->limit(3);
        $query=$this->db->get("baiviet");
        return $query->result_array();
    }
    public function listall_tt(){
        $this->db->select("*");
        $this->db->order_by("idmonan desc");
        $this->db->limit(10);
        $query=$this->db->get("monan");
        return $query->result_array();
    }
    public function listall_slidett(){
        $this->db->select("*");
        $this->db->order_by("idslidett desc");
        $this->db->limit(3);
        $query=$this->db->get("slidett");
        return $query->result_array();
    }
    public function listall_slidetk(){
        $this->db->select("*");
        $this->db->order_by("idslidetk desc");
        $this->db->limit(3);
        $query=$this->db->get("slidetk");
        return $query->result_array();
    }
    public function auth_check($data)
    {
        $query = $this->db->get_where('taikhoan', $data);
        if($query){   
            return $query->row();
        }
        return false;
    }
    
    public function insert_user($data)
    {
 
        $insert = $this->db->insert('taikhoan', $data);
        if ($insert) {
            return $this->db->insert_id();
        } else {
            return false;
        }
    }
    function check_exists($where = array())
    {
        $this->db->where($where);
        //thuc hien cau truy van lay du lieu
        $query = $this->db->get($this->table);
        
        if($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function getOne($taikhoan){
        $query=$this->db->query("SELECT * FROM taikhoan where taikhoan =$taikhoan");
        $data=$query->row_array();
        return $data;
    }
    public function update_tk($taikhoan,$matkhau){
        $this->db->query("UPDATE taikhoan SET matkhau='".$matkhau."' where taikhoan='".$taikhoan."'");
    }

    public function insert_mkm($matkhaumoi,$taikhoan)
    {
        $this->db->query("UPDATE taikhoan SET matkhau='".$matkhaumoi."' where taikhoan='".$taikhoan."'");
    }
}
?>
