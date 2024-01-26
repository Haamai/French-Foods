<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trangchu extends CI_Controller {

	public function __construct()
        {
            parent::__construct();
            $this->load->helper(array('url','html','form'));
            $this->load->library(array('form_validation','session'));
            $this->load->model('Mtrangchu');    
        }
    function check_email()
    {
        $email = $this->input->post('email');
        $where = array('email' => $email);
        //kiêm tra xem email đã tồn tại chưa
        if($this->Mtrangchu->check_exists($where))
        {
            //trả về thông báo lỗi
            $this->form_validation->set_message(__FUNCTION__, 'Email đã tồn tại');
            return false;
        }
        return true;
    }
    function check_taikhoan()
    {
        $taikhoan = $this->input->post('taikhoan');
        $where = array('taikhoan' => $taikhoan);

        if($this->Mtrangchu->check_exists($where))
        {
            //trả về thông báo lỗi
            $this->form_validation->set_message(__FUNCTION__, 'Tài khoản đã tồn tại');
            return false;
        }
        return true;
    }
    function check_sdt()
    {
        $sdt = $this->input->post('sdt');
        $where = array('sdt' => $sdt);
        $check = preg_match('/^[0-9]{10}+$/',$sdt);
        if ($check) {
            if($this->Mtrangchu->check_exists($where))
            {
                //trả về thông báo lỗi
                $this->form_validation->set_message(__FUNCTION__, 'Số điện thoại đã tồn tại.');
                return false;
            }
            return true;
        }
        $this->form_validation->set_message(__FUNCTION__, 'Số điện thoại gồm 10 chữ số.');
        return false;
    }
    function check_nhaplai()
    {
        $matkhau = $this->input->post('matkhau');
        $nhaplai = $this->input->post('nhaplai');

        if($matkhau==$nhaplai)
        {
            return true;
        }
        $this->form_validation->set_message(__FUNCTION__, 'Mật khẩu nhập lại không đúng');
        return false;
    }
	public function dangky()
	{
		if (!$this->session->userdata('login')){
			$this->form_validation->set_rules('hoten', 'hoten', 'required');
            $this->form_validation->set_rules('taikhoan', 'taikhoan', 'required|callback_check_taikhoan|min_length[6]|max_length[20]');
            $this->form_validation->set_rules('matkhau', 'matkhau', 'required|min_length[6]');
            $this->form_validation->set_rules('nhaplai', 'nhaplai', 'required|callback_check_nhaplai');
            $this->form_validation->set_rules('email', 'email', 'valid_email|callback_check_email');
            $this->form_validation->set_rules('sdt', 'sdt', 'required|callback_check_sdt');
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->form_validation->set_message('required', 'Enter %s');
            $dksai = array(
                'hoten' => $this->input->post('hoten'),
                'taikhoan' => $this->input->post('taikhoan'),
                'email' => $this->input->post('email'),
                'sdt' => $this->input->post('sdt'),
            );
            $this->session->set_userdata('dksai',$dksai);
            $data['dksai']=$this->session->userdata('dksai');
            if ($this->form_validation->run() === FALSE)
            {  
                

                $data['slidetk'] =$this->Mtrangchu->listall_slidetk();
                $this->load->view('site/taikhoan/dangky',$data);
            }
            else
            {   
                $data = array(
                   'hoten' => $this->input->post('hoten'),
                   'taikhoan' => $this->input->post('taikhoan'),
                   'matkhau' => md5($this->input->post('matkhau')),
                   'email' => $this->input->post('email'),
                   'sdt' => $this->input->post('sdt'),
                );
       
                $check = $this->Mtrangchu->insert_user($data);

                $tichluy=0;
                $trangthai=0;
                if($check != false){
                    $user = array(
                    'taikhoan_id' => $check,
                    'hoten' => $this->input->post('hoten'),
                    'taikhoan' => $this->input->post('taikhoan'),
                    'matkhau' => md5($this->input->post('matkhau')),
                    'email' => $this->input->post('email'),
                    'sdt' => $this->input->post('sdt'),
                    'tichluy' => $tichluy,
                    'trangthai' => $trangthai,
                    );

                    $this->session->set_userdata('login',$user);
                    $this->session->unset_userdata('dksai');
                    redirect(base_url('trangchu/index'));

                }else{

                    $data['slidetk'] =$this->Mtrangchu->listall_slidetk();

                    $this->load->view('site/taikhoan/dangky',$data);
                ?>
                    <script type="text/javascript">
                        alert('Đăng ký không thành công.');
                    </script>
                <?php
                }
            }
		}else {
            redirect(base_url('trangchu/index'));
        }
        // echo "<pre>";
        // print_r($data);
        // print_r($dksai);
        // echo "</pre>";
	}

	public function dangnhap()
	{
        $data['datban'] = $this->session->userdata('datban');
        $datban=$data['datban'];
        $data['tcsk'] = $this->session->userdata('tcsk');
        $tcsk=$data['tcsk'];
		if (!$this->session->userdata('login')){
            
    		$this->form_validation->set_rules('taikhoan', 'taikhoan', 'required');
            $this->form_validation->set_rules('matkhau', 'matkhau', 'required');
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->form_validation->set_message('required', 'Enter %s');
            
            if ($this->form_validation->run() === FALSE)
            {   
                $data['slidetk'] =$this->Mtrangchu->listall_slidetk();
                $this->load->view('site/taikhoan/dangnhap',$data);
            }
            else
            {   
                $matkhau = md5($this->input->post('matkhau'));
                $data = array(
                   'taikhoan' => $this->input->post('taikhoan'),
                   'matkhau' => $matkhau,
                   // 'matkhau' => $this->input->post('matkhau'),
                );

                $check = $this->Mtrangchu->auth_check($data);
                
                if($check != false){
                    $user = array(
                        'taikhoan_id' => $check->idtaikhoan,
                        'hoten' => $check->hoten,
                        'taikhoan' => $check->taikhoan,
                        'matkhau' => $check->matkhau,
                        'sdt' => $check->sdt,
                        'email' => $check->email,
                        'tichluy' => $check->tichluy,
                        'trangthai' => $check->trangthai,
                    );
      
                $this->session->set_userdata('login',$user);

                if (empty($datban)&&empty($tcsk)){
                    redirect(base_url('trangchu/index'));
                }
                if (!empty($datban)) {
                    redirect(base_url('thucdon/datban'));
                }
                if (!empty($tcsk)) {
                    redirect(base_url('sukien/dktcsk'));
                }
                if (!empty($datban)&&!empty($tcsk)) {
                    redirect(base_url('thucdon/datban'));
                }
                }else{
                    $data['slidetk'] =$this->Mtrangchu->listall_slidetk();
                    $this->load->view('site/taikhoan/dangnhap',$data);

                ?>
                    <script type="text/javascript">
                        alert('Bạn nhập sai tài khoản hoặc mật khẩu.');
                    </script>
                <?php 
                
                }
            }
		}else {
            redirect(base_url('trangchu/index'));
        } 
        // echo "<pre>";
        // print_r($data);
        // echo "</pre>";
	}

	public function index(){

        $data['user'] = $this->session->userdata('login');
        $this->load->Model("Mtrangchu");
        $data['result'] =$this->Mtrangchu->listall();
        $data['slidett'] =$this->Mtrangchu->listall_slidett();
        $data['monan'] =$this->Mtrangchu->listall_tt();
        $this->load->view('site/trangchu/index',$data);   
         // echo"<pre>";
         // print_r($data);
         // echo"<pre>";  
    }

    public function quenmatkhau(){
        $this->load->Model("Mtrangchu");
        $data['slidetk'] =$this->Mtrangchu->listall_slidetk();
        $this->load->view('site/taikhoan/quenmk',$data); 
    }

    public function quenmatkhau_ok()
    {
        if (!$this->session->userdata('login')){
            $data['slidetk'] =$this->Mtrangchu->listall_slidetk();
            $this->form_validation->set_rules('taikhoan', 'taikhoan', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->form_validation->set_message('required', 'Enter %s');
            $matkhau = $this->input->post('matkhau');
            $taikhoan = $this->input->post('taikhoan');

            if ($this->form_validation->run() === FALSE)
            {
                $data['slidetk'] =$this->Mtrangchu->listall_slidetk();
                $this->load->view('site/taikhoan/dangnhap',$data);
            }
            else
            {   
                $data = array(
                   'taikhoan' => $this->input->post('taikhoan'),
                   'email' => $this->input->post('email'),
                );

                $check = $this->Mtrangchu->auth_check($data);
                
                if($check != false){
                    $mkmoi=Rand(100000,999999);
                    $taikhoan = $this->input->post('taikhoan');
                    $email = $this->input->post('email');
                    // load thư viên
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
                    $this->email->to($email,$taikhoan);
                    $this->email->from('hoangvu3600@gmail.com', 'FRENCH FOODS');
                    $this->email->subject('Cấp lại mật khẩu');
                    $this->email->message('Mật khẩu mới của bạn là '.$mkmoi.'. Hãy mau chóng truy cập www.frenchfooods.vn/taikhoan/doimatkhau/ để đổi mật khẩu mới. Xin cảm ơn!');
                    $this->email->attach('logo.png');
                    $this ->email->send();
                    $matkhaumoi=md5($mkmoi);
                    $this->Mtrangchu->insert_mkm($matkhaumoi,$taikhoan);
                    ?>
                    <script type="text/javascript">
                        alert('Yêu cầu thành công, mật khẩu tạm thời đã được gửi vào email của quý khách. Hãy mau chóng đổi mật khẩu mới.');
                        window.location="../trangchu/dangnhap";
                    </script>
                    <?php
                    

                }else{
                $data['slidetk'] =$this->Mtrangchu->listall_slidetk();
                $this->load->view('site/taikhoan/dangnhap',$data);
                ?>
                    <script type="text/javascript">
                        alert('Bạn nhập sai thông tin tài khoản.');
                    </script>
                <?php 
                }
            }
        }else {
            redirect(base_url('trangchu/index'));
        } 
    }


    function dangxuat()
    {
        $this->load->model('Mtrangchu');
    	if ($this->session->userdata('login')) {
            // $this->session->unset_userdata($array_items);
    		$this->session->sess_destroy();
		      redirect(base_url('trangchu/dangnhap'));
    	}  
    }

    
    
}

/* End of file Taikhoan.php */
/* Location: ./application/controllers/Taikhoan.php */