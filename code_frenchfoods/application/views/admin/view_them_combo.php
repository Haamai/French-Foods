<?php $this->load->view('admin/header')?>
<div id="page-wrapper">   
  <div class="container-fluid" style="margin-top: 30px">
    <h1 class="textlogin">
            Thêm combo mới
        </h1>
        <form action="them_combo_ok" method="post" enctype="multipart/form-data">
            <div class="" style="margin:20px;">
              <p><b>Tên combo</b></p>
              <input type="text" class="form-control inputlogin1"  name="tencombo" required>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Mô tả</b></p>
              <input type="text" class="form-control inputlogin1"  name="mota" required>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Giá</b></p>
              <input type="text" class="form-control inputlogin1"  name="gia" required>
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
