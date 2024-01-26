<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sukien extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->helper(array('url','html','form'));
        $this->load->library(array('form_validation','session'));

	}

	public function khuyenmai()
	{
		$data['user'] = $this->session->userdata('login');
		
		$this->load->Model("Msukien");
		$data['slidetk'] =$this->Msukien->listall_slidetk();
		$data['khuyenmai']=$this->Msukien->listall();
		
		$this->load->view('site/sukien/khuyenmai',$data);

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

	}
	public function skthang()
	{
		$data['user'] = $this->session->userdata('login');
		$this->load->Model("Msukien");
		$data['slidetk'] =$this->Msukien->listall_slidetk();
		$data['khuyenmai']=$this->Msukien->listall_skt();
		
		$this->load->view('site/sukien/skthang',$data);

		// echo "<pre>";
		// print_r($data);
		// echo "</pre>";

	}



	public function tuyendung()
	{
		$data['user'] = $this->session->userdata('login');
		$this->load->Model("Msukien");
		$data['slidetk'] =$this->Msukien->listall_slidetk();
		$data['khuyenmai']=$this->Msukien->listall();
		
		$this->load->view('site/sukien/tuyendung',$data);

	}

	public function tuyendung_ok()
	{
		$data['user'] = $this->session->userdata('login');
		$hoten=$this->input->post('hoten');
		$gioitinh=$this->input->post('gioitinh');
		$ngaysinh=$this->input->post('ngaysinh');
		$diachi=$this->input->post('diachi');
		$vitri=$this->input->post('vitri');
		$sdt=$this->input->post('sdt');
		$email=$this->input->post('email');

		$data = array(
            'hoten' => $hoten,
            'gioitinh' => $gioitinh,
            'ngaysinh' => $ngaysinh,
            'diachi' => $diachi,
            'vitri' => $vitri,
            'sdt' => $sdt,
            'email' => $email,

        );
		$this->load->model('Msukien');
		$this->Msukien->insert_td($data);
		$this->load->library('email');
        $config = array();
        $config['protocol']  = 'smtp';
        $config['smtp_host'] = 'ssl://smtp.googlemail.com';
        $config['smtp_user'] = 'hoangvu3600@gmail.com';
        $config['smtp_pass'] = 'vult0718a';
        $config['smtp_port'] = '465';
        $config['charset'] = 'utf-8';
        $config['mailtype'] = 'html';
        $config['wordwrap'] = TRUE;
        $this->email->initialize($config);                
        $this->email->to($email);
        $this->email->from('hoangvu3600@gmail.com', 'FRENCH FOODS');
        $this->email->subject('Thông báo tuyển dụng');
        $this->email->message('Đơn ứng tuyển của bạn đã được cập nhật trên hệ thống.
        	Mọi thông tin chi tiết xin liên hệ gmail: Hoangvu3600@gmail.com hoặc theo số điện thoại: 032868094.
        	Xin cảm ơn!');
        $this->email->attach('logo.png');
        $this ->email->send();
		// header("location:../thucdon/monan");
		?>
		<script type="text/javascript">
               alert('Bạn đã đăng ký tuyển dụng online thành công, Frenchfoods sẽ liên hệ với bạn trong 24h.');
               window.location="../trangchu";
           </script>
           <?php	
	}




	// public function dktcsk()
	// {
	// 	$data['user'] = $this->session->userdata('login');
	// 	$data['tcsk'] = $this->session->userdata('tcsk');
	// 	$this->load->view('site/sukien/dktcsk',$data);
	// }
	function check_ghichu()
    {
        $ghichu = $this->input->post('yeucau');
        $check = preg_match('/^[a-zA-Z0-9áảấẩắẳóỏốổớởíỉýỷéẻếểạậặọộợịỵẹệãẫẵõỗỡĩỹẽễàầằòồờìỳèềaâăoôơiyeêùừụựúứủửũữuưáảấẩắẳóỏốổớởíỉýỷéẻếể ]+$/',$ghichu);
		if ($check) {
		    return true;
		}
        $this->form_validation->set_message(__FUNCTION__, 'Yêu cầu chi tiết chỉ gồm các chữ cái viết thường, viết hoa hoặc số.');
        return false;
    }
	public function dktcsk()
	{
		$data['user'] = $this->session->userdata('login');
		$data['user'] = $this->session->userdata('login');
		$data['tcsk'] = $this->session->userdata('tcsk');
		
		$this->form_validation->set_rules('yeucau', 'yeucau', 'callback_check_ghichu');
		if ($this->form_validation->run() === FALSE)
            {  
                $this->load->view('site/sukien/dktcsk',$data);
            }
            else{

			$tcsk = array(
		        'songuoi' => $this->input->post('songuoi'),
		        'ngaytochuc' => $this->input->post('ngaytochuc'),
		        'giotochuc' => $this->input->post('giotochuc'),
		        'yeucau' => $this->input->post('yeucau'),
		    );
		    $this->session->set_userdata('tcsk',$tcsk);
		    $data['tcsk'] = $this->session->userdata('tcsk');
			if (empty($data['user'])){
				?>
				<script type="text/javascript">
	                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
	                window.location="../trangchu/dangnhap";
	            </script>
	            <?php
			}else{
				$taikhoan=$data['user'];
				$trangthai=$taikhoan['trangthai'];
				if ($trangthai=='1') {
					?>
				<script type="text/javascript">
	                alert('Tài khoản của bạn tạm thời không thể thục hiện chức năng này.');
	                window.location="../sukien/dktcsk";
	            </script>
	            <?php
				} else{
				$hoten=$taikhoan['hoten'];
				$idtaikhoan=$taikhoan['taikhoan_id'];
				$songuoi=$this->input->post('songuoi');
			 	$ngaytochuc=$this->input->post('ngaytochuc');
				$giotochuc=$this->input->post('giotochuc');
				$yeucau=$this->input->post('yeucau');
				$data = array(
	                   'hoten' => $hoten,
	                   'idtaikhoan' => $idtaikhoan,
	                   'songuoi' => $songuoi,
	                   'ngaytochuc' => $ngaytochuc,
	                   'giotochuc' => $giotochuc,
	                   'ghichu' => $yeucau,
	            );
				$this->load->model('Msukien');
				$this->Msukien->insert($data);
				$this->session->unset_userdata('tcsk');
				// header("location:../thucdon/monan");
				?>
				<script type="text/javascript">
	                alert('Yêu cầu đăng ký tổ chức sự kiện của quý khách đã được thực hiện, Frenchfoods sẽ phản hồi tới quý khách trong thời gian sớm nhất. Trân trọng cảm ơn!');
	                window.location="../lienhe/tttcsukien";
	            </script>
	            <?php
	        	}
			}

		}
	}

}

/* End of file Sukien.php */
/* Location: ./application/controllers/Sukien.php */