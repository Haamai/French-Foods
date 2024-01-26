<!DOCTYPE html>
<html lang="en">
<body>
      <?php $this->load->view('site/header')?>
      <div>   
  <div class="content">
      <div class="container login" style="">
        <h2 class="">
          <center>Thay đổi mật khẩu</center>
        </h2>
        <div class="col-md-6 inlogin" style="margin: auto">
          <form action="<?php echo site_url('taikhoan/doimatkhau');?>" method="post">
            <div class="textlogin1">
              <p>Tên đăng nhập</p>
              <input type="text" class="form-control inputlogin1" placeholder="" value="<?php echo $tttk['taikhoan']?>" name="taikhoan" required>
            </div>
            <div class="textlogin1">
              <p>Mật khẩu cũ</p>
              <input type="password" class="form-control inputlogin1" placeholder="" name="matkhau" required>
              <span class="error" style="color: red"><?php echo form_error('matkhau'); ?></span>
            </div>
            <div class="textlogin1">
              <p>Mật khẩu mới</p>
              <input type="password" class="form-control inputlogin1" placeholder="" name="matkhau1" required>
            </div>
            <div class="textlogin1">
              <p>Nhập lại mật khẩu mới</p>
              <input type="password" class="form-control inputlogin1" placeholder="" name="matkhau2" required>
              <span class="error" style="color: red"><?php echo form_error('matkhau2'); ?></span>
            </div>
            <br>
            <div>
              <center>
                <?php if (empty($noidung)){ ?>
                <p></p>
               <?php }else{ ?>
                <p style="color: red;font-size: 20px"><?php echo $noidung?></p>
               <?php } ?>
                
                <button type="submit" class="btn btn-default"><b>Lưu thay đổi</b></button> 
              </center>
            </div>
          </form>
         </div>
      </div>


<div class="clear"></div>
</div>
    <?php $this->load->view('site/footer');?>
<!-- Load jquery trước khi load bootstrap js -->
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">

</script>
</body>

</html>