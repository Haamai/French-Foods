<?php $this->load->view('admin/header')?>
<div id="page-wrapper">		
	<div class="container-fluid" style="margin-top: 30px">
		<h1 class="textlogin">
            Chỉnh sửa món ăn
        </h1>
        <form action="<?php echo site_url('admin/edit_doan_ok').'/'.$ttdoan["idmonan"];?>" method="post">
          	<div class="" style="margin:20px;">
              <p><b>ID món ăn</b></p>
              <input type="text" class="form-control inputlogin1" value="<?php echo $ttdoan['idmonan']?>" name="" required readonly >
            </div>
            <div class="" style="margin:20px;">
              <p><b>Tên loại món ăn</b></p>
              <input type="text" class="form-control inputlogin1" value="<?php echo $ttdoan['tenmonan']?>" name="tenmonan" required>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Mô tả</b></p>
              <!-- <input type="text" class="form-control inputlogin1" value="<?php echo $ttdoan['mota']?>" name="mota" required> -->
              <textarea class="form-control inputlogin1"  name="mota" required><?php echo $ttdoan['mota']?></textarea>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Giá</b></p>
              <input type="text" class="form-control inputlogin1" value="<?php echo $ttdoan['gia']?>" name="gia" required>
            </div>
            <div class="" style="margin:20px;">
              <button type="submit" class="btn btn-success"><b>Lưu thay đổi</b></button>
            </div>
        </form>
    </div>
</div>
<?php $this->load->view('admin/footer')?>
