 <!DOCTYPE html>
<html lang="en">
<body>
<?php $this->load->view('site/header')?>
<div>
<div class="clear"></div>
<div class="container" style="margin-top: 20px;margin-bottom: 20px">
    <div class="textlh" style="margin: 0px;float: left;font-size: 16px">
      <span><b style="font-size: 20px">French Foods</b></span> đã có giải pháp cho những vị khách muốn đặt bàn tại nhà hàng, chỉ cần điền đầy đủ thông tin và xác nhận, chúng tôi chắc chắn sẽ phục vụ theo yêu cầu của quý khách. Ngoài ra, French Foods còn có dịch vụ tổ chức sự kiện theo yêu cầu, tiện lợi, nhanh gọn, phục vụ chuyên nghiệp, hiệu quả, giá cả phải chăng. French Foods luôn làm hài lòng những vị khách của nhà hàng kể cả những vị khách khó tính nhất. Khách hàng cũng có thể liên hệ trực tiếp với nhà hàng thông qua địa chỉ và hotine của hệ thống nhà hàng French Foods bên dưới đây. French Foods xin chân thành gửi lời cảm ơn tới khách hàng, những người luôn ủng hộ nhà hàng.
    </div>
</div>
<div class="clear"></div>
<!-- Carousel    -->

<div id="myCarousel" class="carousel slide container" data-ride="carousel" style="margin-top: 20px">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo public_url()?>/site/image/cs1.jpg ?>" class='w-100' height='400px' alt='Tổ chức sự kiện'>
    </div>
    <div class="carousel-item">
      <img src="<?php echo public_url()?>/site/image/cs2.jpg ?>" class='w-100' height='400px' alt='Tổ chức sự kiện'>
    </div>
    <div class="carousel-item">
      <img src="<?php echo public_url()?>/site/image/cs3.jpg ?>" class='w-100' height='400px' alt='Tổ chức sự kiện'>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="sr-only">Next</span>
  </a>
</div>

<!-- Địa chỉ -->
<div class="container diachi" style="margin-top: 20px"> 
    <div class="col-md-5 textdc" style="margin:0px;float: left">
      <span><h3>Địa chỉ liên hệ</h3></span><br>
      <span>Cơ sở 1: Tầng 2, Số 1 Hoàng Đạo Thúy, Thanh Xuân, Hà Nội</span><br>
      <span>Email: maithuychichi@gmail.com</span><br>
      <span>Hotline: 0397516396</span><br><br>
      <span>Cơ sở 2: Tầng 1, Nhà A2, Trường Đại học Sân khấu - Điện ảnh Hà Nội, Mai Dịch, Cầu Giấy, Hà Nội</span><br>
      <span>Email: hoangvu3600@gmail.com</span><br>
      <span>Hotline: 0328068094</span><br><br>
      <span>Cơ sở 3: Tầng 7, TTTM Vân Hồ, Số 51 Lê Đại Hành, Hà Nội</span><br>
      <span>Email: ngocluongbeer@gmail.com</span><br>
      <span>Hotline: 0972650460</span><br><br>
    </div>
    <div class="col-md-7" id="map" style="margin:0px;float:right">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6667553336383!2d105.80224451424485!3d21.00599129393262!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xeea32ea14ac4f313!2sITPlus%20Academy!5e0!3m2!1svi!2s!4v1567964739099!5m2!1svi!2s" width="100%" height="350px"  class="bando" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</div>
  <div class="clear"></div>

   </div>
    <?php $this->load->view('site/footer');?>
    </body>
    <script type="text/javascript"></script>
</body>
</html>