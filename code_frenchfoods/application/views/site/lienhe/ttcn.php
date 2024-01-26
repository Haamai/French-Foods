 <!DOCTYPE html>
<html lang="en">
<body>

<?php $this->load->view('site/header')?>
<div>
<div class="clear"></div>
<div class="ttcn" style="height: 700px;background-image: url('<?php echo public_url()?>/site/image/cs1.jpg');padding-top: 50px">
    <div class="rowttcn"></div>
    <div class="ttcnbox container" style="width: 70%;background-color: #D8D8D8;height: 600px;">
      <div>
        <center><img style="border-radius: 50%;width: 100px;margin-top: 10px" src="<?php echo public_url()?>/site/image/rank_<?php 
                  if ($user['tichluy']<=100) {
                    echo "dong";
                  }
                  if ($user['tichluy']>100 && $user['tichluy']<1000) {
                    echo "bac";
                  }
                  if ($user['tichluy']>=1000) {
                    echo "vang";
                  }
                ?>.jpg ?>"></center>
      </div>
      <div style="">
          <div class="col-md-6 col-xs-12" style="float: left;margin-top: 30px">
                <div class="txt1ttcn" style="padding-bottom: 20px">
                <b style="font-size: 30px">Thông tin tài khoản</b><a href="<?php echo site_url('taikhoan/edit_ttcn').'/'.$user["taikhoan_id"] ?>" style="font-style: italic;font-size: 12px;">(Chỉnh sửa)</a>
                </div>
                <div class="txt1ttcn"><b>Tên tài khoản: </b><?php echo $user['taikhoan']; ?></div>
                <div class="txt1ttcn"><b>Họ và tên: </b> <?php echo $user['hoten']; ?></div>
                <div class="txt1ttcn"><b>Số điện thoại: </b> <?php echo $user['sdt']; ?></div>
                <div class="txt1ttcn"><b>Email: </b> <?php echo $user['email']; ?></div>
                <div class="txt1ttcn"><b>Loại tài khoản: </b>
                    <?php 
                      if ($user['tichluy']<=100) {
                        echo "Đồng";
                      }
                      if ($user['tichluy']>100 && $user['tichluy']<1000) {
                        echo "Bạc";
                      }
                      if ($user['tichluy']>=1000) {
                        echo "Vàng";
                      }
                    ?>
                </div>
                <div class="txt1ttcn"><b>Thay đổi mật khẩu: </b><a href="<?php echo site_url('taikhoan/doimatkhau').'/'.$user["taikhoan_id"] ?>" style="font-style: italic;font-size: 12px;">(Tại đây)</a></div>
          </div>


          <div class="col-md-6 col-xs-12" style="float: right;margin-top: 30px">
            <div class="txtttcn" style="padding-bottom: 20px"><b style="font-size: 30px">Ưu đãi, giảm giá</b></div>
            <div class="txt1ttcn"><b>Tích điểm:</b> <?php echo $user['tichluy']; ?> điểm</div>
            <div class="txt1ttcn"><b>Ưu đãi dành riêng:</b> <?php 
                  if ($user['tichluy']<=100) {
                    echo "Giảm 10% trên tổng hóa đơn khi đặt bàn trên website của nhà hàng <span style='font-style: italic;font-size: 12px;'>(Tốn 100 điểm tích lũy)</span>";
                  }
                  if ($user['tichluy']>100 && $user['tichluy']<1000) {
                    echo "Giảm 20% trên tổng hóa đơn khi đặt bàn trên website của nhà hàng<span style='font-style: italic;font-size: 12px;'>(Tốn 500 điểm tích lũy)</span>";
                  }
                  if ($user['tichluy']>=1000) {
                    echo "Giảm 30% trên tổng hóa đơn khi đặt bàn trên website của nhà hàng<span style='font-style: italic;font-size: 12px;'>(Tốn 1000 điểm tích lũy)</span>";
                  }
                ?></div>
            <div class="txt1ttcn"><b>Lưu ý:</b> <br>- Các ưu đãi không cộng dồn với sự kiện<br>- Tích điểm được tính theo hóa đơn của khách hàng khi thanh toán tại nhà hàng<br>- Mỗi lần quý khách sử dụng mã giảm giá điểm tích lũy sẽ bị trừ số điểm tương ứng<br>- Ưu đãi dành riêng sử dụng khi thanh toán tại nhà hàng</div>
          </div>
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