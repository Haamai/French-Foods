 
<!DOCTYPE html>
<html lang="en">
<body>

<?php $this->load->view('site/header');
$trangthai=$user['trangthai'];?>
<div>
 <div class="container" style="margin-bottom: 20px;margin-top: 20px;"> 

    <div class="" style="margin: 0px;float: left;padding-bottom: 20px">
      <div id="myCarousel" class="carousel slide col-md-12" data-ride="carousel" style="margin: 0px;float: left">
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
              <img src="<?php echo public_url()?>/site/image/slidetk/<?php echo $anh1['hinhanhtk'] ?>" class='w-100' height='730px'  alt='Tổ chức sự kiện'>
            </div>
            <div class="carousel-item">
              <img src="<?php echo public_url()?>/site/image/slidetk/<?php echo $anh2['hinhanhtk'] ?>" class='w-100' height='730px' alt='Tổ chức sự kiện'>
            </div>
            <div class="carousel-item">
              <img src="<?php echo public_url()?>/site/image/slidetk/<?php echo $anh3['hinhanhtk'] ?>" class='w-100' height='730px' alt='Tổ chức sự kiện'>
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
    <div class="kmtd" style="margin: 0px;float: right;">
      <div class="km" >
        <div><a href="<?php echo site_url('sukien/khuyenmai') ?>" class="txt1 col-md-4" style="font-size: 20px;float: left"><b>Khuyến mãi</b></a></div>
        <div><a href="<?php echo site_url('sukien/skthang') ?>" class="txt1 col-md-4" style="font-size: 20px;float: left"><b>Sự kiện tháng</b></a></div>
        <div><a href="<?php echo site_url('sukien/tuyendung') ?>" class="txt1 col-md-4" style="color: #f1d101;font-size: 20px"><b>Tuyển dụng</b></a></div>
      </div>

      <div class="">
        <!-- <center><h3><b>ĐƠN XIN ỨNG TUYỂN</b></h3></center> -->
      <form action="tuyendung_ok" method="post">
        <div class="form-group">
          <label for="">Họ và tên:</label>
          <input type="text" name="hoten" class="form-control inputtd" id="" required>
        </div>
        <div class="form-group">
          <label for="">Giới tính:</label><br>
          <select class="form-control inputtd" name="gioitinh" style="height: 40px">
            <option>Nam</option>
            <option>Nữ</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Ngày sinh:</label>
          <input type="date" name="ngaysinh" class="form-control inputtd" id="" required>
        </div>
        <div class="form-group">
          <label for="">Địa chỉ:</label><br>
          <textarea class="txtdc" name="diachi" required></textarea>
        </div>
        <div class="form-group">
          <label for="">Vị trí ứng tuyển:</label><br>
          <select class="form-control inputtd" name="vitri" style="height: 40px">
            <option>Nhân viên phục vụ</option>
            <option>Nhân viên thu ngân</option>
            <option>Nhân viên bảo vệ</option>
          </select>
        </div>
        <div class="form-group">
          <label for="">Số điện thoại:</label>
          <input type="text" name="sdt" class="form-control inputtd" id="" required>
        </div>
        <div class="form-group">
          <label for="">Email:</label><br>
          <input type="text" name="email" class="form-control inputtd" id="" required>
        </div>
        <div class="txtck">Tôi xin cam kết những thông tin trên là đúng sự thật. Trong quá trình làm việc sẽ nghiêm túc hoàn thành công việc được giao, thực hiện đầy đủ quy định của nhà hàng.</div><br>
        <center><button type="submit" class="btn btn-default"><b>Đăng ký</b></button></center><br>
      </form>
      </div>
    </div>


  </div>


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
          <input type="date" name="ngaytochuc" class="frmtime" required <?php if ($trangthai==1) {
                    echo "readonly";
                  } ?>>
        </div>
        <div class="form-group">
          <label for="">Giờ tổ chức:</label><br>
          <input type="time" name="giotochuc" class="frmtime"required <?php if ($trangthai==1) {
                    echo "readonly";
                  } ?>>
        </div>
        <div class="form-group">
          <label for="">Số người tham dự:</label>
          <input type="number" class="form-control inputtd" name="songuoi" required <?php if ($trangthai==1) {
                    echo "readonly";
                  } ?>>
        </div>
        <div class="form-group">
          <label for="">Yêu cầu chi tiết:</label><br>
          <textarea class="txtyc" name="yeucau" <?php if ($trangthai==1) {
                    echo "readonly";
                  } ?>  ></textarea>
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