<?php
class Mtaikhoan extends CI_Model {
    protected $tbl_sanpham = 'taikhoan';
    var $table= 'loaisanpham';
    var $tables= 'idtaikhoan';
    public function __construct()
    {
        $this->load->database();
    }
     
    public function getOne($idtaikhoan){
        $query=$this->db->query("SELECT * FROM taikhoan where idtaikhoan =$idtaikhoan");
        $data=$query->row_array();
        return $data;
    }
    public function ttdatban($idtaikhoan){
        $query=$this->db->query("SELECT * FROM datban where idtaikhoan =$idtaikhoan ORDER BY iddatban DESC");
        $data=$query->row_array();
        return $data;
    }
    public function tttochucsk($idtaikhoan){
        $query=$this->db->query("SELECT * FROM tochucsk where idtaikhoan =$idtaikhoan ORDER BY idtochucsk DESC");
        $data=$query->row_array();
        return $data;
    }
    public function update_tk($taikhoan,$hoten,$email,$sdt){
        $this->db->query("UPDATE taikhoan SET hoten='".$hoten."' , email='".$email."' , sdt='".$sdt."' where taikhoan='".$taikhoan."'");
    }
    public function update_db($iddatban,$ngaydb,$giodb,$songuoi,$yeucaudb){
        $this->db->query("UPDATE datban SET ngaydb='".$ngaydb."' , giodb='".$giodb."' , songuoi='".$songuoi."' , ghichu='".$yeucaudb."' where iddatban='".$iddatban."'");
    }
    public function update_sk($idtochucsk,$ngaytochuc,$giotochuc,$songuoisk,$yeucausk){
        $this->db->query("UPDATE tochucsk SET ngaytochuc='".$ngaytochuc."' , giotochuc='".$giotochuc."' , songuoi='".$songuoisk."' , ghichu='".$yeucausk."' where idtochucsk='".$idtochucsk."'");
    }
    public function auth_check($data)
    {
        $query = $this->db->get_where('taikhoan', $data);
        if($query){   
            return $query->row();
        }
        return false;
    }
    // public function auth_check($data)
    // {
    //     $query = $this->db->get_where('taikhoan', $data);   
    //     if($query){
    //         return TRUE;
    //     }else{
    //         return FALSE;
    //     }
    // }
    public function insert_user($matkhau,$taikhoan)
    {
        $this->db->query("UPDATE taikhoan SET matkhau='".$matkhau."' where taikhoan='".$taikhoan."'");
    }
}