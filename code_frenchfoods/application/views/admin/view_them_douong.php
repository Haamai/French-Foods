<?php $this->load->view('admin/header')?>
<div id="page-wrapper">   
  <div class="container-fluid" style="margin-top: 30px">
    <h1 class="textlogin">
            Thêm đồ uống mới
        </h1>
        <form action="them_douong_ok" method="post" enctype="multipart/form-data">
            <div class="" style="margin:20px;">
              <p><b>Tên đồ uống</b></p>
              <input type="text" class="form-control inputlogin1"  name="tendouong" required>
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
              <p><b>Loại</b></p>
              <!-- <input type="text" class="form-control inputlogin1"  name="idloaimonan" required> -->
              <SELECT class="form-control inputlogin1" name="idloaidouong">
                  <?php 
                  foreach ($loaidouong as $lma) {
                  ?>
                    <option value="<?php echo $lma["idloaidouong"]?>"><?php echo $lma["tenloaidouong"]?></option>
                  <?php   
                  }
                  ?>
              </SELECT>
            </div>
            <div class="" style="margin:20px;">
              <button type="submit" class="btn btn-success"><b>Thêm</b></button>
            </div>
        </form>
    </div>
</div>
<?php $this->load->view('admin/footer')?>
