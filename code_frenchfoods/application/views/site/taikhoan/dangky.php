<!DOCTYPE html>
<html lang="en">
<body>
      <?php $this->load->view('site/header')?>
      <div>   
  <div class="content">
      <div class="container login" style="">


        <div id="myCarousel" class="carousel slide col-md-6" data-ride="carousel" style="margin: 0px;float: left">
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">

            <?php
              $anh1=$slidetk[0];
              $anh2=$slidetk[1];
              $anh3=$slidetk[2];
            ?>
            <div class="carousel-item active">
              <img src="<?php echo public_url()?>/site/image/slidetk/<?php echo $anh1['hinhanhtk'] ?>" class='w-100' height='630px' alt='Tổ chức sự kiện'>
            </div>
            <div class="carousel-item">
              <img src="<?php echo public_url()?>/site/image/slidetk/<?php echo $anh2['hinhanhtk'] ?>" class='w-100' height='630px' alt='Tổ chức sự kiện'>
            </div>
            <div class="carousel-item">
              <img src="<?php echo public_url()?>/site/image/slidetk/<?php echo $anh3['hinhanhtk'] ?>" class='w-100' height='630px' alt='Tổ chức sự kiện'>
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>


        <div class="col-md-6 inlogin" style="margin: 0px;float: right;padding-bottom: 20px;height: 650px">
          <h1 class="textlogin">
            WELCOME TO<BR>FRENCH FOODS
          </h1>
          <form action="dangky" method="post">
            <div class="textdangky1">
              <p>Họ và tên</p>
              <div>
                <input type="text" class="form-control" placeholder="" value="<?php echo$dksai['hoten'] ?>" name="hoten" required>
                <span class="error" style="color: red"><?php echo form_error('hoten'); ?></span>
              </div>
            </div>
            <div class="textdangky1">
              <p>Tên đăng nhập</p>
              <input type="text" class="form-control" value="<?php echo$dksai['taikhoan'] ?>" placeholder="" name="taikhoan" required>
              <span class="error" style="color: red"><?php echo form_error('taikhoan'); ?></span>
            </div>
            <div class="textdangky1">
              <p>Mật khẩu</p>
              <input type="password" class="form-control" placeholder="" name="matkhau" required>
              <span class="error" style="color: red"><?php echo form_error('matkhau'); ?></span>
            </div>
            <div class="textdangky1">
              <p>Nhập lại mật khẩu</p>
              <input type="password" class="form-control" placeholder="" name="nhaplai" required>
              <span class="error" style="color: red"><?php echo form_error('nhaplai'); ?></span>
            </div>
              <div style="padding-bottom: 10px;">
                <div class="textdangky1" style="width: 48%;float: left">
                    <p style="margin-bottom: 0px">Email</p>
                    <input type="email" class="form-control" value="<?php echo$dksai['email'] ?>" placeholder="" name="email">
                    <span class="error" style="color: red"><?php echo form_error('email'); ?></span>
                </div>
                <div class="textdangky1" style="width: 48%;float:right;">
                    <p style="margin-bottom: 0px">Số điện thoại</p>
                    <input type="tel" class="form-control" placeholder="" value="<?php echo$dksai['sdt'] ?>" name="sdt" required>
                    <span class="error" style="color: red"><?php echo form_error('sdt'); ?></span>          
                </div>
                <div class="clear"></div>
              </div>
            <br>
            <div>
              <center>
                <button type="submit" class="btn btn-default"><b>Đăng ký</b></button>
                <div class="textlogin2">
                  <p>Đã có tài khoản?<a href="<?php echo site_url('trangchu/dangnhap') ?>" style="text-decoration: none;" class="textlogin2"> Đăng nhập ngay!</a></p>
                </div>  
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