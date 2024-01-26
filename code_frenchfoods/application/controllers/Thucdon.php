<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Thucdon extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('pagination');
		$this->load->helper(array('url','html','form'));
        $this->load->library(array('form_validation','session'));
        $this->taikhoan_id = $this->session->userdata('taikhoan_id');
	}


	public function monan()
	{
		$data['user'] = $this->session->userdata('login');
	    $this->load->Model("Mthucdon");
	    $idloaimonan = intval($this->uri->rsegment(3));
	    if (empty($idloaimonan)) {
	   		$idloaimonan=1;
	   	}
		$config = array();
		$config["base_url"] = base_url() . "index.php/thucdon/monan/".$idloaimonan;
		$data['loaimonan']=$this->Mthucdon->loaimonan();
		$data['list'] = $this->Mthucdon->get_info_monan($idloaimonan);
		$this->load->view('site/thucdon/monan', $data);

	}



	public function douong()
	{
		$data['user'] = $this->session->userdata('login');
	    $this->load->Model("Mthucdon");
	    $idloaidouong = intval($this->uri->rsegment(3));
	    if (empty($idloaidouong)) {
	   		$idloaidouong=20;
	   	}
		$config = array();
		$config["base_url"] = base_url() . "index.php/thucdon/douong/".$idloaidouong;
		$data['loaidouong']=$this->Mthucdon->loaidouong();
		$data['list'] = $this->Mthucdon->get_info_douong($idloaidouong);
		$this->load->view('site/thucdon/douong', $data);
		// echo"<pre>";
		// print_r($data);
		// echo $idloaidouong;
		// echo"</pre>";

	}


	public function combo()
	{
		$data['user'] = $this->session->userdata('login');
	    $this->load->Model("Mthucdon");
		$config = array();
		$config["base_url"] = base_url() . "index.php/thucdon/combo";
		$data['list'] = $this->Mthucdon->get_info_combo();
		$this->load->view('site/thucdon/combo', $data);
		// echo"<pre>";
		// print_r($data);
		// echo"</pre>";
	}



	
	function check_ghichu()
    {
        $ghichu = $this->input->post('ghichu');
        $check = preg_match('/^[a-zA-Z0-9áảấẩắẳóỏốổớởíỉýỷéẻếểạậặọộợịỵẹệãẫẵõỗỡĩỹẽễàầằòồờìỳèềaâăoôơiyeêùừụựúứủửũữuưáảấẩắẳóỏốổớởíỉýỷéẻếể ]+$/',$ghichu);
		if ($check) {
		    return true;
		}
        $this->form_validation->set_message(__FUNCTION__, 'Ghi chú chỉ gồm các chữ cái viết thường, viết hoa hoặc số.');
        return false;
    }
	public function datban()
	{
		$data['user'] = $this->session->userdata('login');
		$data['datban'] = $this->session->userdata('datban');
		$taikhoan=$data['user'];
		$idtaikhoan=$taikhoan['taikhoan_id'];	
		// $this->load->view('site/thucdon/datban',$data);
		$this->form_validation->set_rules('ghichu', 'ghichu', 'callback_check_ghichu');
		if ($this->form_validation->run() === FALSE)
            {  
                $this->load->view('site/thucdon/datban',$data);
            }
            else{
				$datban = array(
			        'songuoi' => $this->input->post('songuoi'),
			        'ngaydb' => $this->input->post('ngaydb'),
			        'giodb' => $this->input->post('giodb'),
			        'ghichu' => $this->input->post('ghichu'),
			    );
			    $this->session->set_userdata('datban',$datban);
			    $data['datban'] = $this->session->userdata('datban');
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
		                window.location="../thucdon/datban";
		            </script>
		            <?php
					} else{
						$hoten=$taikhoan['hoten'];
						$idtaikhoan=$taikhoan['taikhoan_id'];
						$songuoi=$this->input->post('songuoi');
					 	$ngaydb=$this->input->post('ngaydb');
						$giodb=$this->input->post('giodb');
						$ghichu=$this->input->post('ghichu');
						$data = array(
			                   'hoten' => $hoten,
			                   'idtaikhoan' => $idtaikhoan,
			                   'songuoi' => $songuoi,
			                   'ngaydb' => $ngaydb,
			                   'giodb' => $giodb,
			                   'ghichu' => $ghichu,
			            );
						$this->load->model('Mthucdon');
						$this->Mthucdon->insert($data);
						$this->session->unset_userdata('datban');
						?>
						<script type="text/javascript">
			                alert('Yêu cầu đặt bàn của quý khách đã được thực hiện, Frenchfoods sẽ phản hồi tới quý khách trong thời gian sớm nhất. Trân trọng cảm ơn!');
			                window.location="../lienhe/ttdatban";
			            </script>
			            <?php
					}

					
				}
				
			// echo"<pre>";
			// print_r($data);
			// // echo $taikhoan['trangthai'];
			// echo"</pre>";
			} 
	}

	
}

/* End of file Thucdon.php */
/* Location: ./application/controllers/Thucdon.php */