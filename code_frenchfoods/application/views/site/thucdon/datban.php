<?php if (session_status() == PHP_SESSION_NONE)
    session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<body>
<?php 
$this->load->view('site/header');
$trangthai=$user['trangthai'];
?>
<div>

<div class="container">
          <div class=" thucdon" style="width: 100%">
            <div style="width: 25%;text-align: center;float: left"><a href="<?php echo site_url('thucdon/monan') ?>">Đồ ăn</a></div>
            <div style="width: 25%;text-align: center;float: left"><a href="<?php echo site_url('thucdon/douong') ?>">Đồ uống</a></div>
            <div style="width: 25%;text-align: center;float: left"><a href="<?php echo site_url('thucdon/combo') ?>">Combo món</a></div>
            <div style="width: 25%;text-align: center;float: left"><a style="color:#f1ad01;" href="<?php echo site_url('thucdon/datban') ?>">Đặt bàn</a></div>
          </div>
          <div class="clear"></div>
          <div>
            <div class="col-md-6" style="padding-left: 30px;padding-right: 30px;margin: 0px;float: left;padding-bottom: 20px;">
              <center><h3><b>FRENCH FOODS</b></h3></center><br>
              <p class="" style="text-align: justify-all;">French Foods đã có giải pháp cho những vị khách muốn đặt bàn tại nhà hàng, chỉ cần điền đầy đủ thông tin và xác nhận, chúng tôi chắc chắn sẽ phục vụ theo yêu cầu của quý khách. Ngoài ra, French Foods còn có dịch vụ tổ chức sự kiện theo yêu cầu, tiện lợi, nhanh gọn, phục vụ chuyên nghiệp, hiệu quả, giá cả phải chăng. French Foods luôn làm hài lòng những vị khách của nhà hàng kể cả những vị khách khó tính nhất. <br>French Foods đã có giải pháp cho những vị khách muốn đặt bàn tại nhà hàng, chỉ cần điền đầy đủ thông tin và xác nhận, chúng tôi chắc chắn sẽ phục vụ theo yêu cầu của quý khách. Ngoài ra, French Foods còn có dịch vụ tổ chức sự kiện theo yêu cầu, tiện lợi, nhanh gọn, phục vụ chuyên nghiệp, hiệu quả, giá cả phải chăng. French Foods luôn làm hài lòng những vị khách của nhà hàng kể cả những vị khách khó tính nhất.. 
              </p>
            </div>
            <div class="col-md-6" style="padding-right: 30px;padding-left: 30px;margin: 0px;float: right;padding-bottom: 20px">
              <center><h3><b>ĐĂNG KÝ ĐẶT BÀN</b></h3><span style="color: red">
              <?php if ($trangthai==1) {
                echo "Tài khoản của bạn tạm thời bị khóa nên không thể sử dụng chức năng này.";
              } ?></span>
              </center><br>
              <form action="datban" method="POST" >
                <div class="form-group">
                  <label for="">Ngày tham dự:</label><br>
                  <input type="date" name="ngaydb" value="<?php echo$datban['ngaydb'] ?>" class="frmtime" required <?php if ($trangthai==1) {
                    echo "readonly";
                  } ?>>
                </div>
                <div class="form-group">
                  <label for="">Giờ tham dự:</label><br>
                  <input type="time" name="giodb" value="<?php echo$datban['giodb'] ?>" class="frmtime" required <?php if ($trangthai==1) {
                    echo "readonly";
                  } ?>>
                </div>
                <div class="form-group">
                  <label for="">Số người tham dự:</label>
                  <input type="number" value="<?php echo$datban['songuoi'] ?>" class="form-control inputtd" name="songuoi" required <?php if ($trangthai==1) {
                    echo "readonly";
                  } ?>>
                </div>
                <div class="form-group">
                  <label for="">Yêu cầu chi tiết:</label><br>
                  <textarea class="txtyc"  name="ghichu" placeholder="vd: Cần rượu vang đỏ thượng hạng"<?php if ($trangthai==1) {
                    echo "readonly";
                  } ?>><?php echo$datban['ghichu'] ?></textarea>
                  <span class="error" style="color: red"><?php echo form_error('ghichu'); ?></span>
                </div>
                <center><button type="submit" class="btn btn-default"><b>Xác nhận</b></button></center>
              </form>
            </div>
          </div> 
      </div>
<div class="clear"></div>
</div>
<?php $this->load->view('site/footer');?>
</body>
</html>