<?php $this->load->view('admin/header')?>
<div id="page-wrapper">		
	<div class="container-fluid" style="margin-top: 30px">
		<h1 class="textlogin">
            Thêm bai viết mới
        </h1>
        <form action="them_baiviet_ok" method="post" enctype="multipart/form-data">
          	<div class="" style="margin:20px;">
              <p><b>Chủ đề</b></p>
              <input type="text" class="form-control inputlogin1"  name="chude" required>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Nội dung</b></p>
              <input type="text" class="form-control inputlogin1"  name="noidung" required>
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
