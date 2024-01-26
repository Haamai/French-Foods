<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Taikhoan extends CI_Controller {

	public function __construct()
        {
        parent::__construct();
        	$this->load->model('Mtaikhoan');
            $this->load->library(array('form_validation','session'));
            $this->load->helper(array('url','html','form'));
            

        }

	public function edit_ttcn(){
        $data['user'] = $this->session->userdata('login');
		if (empty($data['user'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../trangchu/dangnhap";
            </script>
            <?php
		}else{
		$idtaikhoan = intval($this->uri->rsegment(3));
		$data['tttk']=$this->Mtaikhoan->getOne($idtaikhoan);
		$this->load->view('site/taikhoan/edit_ttcn',$data);
		}
    }

    public function edit_ttcn_ok(){
		$data['user'] = $this->session->userdata('login');
		if (empty($data['user'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../trangchu/dangnhap";
            </script>
            <?php
		}else{
			$tam=$data['user'];
			$taikhoan=$this->input->post("taikhoan");
			$hoten=$this->input->post("hoten");
			$email=$this->input->post("email");
			$sdt=$this->input->post("sdt");
			$this->Mtaikhoan->update_tk($taikhoan,$hoten,$email,$sdt);
			$user = array(
                'taikhoan_id' => $tam['taikhoan_id'],
                'hoten' => $hoten,
                'taikhoan' => $taikhoan,
                'matkhau' => $check->matkhau,
                'sdt' => $sdt,
                'email' => $email,
                'tichluy' => $tam['tichluy'],
                'trangthai' => $tam['trangthai'],
            );
            $this->session->set_userdata('login',$user);
			header('location:'.site_url('lienhe/ttcn').'');
		}
	}

	function check_matkhau()
    {
        $matkhau = md5($this->input->post('matkhau'));
        $data = array(
            'taikhoan' => $this->input->post('taikhoan'),
            'matkhau' => $matkhau,
        );

        if($this->Mtaikhoan->auth_check($data))
        {
            //trả về thông báo lỗi
            $this->form_validation->set_message(__FUNCTION__, 'Mật khẩu cũ không đúng');
            return false;
        }
        return true;
    }


    function check_nhaplai()
    {
        $matkhau1 = $this->input->post('matkhau1');
        $matkhau2 = $this->input->post('matkhau2');

        if($matkhau1==$matkhau2)
        {
            return true;
        }
        $this->form_validation->set_message(__FUNCTION__, 'Mật khẩu nhập lại không đúng');
        return false;
    }

	public function doimatkhau(){
        $data['user'] = $this->session->userdata('login');
		if (empty($data['user'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../trangchu/dangnhap";
            </script>
            <?php
		}else{
		$idtaikhoan = intval($this->uri->rsegment(3));
		$data['tttk']=$this->Mtaikhoan->getOne($idtaikhoan);


		if (empty($data['user'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../trangchu/dangnhap";
            </script>
            <?php
		}else{
			$this->form_validation->set_rules('taikhoan', 'taikhoan', 'required');
            $this->form_validation->set_rules('matkhau', 'matkhau', 'required');
            $this->form_validation->set_rules('matkhau1', 'matkhau1', 'required');
            $this->form_validation->set_rules('matkhau2', 'matkhau2', 'required|callback_check_nhaplai');
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->form_validation->set_message('required', 'Enter %s');

            if ($this->form_validation->run() === FALSE)
            {
            	$user=$data['user'];
            	$this->load->view('site/taikhoan/doimatkhau',$data);
                // redirect(base_url('taikhoan/doimatkhau/'));
            }
            else
            {   
            	$matkhau = md5($this->input->post('matkhau'));
                $data = array(
                   'taikhoan' => $this->input->post('taikhoan'),
                   'matkhau' => $matkhau,
                   // 'matkhau' => $this->input->post('matkhau'),
                );
            	$check = $this->Mtaikhoan->auth_check($data);
            	if($check != false){
	                $taikhoan=$this->input->post("taikhoan");
	                $matkhau=md5($this->input->post("matkhau1"));
	                $this->Mtaikhoan->insert_user($matkhau,$taikhoan);
                	$this->session->sess_destroy();
		      		?>
                    <script type="text/javascript">
		                alert('Bạn đã đổi mật khẩu thành công, hãy đăng nhập lại.');
		                window.location="../trangchu/dangnhap";
		            </script>
                	<?php 
                }else{
                ?>
                    <script type="text/javascript">
		                alert('Bạn nhập sai tài khoản hoặc mật khẩu cũ.');
		                window.location="../taikhoan/doimatkhau";
		            </script>
                <?php 
                
                }

            }
      		
		}

		$this->load->view('site/taikhoan/doimatkhau',$data);
		}
    }

   
}

/* End of file Taikhoan.php */
/* Location: ./application/controllers/Taikhoan.php */