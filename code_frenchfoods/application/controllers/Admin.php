<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->Model("Madmin");
		$this->load->helper(array('url','html','form'));
        $this->load->library(array('form_validation','session'));
	}


	// đăng nhập
	public function index(){
		$data['admin'] = $this->session->userdata('admin');
		$taikhoan = $this->input->post('taikhoan');
		if (empty($data['admin'])){

    		$this->form_validation->set_rules('taikhoan', 'taikhoan', 'required');
            $this->form_validation->set_rules('matkhau', 'matkhau', 'required');
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->form_validation->set_message('required', 'Enter %s');
            
            if ($this->form_validation->run() === FALSE)
            {  
                $this->load->view('admin/login');
            }
            else
            {   
                $matkhau = md5($this->input->post('matkhau'));
                $data = array(
                   'taikhoan' => $this->input->post('taikhoan'),
                   'matkhau' => $matkhau,
                   // 'matkhau' => $this->input->post('matkhau'),
                );

                $check = $this->Madmin->auth_check($data);
                
                if($check != false){
                    $admin = array(
                        'hoten' => $check->hoten,
                        'taikhoan' => $check->taikhoan,
                        'matkhau' => $check->matkhau,
                        'sdt' => $check->sdt,
                        'email' => $check->email,
                        'quyen' => $check->quyen,
                    );
                $kt=$this->Madmin->kt_qtv($taikhoan);
      			if ($kt['trangthai']==1) {
      				?>
					<script type="text/javascript">
		                alert('Tài khoản đang bị khóa.');
		                window.location="../admin";
		            </script>
		            <?php
      			} else{
      				$this->session->set_userdata('admin',$admin);
                	redirect(base_url('admin/taikhoan'));
      			}
                
                

                }else{
                // $this->load->view('admin/login',$data);
                redirect(base_url('admin'));
                ?>
                    <script type="text/javascript">
                        alert('Bạn nhập sai tài khoản hoặc mật khẩu.');
                    </script>
                <?php 
                
                }
            }
		}else {
            redirect(base_url('admin/taikhoan'));
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


    function check_nhaplai_mk()
    {
        $matkhaumoi = $this->input->post('matkhaumoi');
        $nhaplai = $this->input->post('nhaplai');

        if($matkhaumoi==$nhaplai)
        {
            return true;
        }
        $this->form_validation->set_message(__FUNCTION__, 'Mật khẩu nhập lại không đúng');
        return false;
    }
    public function doimatkhau(){
        $data['admin'] = $this->session->userdata('admin');
		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{

		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{
			$this->form_validation->set_rules('taikhoan', 'taikhoan', 'required');
            $this->form_validation->set_rules('matkhau', 'matkhau', 'required');
            $this->form_validation->set_rules('matkhaumoi', 'matkhaumoi', 'required');
            $this->form_validation->set_rules('nhaplai', 'nhaplai', 'required|callback_check_nhaplai_mk');
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->form_validation->set_message('required', 'Enter %s');

            if ($this->form_validation->run() === FALSE)
            {
            	$admin=$data['admin'];
            	$this->load->view('admin/doimatkhau',$data);
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
            	$check = $this->Madmin->auth_check($data);
            	if($check != false){
	                $taikhoan=$this->input->post("taikhoan");
	                $matkhau=md5($this->input->post("matkhaumoi"));
	                $this->Madmin->doimatkhau($matkhau,$taikhoan);
                	$this->session->unset_userdata('admin');
		      		?>
                    <script type="text/javascript">
		                alert('Bạn đã đổi mật khẩu thành công, hãy đăng nhập lại.');
		                window.location="../admin";
		            </script>
                	<?php 
                }else{
                ?>
                    <script type="text/javascript">
		                alert('Bạn nhập sai tài khoản hoặc mật khẩu cũ.');
		                window.location="../admin/doimatkhau";
		            </script>
                <?php 
                
                }

            }
      		
		}

		$this->load->view('admin/doimatkhau',$data);
		}
    }


    public function quenmatkhau()
    {
        if (!$this->session->userdata('login')){
            $this->form_validation->set_rules('taikhoan', 'taikhoan', 'required');
            $this->form_validation->set_rules('email', 'email', 'required');
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->form_validation->set_message('required', 'Enter %s');
            $matkhau = $this->input->post('matkhau');
            $taikhoan = $this->input->post('taikhoan');

            if ($this->form_validation->run() === FALSE)
            {
                $this->load->view('admin/quenmatkhau');
            }
            else
            {   
                $data = array(
                   'taikhoan' => $this->input->post('taikhoan'),
                   'email' => $this->input->post('email'),
                );

                $check = $this->Madmin->auth_check($data);
                
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
                    $this->Madmin->insert_mkm($matkhaumoi,$taikhoan);
                    ?>
                    <script type="text/javascript">
                        alert('Yêu cầu thành công. Hãy mau chóng đổi mật khẩu mới.');
                        window.location="../admin";
                    </script>
                    <?php
                    

                }else{
                $data['slidetk'] =$this->Madmin->listall_slidetk();
                $this->load->view('admin',$data);
                ?>
                    <script type="text/javascript">
                        alert('Bạn nhập sai thông tin tài khoản.');
                    </script>
                <?php 
                }
            }
        }else {
            redirect(base_url('admin'));
        } 
    }

	// tài khoản
	public function qtv(){
		$data['admin'] = $this->session->userdata('admin');

		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{

		$data['taikhoan']=$this->Madmin->listall_tk_qtv();
		$this->load->view('admin/qtv',$data);
		}
	}
	public function view_edit_tk_qtv(){
		$data['admin'] = $this->session->userdata('admin');
		$admin=$data['admin'];
		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{
			if ($admin['quyen']==1) {
				$idadmin = intval($this->uri->rsegment(3));
				$data['tttk']=$this->Madmin->getOne_qtv($idadmin);
				$this->load->view("admin/edit_qtv",$data);
			} else{
				?>
				<script type="text/javascript">
	                alert('Bạn không thể thực hiện chức năng này.');
	                window.location="../qtv";
	            </script>
	            <?php
			}
			
		}
		// print_r($data);
		// echo "<pre>";
		// print_r($admin);
		// echo "</pre>";
	}
	public function edit_tk_qtv_ok(){
		$data['admin'] = $this->session->userdata('admin');
		$admin=$data['admin'];
		if ($admin['quyen']==1) {
			$taikhoan=$this->input->post("taikhoan");
			$hoten=$this->input->post("hoten");
			$email=$this->input->post("email");
			$sdt=$this->input->post("sdt");
			$this->Madmin->update_tk_qtv($taikhoan,$hoten,$email,$sdt);
			header('location:'.site_url('admin/qtv').'');
		} else {
			?>
			<script type="text/javascript">
	            alert('Bạn không thể thực hiện chức năng này.');
	                window.location="../qtv";
	        </script>
	        <?php
		}
		
	}
	public function khoa_tk_qtv_ok(){
		$data['admin'] = $this->session->userdata('admin');
		$admin=$data['admin'];
		if ($admin['quyen']==1) {
			$data['admin'] = $this->session->userdata('admin');
			$idadmin = intval($this->uri->rsegment(3));
			$this->Madmin->khoa_tk_qtv($idadmin);
			header('location:'.site_url('admin/qtv').'');
		}else {
			?>
			<script type="text/javascript">
	            alert('Bạn không thể thực hiện chức năng này.');
	                window.location="../qtv";
	        </script>
	        <?php
		}
	}
	public function mo_tk_qtv_ok(){
		$data['admin'] = $this->session->userdata('admin');
		$admin=$data['admin'];
		if ($admin['quyen']==1) {
			$data['admin'] = $this->session->userdata('admin');
			$idadmin = intval($this->uri->rsegment(3));
			$this->Madmin->mo_tk_qtv($idadmin);
			header('location:'.site_url('admin/qtv').'');
		}else {
			?>
			<script type="text/javascript">
	            alert('Bạn không thể thực hiện chức năng này.');
	                window.location="../qtv";
	        </script>
	        <?php
		}
	}
	
	function check_email()
    {
        $email = $this->input->post('email');
        $where = array('email' => $email);
        //kiêm tra xem email đã tồn tại chưa
        if($this->Madmin->check_exists($where))
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

        if($this->Madmin->check_exists($where))
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

        if($this->Madmin->check_exists($where))
        {
            //trả về thông báo lỗi
            $this->form_validation->set_message(__FUNCTION__, 'Số điện thoại đã tồn tại');
            return false;
        }
        return true;
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
	public function them_qtv(){
		$data['admin'] = $this->session->userdata('admin');
		$admin=$data['admin'];
		if ($admin['quyen']==1) {

			$this->form_validation->set_rules('hoten', 'hoten', 'required');
            $this->form_validation->set_rules('taikhoan', 'taikhoan', 'required|callback_check_taikhoan');
            $this->form_validation->set_rules('matkhau', 'matkhau', 'required');
            $this->form_validation->set_rules('nhaplai', 'nhaplai', 'required|callback_check_nhaplai');
            $this->form_validation->set_rules('email', 'email', 'required|valid_email|callback_check_email');
            $this->form_validation->set_rules('sdt', 'sdt', 'required|callback_check_sdt');
            $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
            $this->form_validation->set_message('required', 'Enter %s');

			if ($this->form_validation->run() === FALSE)
            {  
                $this->load->view('admin/them_qtv',$data);
            }
            else
            {
            	$hoten=$this->input->post("hoten");
				$taikhoan=$this->input->post("taikhoan");
				$matkhau=md5($this->input->post('matkhau'));
				$email=$this->input->post("email");
				$sdt=$this->input->post("sdt");
				$this->Madmin->them_qtv($hoten,$taikhoan,$matkhau,$email,$sdt);
				header('location:'.site_url('admin/qtv').'');
			}
		}else {
			?>
			<script type="text/javascript">
	            alert('Bạn không thể thực hiện chức năng này.');
	                window.location="../admin/qtv";
	        </script>
	        <?php
		}
	}
	public function taikhoan(){
		$data['admin'] = $this->session->userdata('admin');

		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{

		$data['taikhoan']=$this->Madmin->listall_tk();
		$this->load->view('admin/taikhoan',$data);
		}

	}
	public function view_edit_tk(){
		$data['admin'] = $this->session->userdata('admin');
		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{

		$idtaikhoan = intval($this->uri->rsegment(3));
		$data['tttk']=$this->Madmin->getOne($idtaikhoan);
		$this->load->view("admin/edit_tk",$data);
		}
		// print_r($data);
	}
	public function edit_tk_ok(){
		$data['admin'] = $this->session->userdata('admin');
		
		$taikhoan=$this->input->post("taikhoan");
		$hoten=$this->input->post("hoten");
		$email=$this->input->post("email");
		$sdt=$this->input->post("sdt");
		$tichluy=$this->input->post("tichluy");
		$this->Madmin->update_tk($taikhoan,$hoten,$email,$sdt,$tichluy);
		header('location:'.site_url('admin/taikhoan').'');
	}
	public function khoa_tk_ok(){
		$data['admin'] = $this->session->userdata('admin');
			$idtaikhoan = intval($this->uri->rsegment(3));
			$this->Madmin->khoa_tk($idtaikhoan);
			header('location:'.site_url('admin/taikhoan').'');
	}
	public function mo_tk_ok(){
		$data['admin'] = $this->session->userdata('admin');
			$idtaikhoan = intval($this->uri->rsegment(3));
			$this->Madmin->mo_tk($idtaikhoan);
			header('location:'.site_url('admin/taikhoan').'');
	}
	public function congdiem(){
		$data['admin'] = $this->session->userdata('admin');
		$idtaikhoan = $this->input->post("idtaikhoan");
		$diemcong=$this->input->post("diem");
		$tttk=$this->Madmin->getOne($idtaikhoan);
		$tichluy=$tttk['tichluy'];
		$diem=$tichluy + $diemcong;
		$this->Madmin->congdiem($idtaikhoan,$diem);
		?>
			<script type="text/javascript">
                alert('Cộng thành công <?php echo $diemcong ?> điểm, số điểm hiện tại của tài khoản "<?php echo $tttk['taikhoan'] ?>" là <?php echo $diem ?>');
                window.location="../admin/taikhoan";
            </script>
        <?php
		// echo $diem;
		// echo $diemcong;
	}
	public function trudiem(){
		$data['admin'] = $this->session->userdata('admin');
		$idtaikhoan = $this->input->post("idtaikhoan");
		$diemtru=$this->input->post("diem");
		$tttk=$this->Madmin->getOne($idtaikhoan);
		$tichluy=$tttk['tichluy'];
		$diem=$tichluy-$diemtru;
		if ($diem<0) {
			?>
			<script type="text/javascript">
                alert('Điểm trừ không thể lớn hơn điểm tích lũy hiện có');
                window.location="../admin/taikhoan";
            </script>
            <?php
		}else{
			$this->Madmin->trudiem($idtaikhoan,$diem);
			?>
			<script type="text/javascript">
                alert('Trừ thành công <?php echo $diemtru ?> điểm, số điểm hiện tại của tài khoản "<?php echo $tttk['taikhoan'] ?>" là <?php echo $diem ?>');
                window.location="../admin/taikhoan";
            </script>
        <?php
		}
		
	}




	// loại món ăn
	public function loaimonan(){
		$data['admin'] = $this->session->userdata('admin');
		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{
		$data['loaimonan']=$this->Madmin->listall_loaimonan();
		
		$this->load->view('admin/loaimonan',$data);
		}
		// echo"<pre>";
		// print_r($data);
		// echo"</pre>";
	}
	public function view_edit_lma(){
		$data['admin'] = $this->session->userdata('admin');
		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{

		$idloaimonan = intval($this->uri->rsegment(3));
		$data['ttlma']=$this->Madmin->getOne_lma($idloaimonan);
		$this->load->view("admin/view_edit_lma",$data);
		}
		// print_r($data);
	}
	public function edit_lma_ok(){
		$data['admin'] = $this->session->userdata('admin');

		$idloaimonan = intval($this->uri->rsegment(3));
		$tenloaimonan=$this->input->post("tenloaimonan");
		$mota=$this->input->post("mota");
		$this->Madmin->update_lma($tenloaimonan,$mota,$idloaimonan);
		header('location:'.site_url('admin/loaimonan').'');
	}
	public function view_them_lma(){
		$data['admin'] = $this->session->userdata('admin');
		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{

		$this->load->view("admin/view_them_lma",$data);
		}
	}
	public function them_lma_ok(){
			$data['admin'] = $this->session->userdata('admin');

			$tenloaimonan=$this->input->post("tenloaimonan");
			$mota=$this->input->post("mota");
			$this->Madmin->them_lma($tenloaimonan,$mota);
			header('location:'.site_url('admin/loaimonan').'');
	}
	public function xoa_lma_ok(){

		$data['admin'] = $this->session->userdata('admin');
		$idloaimonan = intval($this->uri->rsegment(3));
		$this->Madmin->xoa_lma($idloaimonan);
		header('location:'.site_url('admin/loaimonan').'');
	}



// loại đồ uống
	public function loaidouong(){
		$data['admin'] = $this->session->userdata('admin');
		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{
		$data['loaidouong']=$this->Madmin->listall_loaidouong();
		
		$this->load->view('admin/loaidouong',$data);
		}
		// echo"<pre>";
		// print_r($data);
		// echo"</pre>";
	}
	public function view_edit_ldo(){
		$data['admin'] = $this->session->userdata('admin');
		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{

		$idloaidouong = intval($this->uri->rsegment(3));
		$data['ttldo']=$this->Madmin->getOne_ldo($idloaidouong);
		$this->load->view("admin/view_edit_ldo",$data);
		}
		// print_r($data);
	}
	public function edit_ldo_ok(){
		$data['admin'] = $this->session->userdata('admin');
		$idloaidouong = intval($this->uri->rsegment(3));
		$tenloaidouong=$this->input->post("tenloaidouong");
		$mota=$this->input->post("mota");
		$this->Madmin->update_ldo($tenloaidouong,$mota,$idloaidouong);
		header('location:'.site_url('admin/loaidouong').'');
	}
	public function view_them_ldo(){
		$data['admin'] = $this->session->userdata('admin');
		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{

		$this->load->view("admin/view_them_ldo",$data);
		}
	}
	public function them_ldo_ok(){
			$data['admin'] = $this->session->userdata('admin');

			$tenloaidouong=$this->input->post("tenloaidouong");
			$mota=$this->input->post("mota");
			$this->Madmin->them_ldo($tenloaidouong,$mota);
			header('location:'.site_url('admin/loaidouong').'');
	}
	public function xoa_ldo_ok(){

		$data['admin'] = $this->session->userdata('admin');
		$idloaidouong = intval($this->uri->rsegment(3));
		$this->Madmin->xoa_ldo($idloaidouong);
		header('location:'.site_url('admin/loaidouong').'');
	}





 	// đồ ăn
	public function doan(){
		$data['admin'] = $this->session->userdata('admin');
		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{
		$data['doan']=$this->Madmin->listall_doan();
		$data['loaimonan']=$this->Madmin->listall_loaimonan();
		$this->load->view('admin/doan',$data);
		}
	}
	public function view_edit_doan(){
		$data['admin'] = $this->session->userdata('admin');
		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{

		$idmonan = intval($this->uri->rsegment(3));
		$data['ttdoan']=$this->Madmin->getOne_doan($idmonan);
		$this->load->view("admin/view_edit_doan",$data);
		}
		// print_r($data);
	}
	public function edit_doan_ok(){
		$data['admin'] = $this->session->userdata('admin');
		$idmonan = intval($this->uri->rsegment(3));
		$tenmonan=$this->input->post("tenmonan");
		$mota=$this->input->post("mota");
		$gia=$this->input->post("gia");
		$this->Madmin->update_doan($tenmonan,$mota,$gia,$idmonan);
		header('location:'.site_url('admin/doan').'');
	}
	public function view_them_doan(){
		$data['admin'] = $this->session->userdata('admin');
		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{
		$data['loaimonan']=$this->Madmin->listall_loaimonan();
		$this->load->view("admin/view_them_doan",$data);
		}
	}
	public function them_doan_ok(){
			$data['admin'] = $this->session->userdata('admin');

			$tenmonan=$this->input->post("tenmonan");
			$mota=$this->input->post("mota");
			$gia=$this->input->post("gia");

			$config['upload_path'] = './public/site/image/monan';
		    $config['allowed_types'] = 'jpg|jpeg|png|gif';
		    $config['file_name'] = $_FILES['picture']['name'];
		    $this->load->library('upload', $config);
		    $this->upload->initialize($config);
		    $this->upload->do_upload('picture');
		    $uploadData = $this->upload->data();
		    $data["image"] = $uploadData['file_name'];
		    $image=$data["image"];

			$idloaimonan=$this->input->post("idloaimonan");
			$this->Madmin->them_doan($tenmonan,$mota,$gia,$image,$idloaimonan);
			header('location:'.site_url('admin/doan').'');
	}
	public function xoa_doan_ok(){
		$data['admin'] = $this->session->userdata('admin');
		$idmonan = intval($this->uri->rsegment(3));
		$this->Madmin->xoa_doan($idmonan);
		header('location:'.site_url('admin/doan').'');
	}




	// ĐỒ UỐNG
	public function douong(){
		$data['admin'] = $this->session->userdata('admin');
		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{
		$data['douong']=$this->Madmin->listall_douong();
		$data['loaidouong']=$this->Madmin->listall_loaidouong();
		$this->load->view('admin/douong',$data);
		}
	}
	public function view_edit_douong(){
		$data['admin'] = $this->session->userdata('admin');
		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{

		$iddouong = intval($this->uri->rsegment(3));
		$data['ttdouong']=$this->Madmin->getOne_douong($iddouong);
		$this->load->view("admin/view_edit_douong",$data);
		}
		// print_r($data);
	}
	public function edit_douong_ok(){
		$data['admin'] = $this->session->userdata('admin');
		$iddouong = intval($this->uri->rsegment(3));
		$tendouong=$this->input->post("tendouong");
		$mota=$this->input->post("mota");
		$gia=$this->input->post("gia");
		$this->Madmin->update_douong($tendouong,$mota,$gia,$iddouong);
		header('location:'.site_url('admin/douong').'');
	}
	public function view_them_douong(){
		$data['admin'] = $this->session->userdata('admin');
		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{
		$data['loaidouong']=$this->Madmin->listall_loaidouong();
		$this->load->view("admin/view_them_douong",$data);
		}
	}
	public function them_douong_ok(){
			$data['admin'] = $this->session->userdata('admin');

			$tendouong=$this->input->post("tendouong");
			$mota=$this->input->post("mota");
			$gia=$this->input->post("gia");

			$config['upload_path'] = './public/site/image/douong';
		    $config['allowed_types'] = 'jpg|jpeg|png|gif';
		    $config['file_name'] = $_FILES['picture']['name'];
		    $this->load->library('upload', $config);
		    $this->upload->initialize($config);
		    $this->upload->do_upload('picture');
		    $uploadData = $this->upload->data();
		    $data["image"] = $uploadData['file_name'];
		    $image=$data["image"];

			$idloaidouong=$this->input->post("idloaidouong");
			$this->Madmin->them_douong($tendouong,$mota,$gia,$image,$idloaidouong);
			header('location:'.site_url('admin/douong').'');
	}
	public function xoa_douong_ok(){
		$data['admin'] = $this->session->userdata('admin');
		$iddouong = intval($this->uri->rsegment(3));
		$this->Madmin->xoa_douong($iddouong);
		header('location:'.site_url('admin/douong').'');
	}
	

	// SỰ KIỆN
	public function sukien(){
		$data['admin'] = $this->session->userdata('admin');
		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{
		$data['sukien']=$this->Madmin->listall_sk();
		$this->load->view('admin/sukien',$data);
		}
	}
	public function view_them_sk(){
		$data['admin'] = $this->session->userdata('admin');
		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{

		$this->load->view("admin/them_sk",$data);
		}
		// print_r($data);
	}
	public function them_sk_ok(){
			$data['admin'] = $this->session->userdata('admin');
			$admin=$data['admin'];
			$nguoivietkm=$admin['taikhoan'];
			$tieude=$this->input->post("tieude");
			$noidung=$this->input->post("noidung");
			$tgbatdau=$this->input->post("tgbatdau");
			$tgketthuc=$this->input->post("tgketthuc");

			
		    $config['upload_path'] = './public/site/image/khuyenmai';
		    $config['allowed_types'] = 'jpg|jpeg|png|gif';
		    $config['file_name'] = $_FILES['picture']['name'];

		    $this->load->library('upload', $config);
		    $this->upload->initialize($config);

		    $this->upload->do_upload('picture');
		    $uploadData = $this->upload->data();
		    $data["image"] = $uploadData['file_name'];
		    

		    $image=$data["image"];

			$this->Madmin->them_sk($nguoivietkm,$tieude,$noidung,$tgbatdau,$tgketthuc,$image);
			header('location:'.site_url('admin/sukien').'');
	}





	public function tuyendung(){
		$data['admin'] = $this->session->userdata('admin');
		$data['tuyendung']=$this->Madmin->listall_td();
		$this->load->view('admin/tuyendung',$data);

	}


	public function datban(){
		$data['admin'] = $this->session->userdata('admin');
		$data['datban']=$this->Madmin->listall_db();
		$this->load->view('admin/datban',$data);
	}
	public function xoa_datban_ok(){
		$data['admin'] = $this->session->userdata('admin');
		$iddatban = intval($this->uri->rsegment(3));
		$this->Madmin->xoa_datban($iddatban);
		header('location:'.site_url('admin/datban').'');
	}



	public function dktcsk(){
		$data['admin'] = $this->session->userdata('admin');
		$data['dktcsk']=$this->Madmin->listall_dktcsk();
		$this->load->view('admin/dktcsk',$data);
	}
	public function xoa_dktcsk_ok(){
		$data['admin'] = $this->session->userdata('admin');
		$iddktcsk = intval($this->uri->rsegment(3));
		$this->Madmin->xoa_dktcsk($iddktcsk);
		header('location:'.site_url('admin/dktcsk').'');
	}



	// nhận xét

	public function nhanxet(){
		$data['admin'] = $this->session->userdata('admin');

		$data['nhanxet']=$this->Madmin->listall_nhanxet();
		
		$this->load->view('admin/nhanxet',$data);

	}
	public function khoa_nx_ok(){
		$data['admin'] = $this->session->userdata('admin');
		$idnhanxet = intval($this->uri->rsegment(3));
		$this->Madmin->khoa_nx($idnhanxet);
		header('location:'.site_url('admin/nhanxet').'');
	}
	public function mo_nx_ok(){
		$data['admin'] = $this->session->userdata('admin');
		$idnhanxet = intval($this->uri->rsegment(3));
		$this->Madmin->mo_nx($idnhanxet);
		header('location:'.site_url('admin/nhanxet').'');
	}

	// COMBO
	public function combo(){
		$data['admin'] = $this->session->userdata('admin');
		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{
		$data['combo']=$this->Madmin->listall_combo();
		$this->load->view('admin/combo',$data);
		}
	}
	public function view_edit_combo(){
		$data['admin'] = $this->session->userdata('admin');
		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{

		$idcombo = intval($this->uri->rsegment(3));
		$data['ttcombo']=$this->Madmin->getOne_combo($idcombo);
		$this->load->view("admin/view_edit_combo",$data);
		}
		// print_r($data);
	}
	public function edit_combo_ok(){
		$data['admin'] = $this->session->userdata('admin');
		$idcombo = intval($this->uri->rsegment(3));
		$tencombo=$this->input->post("tencombo");
		$mota=$this->input->post("mota");
		$gia=$this->input->post("gia");
		$this->Madmin->update_combo($tencombo,$mota,$gia,$idcombo);
		header('location:'.site_url('admin/combo').'');
	}
	public function view_them_combo(){
		$data['admin'] = $this->session->userdata('admin');
		if (empty($data['admin'])){
			?>
			<script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
		}else{
		$this->load->view("admin/view_them_combo",$data);
		}
	}
	public function them_combo_ok(){
			$data['admin'] = $this->session->userdata('admin');
			$tencombo=$this->input->post("tencombo");
			$mota=$this->input->post("mota");
			$gia=$this->input->post("gia");

			$config['upload_path'] = './public/site/image/combo';
		    $config['allowed_types'] = 'jpg|jpeg|png|gif';
		    $config['file_name'] = $_FILES['picture']['name'];
		    $this->load->library('upload', $config);
		    $this->upload->initialize($config);
		    $this->upload->do_upload('picture');
		    $uploadData = $this->upload->data();
		    $data["image"] = $uploadData['file_name'];
		    $image=$data["image"];

			$this->Madmin->them_combo($tencombo,$mota,$gia,$image);
			header('location:'.site_url('admin/combo').'');
	}
	public function xoa_combo_ok(){
		$data['admin'] = $this->session->userdata('admin');
		$idcombo = intval($this->uri->rsegment(3));
		$this->Madmin->xoa_combo($idcombo);
		header('location:'.site_url('admin/combo').'');
	}


    public function baiviet(){
        $data['admin'] = $this->session->userdata('admin');
        if (empty($data['admin'])){
            ?>
            <script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
        }else{
        $data['sukien']=$this->Madmin->listall_bv();
        $this->load->view('admin/baiviet',$data);
        }
    }
    public function view_them_bv(){
        $data['admin'] = $this->session->userdata('admin');
        if (empty($data['admin'])){
            ?>
            <script type="text/javascript">
                alert('Bạn cần đăng nhập để thục hiện chức năng này.');
                window.location="../admin";
            </script>
            <?php
        }else{

        $this->load->view("admin/them_baiviet",$data);
        }
        // print_r($data);
    }
    public function them_baiviet_ok(){
            $this->load->helper('date');
            $data['admin'] = $this->session->userdata('admin');
            $admin=$data['admin'];
            $time = now();
            $time1='%Y-%m-%d';
            $thoigian=mdate($time1, $time);
            $nguoiviet=$admin['taikhoan'];
            $chude=$this->input->post("chude");
            $noidung=$this->input->post("noidung");
            // $thoigian=$this->input->post("thoigian");

            
            $config['upload_path'] = './public/site/image/baiviet';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $config['file_name'] = $_FILES['picture']['name'];

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $this->upload->do_upload('picture');
            $uploadData = $this->upload->data();
            $data["image"] = $uploadData['file_name'];
            

            $image=$data["image"];

            $this->Madmin->them_bv($nguoiviet,$chude,$noidung,$thoigian,$image);
            header('location:'.site_url('admin/baiviet').'');
            // echo"<pre>";
            // print_r($thoigian);
            // echo"</pre>";
    }

	function dangxuat()
    {
        $this->load->model('Madmin');
    	if ($this->session->userdata('admin')) {
    		$this->session->unset_userdata('admin');
		        redirect(base_url('admin'));
    	}  
    }
}