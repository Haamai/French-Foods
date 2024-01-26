<?php $this->load->view('admin/header')?>
<div id="page-wrapper">		
	<div class="container-fluid" style="margin-top: 30px">
		<h1 class="textlogin">
            Thêm loại đồ uống
        </h1>
        <form action="them_ldo_ok" method="post" enctype="multipart/form-data">
          	<div class="" style="margin:20px;">
              <p><b>Tên loại đồ uống</b></p>
              <input type="text" class="form-control inputlogin1"  name="tenloaidouong" required>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Mô tả</b></p>
              <input type="text" class="form-control inputlogin1"  name="mota" required>
            </div>
            
            <div class="" style="margin:20px;">
              <button type="submit" class="btn btn-success"><b>Thêm</b></button>
            </div>
        </form>
    </div>
</div>
<?php $this->load->view('admin/footer')?>
