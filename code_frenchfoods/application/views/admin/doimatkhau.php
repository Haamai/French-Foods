<?php $this->load->view('admin/header')?>
<div id="page-wrapper">     
    <div class="container-fluid" style="margin-top: 30px">
        <h1 class="textlogin">
            Chỉnh sửa mật khẩu
        </h1>
        <form action="doimatkhau" method="post">
            <div class="" style="margin:20px;">
              <p><b>Tên đăng nhập</b></p>
              <input type="text" class="form-control inputlogin1" name="taikhoan" required >
            </div>
            <div class="" style="margin:20px;">
              <p><b>Mật khẩu cũ</b></p>
              <input type="text" class="form-control inputlogin1" name="matkhau" required>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Mật khẩu mới</b></p>
              <input type="text" class="form-control inputlogin1" name="matkhaumoi" required>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Nhập lại mật khẩu mới</b></p>
              <input type="text" class="form-control inputlogin1" name="nhaplai" required>
            </div>
            <div class="" style="margin:20px;">
              <button type="submit" class="btn btn-success"><b>Lưu thay đổi</b></button>
            </div>
        </form>
    </div>
</div>
<?php $this->load->view('admin/footer')?>
