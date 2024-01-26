<?php $this->load->view('admin/header')?>
<div id="page-wrapper">		
	<div class="container-fluid" style="margin-top: 30px">
		<h1 class="textlogin">
            Chỉnh sửa tài khoản
        </h1>
        <form action="<?php echo site_url('admin/edit_tk_qtv_ok');?>" method="post">
          	<div class="" style="margin:20px;">
              <p><b>Tên đăng nhập</b></p>
              <input type="text" class="form-control inputlogin1" value="<?php echo $tttk['taikhoan']?>" name="taikhoan" required readonly>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Họ tên</b></p>
              <input type="text" class="form-control inputlogin1" value="<?php echo $tttk['hoten']?>" name="hoten" required>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Email</b></p>
              <input type="text" class="form-control inputlogin1" value="<?php echo $tttk['email']?>" name="email" required>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Số điện thoại</b></p>
              <input type="text" class="form-control inputlogin1" value="<?php echo $tttk['sdt']?>" name="sdt" required>
            </div>
            <div class="" style="margin:20px;">
              <button type="submit" class="btn btn-success"><b>Lưu thay đổi</b></button>
            </div>
        </form>
    </div>
</div>
<?php $this->load->view('admin/footer')?>
