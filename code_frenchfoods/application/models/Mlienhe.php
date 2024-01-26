<?php 
class Mlienhe extends CI_Model {
	public function __construct(){
	    parent::__construct();
	        $this->load->database();
	}
	public function listall_db($idtaikhoan){
        $this->db->select("*");
        $this->db->where("idtaikhoan",$idtaikhoan);
        $this->db->order_by("iddatban desc");
        $this->db->limit(30);
        $query=$this->db->get("datban");
        return $query->result_array();
    }
    public function getOne($iddatban){
        $query=$this->db->query("SELECT * FROM datban where iddatban ='".$iddatban."'");
        $data=$query->row_array();
        return $data;
    }
    public function update_db($iddatban,$idtaikhoan,$hoten,$ngaydb,$giodb,$songuoi,$ghichu){
        $this->db->query("UPDATE datban SET hoten='".$hoten."' , idtaikhoan='".$idtaikhoan."' , ngaydb='".$ngaydb."', giodb='".$giodb."', songuoi='".$songuoi."', ghichu='".$ghichu."' where iddatban='".$iddatban."'");
    }
    public function huydb($iddatban){
        $this->db->query("UPDATE datban SET trangthai='1' where iddatban='".$iddatban."'");
    }



    public function listall_dktcsk($idtaikhoan){
        $this->db->select("*");
        $this->db->where("idtaikhoan",$idtaikhoan);
        $this->db->order_by("idtochucsk desc");
        $this->db->limit(30);
        $query=$this->db->get("tochucsk");
        return $query->result_array();
    }
    public function gettcsk($idtochucsk){
        $query=$this->db->query("SELECT * FROM tochucsk where idtochucsk =$idtochucsk");
        $data=$query->row_array();
        return $data;
    }
    public function update_tcsk($idtochucsk,$idtaikhoan,$hoten,$ngaytochuc,$giotochuc,$songuoi,$ghichu){
        $this->db->query("UPDATE tochucsk SET hoten='".$hoten."' , idtaikhoan='".$idtaikhoan."' , ngaytochuc='".$ngaytochuc."', giotochuc='".$giotochuc."', songuoi='".$songuoi."', ghichu='".$ghichu."' where idtochucsk='".$idtochucsk."'");
    }
    public function huytcsk($idtochucsk){
        $this->db->query("UPDATE tochucsk SET trangthai='1' where idtochucsk='".$idtochucsk."'");
    }
}
?>