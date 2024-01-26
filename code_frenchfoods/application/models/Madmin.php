<?php 
class Madmin extends CI_Model {
    var $table= 'taikhoan';
    var $tables= 'admin';
	public function __construct(){
	    parent::__construct();
	        $this->load->database();
	}
    public function auth_check($data)
    {
        $query = $this->db->get_where('admin', $data);
        if($query){   
            return $query->row();
        }
        return false;
    }
    public function insert_mkm($matkhaumoi,$taikhoan)
    {
        $this->db->query("UPDATE admin SET matkhau='".$matkhaumoi."' where taikhoan='".$taikhoan."'");
    }
    public function doimatkhau($matkhau,$taikhoan)
    {
        $this->db->query("UPDATE admin SET matkhau='".$matkhau."' where taikhoan='".$taikhoan."'");
    }
    // taif khoản
    public function kt_qtv($taikhoan){
        $query=$this->db->query("SELECT * FROM admin where taikhoan ='".$taikhoan."'");
        $data=$query->row_array();
        return $data;
    }
    public function listall_tk_qtv(){
        $this->db->select("*");
        $query=$this->db->get("admin");
        return $query->result_array();
    }
    public function getOne_qtv($id){
        $query=$this->db->query("SELECT * FROM admin where idadmin =$id");
        $data=$query->row_array();
        return $data;
    }
    public function update_tk_qtv($taikhoan,$hoten,$email,$sdt){
        $this->db->query("UPDATE admin SET hoten='".$hoten."' , email='".$email."' , sdt='".$sdt."' where taikhoan='".$taikhoan."'");
    }
    public function khoa_tk_qtv($idadmin){
        $this->db->query("UPDATE admin SET trangthai='1' where idadmin='".$idadmin."'");
    }
    public function mo_tk_qtv($idadmin){
        $this->db->query("UPDATE admin SET trangthai='0' where idadmin='".$idadmin."'");
    }
    function check_exists($where = array())
    {
        $this->db->where($where);
        //thuc hien cau truy van lay du lieu
        $query = $this->db->get($this->tables);
        
        if($query->num_rows() > 0){
            return TRUE;
        }else{
            return FALSE;
        }
    }
    public function them_qtv($hoten,$taikhoan,$matkhau,$email,$sdt){
        $this->db->query("INSERT INTO admin (hoten,taikhoan,matkhau,email,sdt) VALUES ('".$hoten."','".$taikhoan."','".$matkhau."','".$email."','".$sdt."')");
    }



	public function listall_tk(){
        $this->db->select("*");
        $query=$this->db->get("taikhoan");
        return $query->result_array();
    }
    public function getOne($id){
        $query=$this->db->query("SELECT * FROM taikhoan where idtaikhoan =$id");
        $data=$query->row_array();
        return $data;
    }
    public function update_tk($taikhoan,$hoten,$email,$sdt,$tichluy){
      	$this->db->query("UPDATE taikhoan SET hoten='".$hoten."', email='".$email."' , sdt='".$sdt."' , tichluy='".$tichluy."' where taikhoan='".$taikhoan."'");
    }
    public function khoa_tk($idtaikhoan){
      	$this->db->query("UPDATE taikhoan SET trangthai='1' where idtaikhoan='".$idtaikhoan."'");
    }
    public function mo_tk($idtaikhoan){
      	$this->db->query("UPDATE taikhoan SET trangthai='0' where idtaikhoan='".$idtaikhoan."'");
    }
    public function congdiem($idtaikhoan,$diem){
        $this->db->query("UPDATE taikhoan SET tichluy='".$diem."' where idtaikhoan='".$idtaikhoan."'");
    }
    public function trudiem($idtaikhoan,$diem){
        $this->db->query("UPDATE taikhoan SET tichluy='".$diem."' where idtaikhoan='".$idtaikhoan."'");
    }


    // loại món ăn
    public function listall_loaimonan(){
        $this->db->select("*");
        $query=$this->db->get("loaimonan");
        return $query->result_array();
    }
    public function getOne_lma($idloaimonan){
        $query=$this->db->query("SELECT * FROM loaimonan where idloaimonan =$idloaimonan");
        $data=$query->row_array();
        return $data;
    }
    public function update_lma($tenloaimonan,$mota,$idloaimonan){
        $this->db->query("UPDATE loaimonan SET tenloaimonan='".$tenloaimonan."' , mota='".$mota."' where idloaimonan='".$idloaimonan."'");
    }
    public function them_lma($tenloaimonan,$mota){
        $this->db->query("INSERT INTO loaimonan (tenloaimonan,mota) VALUES ('".$tenloaimonan."','".$mota."')");
    }
    public function xoa_lma($idloaimonan){
        $this->db->query("DELETE FROM loaimonan WHERE idloaimonan='".$idloaimonan."'");
    }




    // loại đồ uông
    public function listall_loaidouong(){
        $this->db->select("*");
        $query=$this->db->get("loaidouong");
        return $query->result_array();
    }
    public function getOne_ldo($idloaidouong){
        $query=$this->db->query("SELECT * FROM loaidouong where idloaidouong =$idloaidouong");
        $data=$query->row_array();
        return $data;
    }
    public function update_ldo($tenloaidouong,$mota,$idloaidouong){
        $this->db->query("UPDATE loaidouong SET tenloaidouong='".$tenloaidouong."' , mota='".$mota."' where idloaidouong='".$idloaidouong."'");
    }
    public function them_ldo($tenloaidouong,$mota){
        $this->db->query("INSERT INTO loaidouong (tenloaidouong,mota) VALUES ('".$tenloaidouong."','".$mota."')");
    }
    public function xoa_ldo($idloaidouong){
        $this->db->query("DELETE FROM loaidouong WHERE idloaidouong='".$idloaidouong."'");
    }







