<?php $this->load->view('admin/header')?>
<div id="page-wrapper">		
	<div class="container-fluid" style="margin-top: 30px">
		    <h1 class="textlogin">
            Thêm người kiểm duyệt mới
        </h1>
        <form action="them_qtv" method="post">
          	<div class="" style="margin:20px;">
              <p><b>Họ tên</b></p>
              <input type="text" class="form-control inputlogin1"  name="hoten" required>
              <span class="error" style="color: red"><?php echo form_error('hoten');?></span>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Tài khoản</b></p>
              <input type="text" class="form-control inputlogin1"  name="taikhoan" required>
              <span class="error" style="color: red"><?php echo form_error('taikhoan');?></span>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Mật khẩu</b></p>
              <input type="password" class="form-control inputlogin1"  name="matkhau" required>
              <span class="error" style="color: red"><?php echo form_error('matkhau');?></span>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Nhập lại mật khẩu</b></p>
              <input type="password" class="form-control inputlogin1"  name="nhaplai" required>
              <span class="error" style="color: red"><?php echo form_error('nhaplai');?></span>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Email</b></p>
              <input type="email" class="form-control inputlogin1"  name="email" required>
              <span class="error" style="color: red"><?php echo form_error('email');?></span>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Số điện thoại</b></p>
              <input type="tel" class="form-control inputlogin1"  name="sdt" required>
              <span class="error" style="color: red"><?php echo form_error('sdt'); ?></span>
            </div>
            <div class="" style="margin:20px;">
              <button type="submit" class="btn btn-success"><b>Thêm</b></button>
            </div>
        </form>
    </div>
</div>
<?php $this->load->view('admin/footer')?>
