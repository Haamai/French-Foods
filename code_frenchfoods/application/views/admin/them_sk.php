<?php $this->load->view('admin/header')?>
<div id="page-wrapper">		
	<div class="container-fluid" style="margin-top: 30px">
		<h1 class="textlogin">
            Thêm sự kiện mới
        </h1>
        <form action="them_sk_ok" method="post" enctype="multipart/form-data">
          	<div class="" style="margin:20px;">
              <p><b>Tiêu đề</b></p>
              <input type="text" class="form-control inputlogin1"  name="tieude" required>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Nội dung</b></p>
              <input type="text" class="form-control inputlogin1"  name="noidung" required>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Ngày bắt đầu</b></p>
              <input type="date" class="form-control inputlogin1"  name="tgbatdau" required>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Ngày kết thúc</b></p>
              <input type="date" class="form-control inputlogin1"  name="tgketthuc" required>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Hình ảnh</b></p>
              <input type="file" class="form-control inputlogin1"  name="picture" required>
            </div>
            <div class="" style="margin:20px;">
              <button type="submit" class="btn btn-success"><b>Thêm</b></button>
            </div>
        </form>
    </div>
</div>
<?php $this->load->view('admin/footer')?>
