<!DOCTYPE html>
<html lang="en">
<body>

<?php $this->load->view('site/header')?>
<div>
<div class="clear"></div>
<div id="page-wrapper">		
	<div class="container-fluid" style="margin-top: 30px">
		<h1 class="textlogin">
            Chỉnh sửa thông tin đặt bàn
        </h1>
        <form action="<?php echo site_url('lienhe/edit_db_ok');?>" method="post">
            <input type="hidden" class="form-control inputlogin1" value="<?php echo $datban["iddatban"] ?>" name="iddatban" required readonly>
            <div class="" style="margin:20px;">
              <p><b>Ngày tham sự</b></p>
              <input type="date" class="form-control inputlogin1" value="<?php echo $datban["ngaydb"] ?>" name="ngaydb" required>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Giờ tham dự</b></p>
              <input type="time" class="form-control inputlogin1" value="<?php echo $datban["giodb"] ?>" name="giodb" required>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Số người</b></p>
              <input type="text" class="form-control inputlogin1" value="<?php echo $datban["songuoi"] ?>" name="songuoi" required>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Yêu cầu chi tiết</b></p>
              <textarea style="height: 100px;" class="form-control inputlogin1" name="ghichu"><?php echo $datban["ghichu"] ?></textarea>
            </div>
            <div class="" style="margin:20px;">
              <button type="submit" class="btn btn-success"><b>Lưu thay đổi</b></button>
            </div>
        </form>
    </div>
</div>
</div>
<?php $this->load->view('site/footer');?>
</body>
<script type="text/javascript"></script>
</body>
</html>
