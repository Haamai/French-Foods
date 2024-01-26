 
<!DOCTYPE html>
<html lang="en">
<body>
<?php $this->load->view('site/header');
$trangthai=$user['trangthai'];
?>
<div>
  <div class="clear"></div>

  <div class="row" style="height: 600px;background-image: url('<?php echo public_url()?>/site/image/nenlogin.png')" >
    <div class="col-md-6 dktcsk" style="padding:30px;margin: 0px">
      <center><h3><b>ĐĂNG KÝ TỔ CHỨC SỰ KIỆN</b></h3><span style="color: red">
              <?php if ($trangthai==1) {
                echo "Tài khoản của bạn tạm thời bị khóa nên không thể sử dụng chức năng này.";
              } ?></span></center><br>
      <form action="dktcsk" method="post">
        <div class="form-group">
          <label for="">Ngày tổ chức:</label><br>
          <input type="date" value="<?php echo$tcsk['ngaytochuc'] ?>" name="ngaytochuc" class="frmtime" required <?php if ($trangthai==1) {
                    echo "readonly";
                  } ?>>
        </div>
        <div class="form-group">
          <label for="">Giờ tổ chức:</label><br>
          <input type="time" name="giotochuc" value="<?php echo$tcsk['giotochuc'] ?>" class="frmtime"required <?php if ($trangthai==1) {
                    echo "readonly";
                  } ?>>
        </div>
        <div class="form-group">
          <label for="">Số người tham dự:</label>
          <input type="number" value="<?php echo$tcsk['songuoi'] ?>" class="form-control inputtd" name="songuoi" required <?php if ($trangthai==1) {
                    echo "readonly";
                  } ?>>
        </div>
        <div class="form-group">
          <label for="">Yêu cầu chi tiết:</label><br>
          <textarea class="txtyc" name="yeucau" <?php if ($trangthai==1) {
                    echo "readonly";
                  } ?>><?php echo$tcsk['yeucau'] ?></textarea>
                  <span class="error" style="color: red"><?php echo form_error('yeucau'); ?></span>
        </div>
        <center><button type="submit" class="btn btn-default"><b>Xác nhận</b></button></center>
      </form>
    </div>

    <div class="col-md-6 bvff" style="padding:30px;margin: 0px">
      <center><h3><b>FRENCH FOODS</b></h3></center><br>
      <span class="texttd">French Foods đã có giải pháp cho những vị khách muốn đặt bàn tại nhà hàng, chỉ cần điền đầy đủ thông tin và xác nhận, chúng tôi chắc chắn sẽ phục vụ theo yêu cầu của quý khách. Ngoài ra, French Foods còn có dịch vụ tổ chức sự kiện theo yêu cầu, tiện lợi, nhanh gọn, phục vụ chuyên nghiệp, hiệu quả, giá cả phải chăng. French Foods luôn làm hài lòng những vị khách của nhà hàng kể cả những vị khách khó tính nhất. <br>French Foods đã có giải pháp cho những vị khách muốn đặt bàn tại nhà hàng, chỉ cần điền đầy đủ thông tin và xác nhận, chúng tôi chắc chắn sẽ phục vụ theo yêu cầu của quý khách. Ngoài ra, French Foods còn có dịch vụ tổ chức sự kiện theo yêu cầu, tiện lợi, nhanh gọn, phục vụ chuyên nghiệp, hiệu quả, giá cả phải chăng. French Foods luôn làm hài lòng những vị khách của nhà hàng kể cả những vị khách khó tính nhất.. 
      </span>
    </div>
  </div>


<div class="clear"></div>
   </div>
    <?php $this->load->view('site/footer');?>
    </body>
    <script type="text/javascript"></script>
</body>
</html>