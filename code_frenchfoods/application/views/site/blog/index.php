<?php if (session_status() == PHP_SESSION_NONE)
    session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<body>
<?php $this->load->view('site/header')?>
<div>

<div class="nxet container" style="margin-top: 20px;">
  <div class="col-md-6 col-xs-12 guinx" style="margin: 0px;float: left;margin-bottom: 20px">
    <!-- <div class="frmnxet1"></div> -->
    <div class="frmnxet ">
      <h2><center>Nhận xét của bạn</center></h2>
      <form action="<?php echo site_url('blog/nhanxet');?>" method="post">
        <div class="form-group">
          <label for=""><b>Họ và tên:</b></label>
          <input type="text" class="form-control" id="" placeholder="" name="hoten" required>
        </div>
        <div class="form-group">
          <label for=""><b>Email:</b></label>
          <input type="email" class="form-control" id="" placeholder="" name="email" required>
        </div>
        <div class="form-group">
          <label for="d"><b>Số điện thoại:</b></label>
          <input type="text" class="form-control" id="" placeholder="" name="sdt" required>
          <span class="error" style="color: red"><?php echo form_error('sdt'); ?></span>
        </div>
         <div class="form-group">
          <label for=""><b>Nhận xét:</b></label>
          <textarea class="form-control" id="" placeholder="" name="ndnhanxet" style="height: 100px;"></textarea>
          <span class="error" style="color: red"><?php echo form_error('ndnhanxet'); ?></span>
        </div>
        <center><button type="submit" class="btn btn-default"><b>Gửi</b></button></center>
      </form> 
    </div>  
  </div>
  <div style="">
    <h2><center>Nhận xét của khách hàng</center></h2>
    <div class="col-md-6 col-xs-12" style="margin: 0px;float: right;height: 450px;overflow: auto;border: solid 1px;padding: 15px;background-image: url('<?php echo public_url()?>/site/image/nenlogin.png');font-size: 20px;">
        <?php foreach ($nhanxet as $nx){ 
          if ($nx["trangthai"]=='0') {
          ?>
            <span><b><?php echo $nx["ngnhanxet"] ?>:</b></span><br>
            <p style="font-style: italic;"><?php echo $nx["ndnhanxet"] ?></p>
        <?php } }?>

    </div>  
  </div>
</div>


<div class="clear"></div>
</div>
<?php $this->load->view('site/footer');?>
</body>
<script type="text/javascript"></script>
</body>
</html>