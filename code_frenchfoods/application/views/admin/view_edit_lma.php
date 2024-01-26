<?php $this->load->view('admin/header')?>
<div id="page-wrapper">		
	<div class="container-fluid" style="margin-top: 30px">
		<h1 class="textlogin">
            Chỉnh sửa loại món ăn
        </h1>
        <form action="<?php echo site_url('admin/edit_lma_ok').'/'.$ttlma["idloaimonan"];?>" method="post">
          	<div class="" style="margin:20px;">
              <p><b>ID loại món ăn</b></p>
              <input type="text" class="form-control inputlogin1" value="<?php echo $ttlma['idloaimonan']?>" name="" required readonly >
            </div>
            <div class="" style="margin:20px;">
              <p><b>Tên loại món ăn</b></p>
              <input type="text" class="form-control inputlogin1" value="<?php echo $ttlma['tenloaimonan']?>" name="tenloaimonan" required>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Mô tả</b></p>
              <input type="text" class="form-control inputlogin1" value="<?php echo $ttlma['mota']?>" name="mota" required>
            </div>
            <div class="" style="margin:20px;">
              <button type="submit" class="btn btn-success"><b>Lưu thay đổi</b></button>
            </div>
        </form>
    </div>
</div>
<?php $this->load->view('admin/footer')?>
