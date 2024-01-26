<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lienhe extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mlienhe');
	}

	public function dclienhe()
	{
		$data['user'] = $this->session->userdata('login');
		$this->load->view('site/lienhe/dclienhe',$data);
	}

	public function ttcn()
	{

		$data['user'] = $this->session->userdata('login');
		if (empty($data['user'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../trangchu/dangnhap";
            </script>
            <?php
		}else{
			
			$this->load->view('site/lienhe/ttcn',$data);
		}
		// echo "<pre>";
		// print_r($data);
		// echo "<pre>";

	}
	public function ttdatban()
	{
		$data['user'] = $this->session->userdata('login');
		$user=$data['user'];
		$idtaikhoan=$user['taikhoan_id'];
		if (empty($data['user'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../trangchu/dangnhap";
            </script>
            <?php
		}else{
		$data['user'] = $this->session->userdata('login');
		$data['datban']=$this->Mlienhe->listall_db($idtaikhoan);
		$this->load->view('site/lienhe/ttdatban',$data);
		}
	}

	public function view_editdb()
	{
		$data['user'] = $this->session->userdata('login');
		if (empty($data['user'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../trangchu/dangnhap";
            </script>
            <?php
		}else{
			$iddatban = intval($this->uri->rsegment(3));
			$datban=$this->Mlienhe->getOne($iddatban);
			if($datban["trangthai"]==0){
				$time = now(); 
            	$time=unix_to_human($time, TRUE, 'UP7');
                if ($time>$datban["ngaydb"]) {
                    ?>
					<script type="text/javascript">
		                alert('Sự kiện đã hoàn thành, không thể chỉnh sửa.');
		                window.location="../ttdatban";
		            </script>
		            <?php
                } else{
                    $data['user'] = $this->session->userdata('login');
					$iddatban = intval($this->uri->rsegment(3));
					$data['datban']=$this->Mlienhe->getOne($iddatban);
					$this->load->view('site/lienhe/view_editdb',$data);
                }
            } else {
                ?>
				<script type="text/javascript">
	                alert('Sự kiện đã bị hủy, không thể chỉnh sửa.');
	                window.location="../ttdatban";
	            </script>
	            <?php
            }
		
		}
		// echo "<pre>";
		// print_r($data);
		// echo "<pre>";
	}
	public function edit_db_ok(){
		$data['user'] = $this->session->userdata('login');
		if (empty($data['user'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../trangchu/dangnhap";
            </script>
            <?php
		}else{
			$taikhoan=$data['user'];
			$iddatban =$this->input->post("iddatban");
			$idtaikhoan=$taikhoan['taikhoan_id'];
			$hoten=$taikhoan['hoten'];
			$ngaydb=$this->input->post("ngaydb");
			$giodb=$this->input->post("giodb");
			$songuoi=$this->input->post("songuoi");
			$ghichu=$this->input->post("ghichu");
			$this->Mlienhe->update_db($iddatban,$idtaikhoan,$hoten,$ngaydb,$giodb,$songuoi,$ghichu);
			header('location:'.site_url('lienhe/ttdatban').'');
		}
	}
	public function huydb(){
		$data['user'] = $this->session->userdata('login');
		if (empty($data['user'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../trangchu/dangnhap";
            </script>
            <?php
		}else{
			$taikhoan=$data['user'];
			$iddatban = intval($this->uri->rsegment(3));
			$datban=$this->Mlienhe->getOne($iddatban);
			if($datban["trangthai"]==0){
				$time = now(); 
            	$time=unix_to_human($time, TRUE, 'UP7');
                if ($time>$datban["ngaydb"]) {
                    ?>
					<script type="text/javascript">
		                alert('Tiệc đã hoàn thành, không thể hủy.');
		                window.location="../ttdatban";
		            </script>
		            <?php
                } else{
                    $this->Mlienhe->huydb($iddatban);
                    ?>
					<script type="text/javascript">
		                alert('Hủy thành công');
		                window.location="../ttdatban";
		            </script>
		            <?php
                }
            } else {
                ?>
				<script type="text/javascript">
	                alert('Bàn đã bị hủy, không thể hủy thêm nữa.');
	                window.location="../ttdatban";
	            </script>
	            <?php
            }
		}
	}


	public function tttcsukien()
	{
		$data['user'] = $this->session->userdata('login');
		$user=$data['user'];
		$idtaikhoan=$user['taikhoan_id'];
		if (empty($data['user'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../trangchu/dangnhap";
            </script>
            <?php
		}else{
		$data['user'] = $this->session->userdata('login');
		$data['dktcsk']=$this->Mlienhe->listall_dktcsk($idtaikhoan);
		$this->load->view('site/lienhe/tttcsukien',$data);
		}
	}
	public function view_edittcsk()
	{
		$data['user'] = $this->session->userdata('login');
		if (empty($data['user'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../trangchu/dangnhap";
            </script>
            <?php
		}else{
			$idtochucsk = intval($this->uri->rsegment(3));
			$tochucsk=$this->Mlienhe->gettcsk($idtochucsk);
			if($tochucsk["trangthai"]==0){
				$time = now(); 
            	$time=unix_to_human($time, TRUE, 'UP7');
                if ($time>$tochucsk["ngaytochuc"]) {
                    ?>
					<script type="text/javascript">
		                alert('Sự kiện đã hoàn thành, không thể chỉnh sửa.');
		                window.location="../tttcsukien";
		            </script>
		            <?php
                } else{
                    $data['user'] = $this->session->userdata('login');
					$idtochucsk = intval($this->uri->rsegment(3));
					$data['tcsk']=$this->Mlienhe->gettcsk($idtochucsk);
					$this->load->view('site/lienhe/view_edittcsk',$data);
                }
            } else {
                ?>
				<script type="text/javascript">
	                alert('Sự kiện đã bị hủy, không thể chỉnh sửa.');
	                window.location="../tttcsukien";
	            </script>
	            <?php
            }
		
		}
		// echo "<pre>";
		// print_r($data);
		// echo "<pre>";
	}
	public function edit_tcsk_ok(){
		$data['user'] = $this->session->userdata('login');
		if (empty($data['user'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../trangchu/dangnhap";
            </script>
            <?php
		}else{
            $taikhoan=$data['user'];
			$idtochucsk =$this->input->post("idtochucsk");
			$idtaikhoan=$taikhoan['taikhoan_id'];
			$hoten=$taikhoan['hoten'];
			$ngaytochuc=$this->input->post("ngaytochuc");
			$giotochuc=$this->input->post("giotochuc");
			$songuoi=$this->input->post("songuoi");
			$ghichu=$this->input->post("ghichu");
			$this->Mlienhe->update_tcsk($idtochucsk,$idtaikhoan,$hoten,$ngaytochuc,$giotochuc,$songuoi,$ghichu);
			header('location:'.site_url('lienhe/tttcsukien').'');
		}
	}
	public function huytcsk(){
		$data['user'] = $this->session->userdata('login');
		if (empty($data['user'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../trangchu/dangnhap";
            </script>
            <?php
		}else{
			$taikhoan=$data['user'];
			$idtochucsk = intval($this->uri->rsegment(3));
			$tochucsk=$this->Mlienhe->gettcsk($idtochucsk);
			if($tochucsk["trangthai"]==0){
				$time = now(); 
            	$time=unix_to_human($time, TRUE, 'UP7');
                if ($time>$tochucsk["ngaytochuc"]) {
                    ?>
					<script type="text/javascript">
		                alert('Sự kiện đã hoàn thành, không thể hủy.');
		                window.location="../tttcsukien";
		            </script>
		            <?php
                } else{
                    $this->Mlienhe->huytcsk($idtochucsk);
                    ?>
					<script type="text/javascript">
		                alert('Hủy thành công.');
		                window.location="../tttcsukien";
		            </script>
		            <?php
                }
            } else {
                ?>
				<script type="text/javascript">
	                alert('Sự kiện đã bị hủy, không thể hủy thêm nữa.');
	                window.location="../tttcsukien";
	            </script>
	            <?php
            }
		}
	}
}

/* End of file Lienhe.php */
/* Location: ./application/controllers/Lienhe.php */