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
              <img src="<?php echo public_url()?>/site/image/slidetk/<?php echo $anh1['hinhanhtk'] ?>" class='w-100' height='600px' alt='Tổ chức sự kiện'>
            </div>
            <div class="carousel-item">
              <img src="<?php echo public_url()?>/site/image/slidetk/<?php echo $anh2['hinhanhtk'] ?>" class='w-100' height='600px' alt='Tổ chức sự kiện'>
            </div>
            <div class="carousel-item">
              <img src="<?php echo public_url()?>/site/image/slidetk/<?php echo $anh3['hinhanhtk'] ?>" class='w-100' height='600px' alt='Tổ chức sự kiện'>
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>


        <div class="col-md-6 inlogin" style="margin: 0px;float: right;height: 650px">
          <h1 class="textlogin">
            WELCOME TO<BR>FRENCH FOODS
          </h1>
          <form action="quenmatkhau_ok" method="post">
            <div class="textlogin1">
              <p>Nhập tài khoản</p>
              <input type="text" class="form-control inputlogin1" placeholder="" name="taikhoan" required>
            </div>
            <div class="textlogin1">
              <p>Nhập email</p>
              <input type="text" class="form-control inputlogin1" placeholder="" name="email" required>
            </div>
            <br>
            <div>
              <center>
                <?php if (empty($noidung)){ ?>
                <p></p>
               <?php }else{ ?>
                <p style="color: red;font-size: 20px"><?php echo $noidung?></p>
               <?php } ?>
                
                <button type="submit" class="btn btn-default"><b>Đồng ý</b></button>
                <div class="textlogin2">
                  <p>Quay lại<a href="<?php echo site_url('trangchu/dangnhap') ?>" style="text-decoration: none;" class="textlogin2"> đăng nhập</a></p>
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