    // moán ăn
    public function listall_doan(){
        $this->db->select("*");
        $query=$this->db->get("monan");
        return $query->result_array();
    }
    public function getOne_doan($idmonan){
        $query=$this->db->query("SELECT * FROM monan where idmonan =$idmonan");
        $data=$query->row_array();
        return $data;
    }
    public function update_doan($tenmonan,$mota,$gia,$idmonan){
        $this->db->query("UPDATE monan SET tenmonan='".$tenmonan."' , mota='".$mota."', gia='".$gia."' where idmonan='".$idmonan."'");
    }
    public function them_doan($tenmonan,$mota,$gia,$image,$idloaimonan){
        $this->db->query("INSERT INTO monan (tenmonan,mota,gia,hinhanh,idloaimonan) VALUES ('".$tenmonan."','".$mota."','".$gia."','".$image."','".$idloaimonan."')");
    }
    public function xoa_doan($idmonan){
        $this->db->query("DELETE FROM monan WHERE idmonan='".$idmonan."'");
    }

    // ĐỒ UỐNG
    public function listall_douong(){
        $this->db->select("*");
        $query=$this->db->get("douong");
        return $query->result_array();
    }
    public function getOne_douong($iddouong){
        $query=$this->db->query("SELECT * FROM douong where iddouong =$iddouong");
        $data=$query->row_array();
        return $data;
    }
    public function update_douong($tendouong,$mota,$gia,$iddouong){
        $this->db->query("UPDATE douong SET tendouong='".$tendouong."' , mota='".$mota."', gia='".$gia."' where iddouong='".$iddouong."'");
    }
    public function them_douong($tendouong,$mota,$gia,$image,$idloaidouong){
        $this->db->query("INSERT INTO douong (tendouong,mota,gia,hinhanh,idloaidouong) VALUES ('".$tendouong."','".$mota."','".$gia."','".$image."','".$idloaidouong."')");
    }
    public function xoa_douong($iddouong){
        $this->db->query("DELETE FROM douong WHERE iddouong='".$iddouong."'");
    }


    // combo
    public function listall_combo(){
        $this->db->select("*");
        $query=$this->db->get("combo");
        return $query->result_array();
    }
    public function getOne_combo($idcombo){
        $query=$this->db->query("SELECT * FROM combo where idcombo =$idcombo");
        $data=$query->row_array();
        return $data;
    }
    public function update_combo($tencombo,$mota,$gia,$idcombo){
        $this->db->query("UPDATE combo SET tencombo='".$tencombo."' , mota='".$mota."', gia='".$gia."' where idcombo='".$idcombo."'");
    }
    public function them_combo($tencombo,$mota,$gia,$image){
        $this->db->query("INSERT INTO combo (tencombo,mota,gia,hinhanh) VALUES ('".$tencombo."','".$mota."','".$gia."','".$image."')");
    }
    public function xoa_combo($idcombo){
        $this->db->query("DELETE FROM combo WHERE idcombo='".$idcombo."'");
    }



    public function listall_sk(){
        $this->db->select("*");
        $query=$this->db->get("khuyenmai");
        return $query->result_array();
    }
    public function them_sk($nguoivietkm,$tieude,$noidung,$ngaybatdau,$ngayketthuc,$image){
      	$this->db->query("INSERT INTO khuyenmai (tieude,noidung,tgbatdau,tgketthuc,nguoivietkm,hinhanh) VALUES ('".$tieude."','".$noidung."','".$ngaybatdau."','".$ngayketthuc."','".$nguoivietkm."','".$image."')");
    }

    public function listall_bv(){
        $this->db->select("*");
        $query=$this->db->get("baiviet");
        return $query->result_array();
    }
    public function them_bv($nguoiviet,$chude,$noidung,$thoigian,$image){
        $this->db->query("INSERT INTO baiviet (nguoiviet,chude,noidung,thoigian,hinhanh) VALUES ('".$nguoiviet."','".$chude."','".$noidung."','".$thoigian."','".$image."')");
    }


    public function listall_td(){
        $this->db->select("*");
        $query=$this->db->get("tuyendung");
        return $query->result_array();
    }


    public function listall_db(){
        $this->db->select("*");
        $query=$this->db->get("datban");
        return $query->result_array();
    }
    public function xoa_datban($iddatban){
        $this->db->query("DELETE FROM datban WHERE iddatban='".$iddatban."'");
    }

    public function listall_dktcsk(){
        $this->db->select("*");
        $query=$this->db->get("tochucsk");
        return $query->result_array();
    }
    public function xoa_dktcsk($iddktcsk){
        $this->db->query("DELETE FROM tochucsk WHERE idtochucsk='".$iddktcsk."'");
    }

    public function listall_nhanxet(){
        $this->db->select("*");
        $query=$this->db->get("khnhanxet");
        return $query->result_array();
    }
    public function khoa_nx($idnhanxet){
        $this->db->query("UPDATE khnhanxet SET trangthai='1' where idnhanxet='".$idnhanxet."'");
    }
    public function mo_nx($idnhanxet){
        $this->db->query("UPDATE khnhanxet SET trangthai='0' where idnhanxet='".$idnhanxet."'");
    }
}
?>