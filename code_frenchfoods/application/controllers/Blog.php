<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('date');
		$this->load->helper(array('url','html','form'));
        $this->load->library(array('form_validation','session'));
	}

	// public function index()
	// {
	// 	$data['user'] = $this->session->userdata('login');
	// 	$this->load->Model("Mblog");
	// 	$data['nhanxet']=$this->Mblog->listall();
	// 	$this->load->view('site/blog/index',$data);
	// }
	function check_nx()
    {
        $ndnhanxet = $this->input->post('ndnhanxet');
        $check = preg_match('/^[a-zA-Z0-9áảấẩắẳóỏốổớởíỉýỷéẻếểạậặọộợịỵẹệãẫẵõỗỡĩỹẽễàầằòồờìỳèềaâăoôơiyeêùừụựúứủửũữuưáảấẩắẳóỏốổớởíỉýỷéẻếể ]+$/',$ndnhanxet);
		if ($check) {
		    return true;
		}
        $this->form_validation->set_message(__FUNCTION__, 'Ghi chú chỉ gồm các chữ cái viết thường, viết hoa hoặc số.');
        return false;
    }
    function check_sdt()
    {
        $sdt = $this->input->post('sdt');
        $check = preg_match('/^[0-9]{10}+$/',$sdt);
		if ($check) {
		    return true;
		}
        $this->form_validation->set_message(__FUNCTION__, 'Số điện thoại gồm 10 chữ số.');
        return false;
    }
	public function nhanxet()
	{
		$data['user'] = $this->session->userdata('login');
		$this->load->Model("Mblog");
		$data['nhanxet']=$this->Mblog->listall();
		$this->form_validation->set_rules('ndnhanxet', 'ndnhanxet', 'callback_check_nx');
		$this->form_validation->set_rules('sdt', 'sdt', 'callback_check_sdt');
		if ($this->form_validation->run() === FALSE)
            {  
                $this->load->view('site/blog/index',$data);
            }
            else{
				$hoten=$this->input->post('hoten');
				$email=$this->input->post('email');
				$sdt=$this->input->post('sdt');
				$ndnhanxet=$this->input->post('ndnhanxet');
				$dates = "%Y/%m/%d";
				$time1 = time();
				$time=mdate($dates, $time1);
				$trangthai=1;
				$data = array(
		            'ngnhanxet' => $hoten,
		            'email' => $email,
		            'sdtnhanxet' => $sdt,
		            'ndnhanxet' => $ndnhanxet,
		            'thoigian' => $time,
		            'trangthai' => $trangthai,
		        );
				$this->load->model('Mblog');
				$this->Mblog->insert($data);
				// header("location:../thucdon/monan");
				?>
				<script type="text/javascript">
		            alert('Nhận xét thành công!');
		            window.location="../blog/nhanxet";
		        </script>
		        <?php
	    	}
	}
}

/* End of file Blog.php */
/* Location: ./application/controllers/Blog.php */