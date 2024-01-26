<!DOCTYPE html>
<html lang="en">
<body>
      <?php $this->load->view('site/header')?>
      <div>   
  <div class="content" style="background-image: url('<?php echo public_url()?>/site/image/cs1_pts.jpg')">
      <div class="container" style="">
        <div class="col-md-12" style="padding-top: 10px">
          <h2 class="">
                <center>Thông tin cá nhân</center>
              </h2>
          <form action="<?php echo site_url('taikhoan/edit_ttcn_ok');?>" method="post">
            <div class="" style="float: left;width: 48%">
                <div class="textlogin1">
                  <p>Tên đăng nhập</p>
                  <input type="text" value="<?php echo $tttk['taikhoan']?>" class="form-control inputlogin1" placeholder="" name="taikhoan" required readonly>
                </div>
                <div class="textlogin1">
                  <p>Họ và tên</p>
                  <input type="text" value="<?php echo $tttk['hoten']?>" class="form-control inputlogin1" placeholder="" name="hoten" required>
                </div>
                <div class="textlogin1">
                  <p>Số điện thoại</p>
                  <input type="text" value="<?php echo $tttk['sdt']?>" class="form-control inputlogin1" placeholder="" name="sdt" required>
                </div>
                <div class="textlogin1">
                  <p>Email</p>
                  <input type="text" value="<?php echo $tttk['email']?>" class="form-control inputlogin1" placeholder="" name="email">
                </div>
                <div class="clear"></div>
                <div style="margin-top: 20px;margin-bottom: 20px">
                  <center>                
                    <button type="submit" class="btn btn-default"><b>Lưu thay đổi</b></button> 
                  </center>
                </div>
            </div>
            <div class="" style="float: right;width: 48%">
              <div class="textlogin1">
                  <p>Lưu ý:</p>
                  <span>- Hãy chắc chắn mọi thông tin thay đổi của quý khách là chính xác.</span><br>
                  <span>- Nên cập nhật đầy đủ số điện thoại và email để nhận thông tin khuyến mại từ <b>FRENCHFOODS</b> sớm nhất.</span><br>
                  <span>- Email rất quan trọng trong trường hợp quên mật khẩu, đề nghị nên dùng email thật.</span>
              </div>
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