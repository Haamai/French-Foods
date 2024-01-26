<?php $this->load->view('admin/header')?>
<div id="page-wrapper">		
	<div class="container-fluid" style="margin-top: 30px">
		<h1 class="textlogin">
            Chỉnh sửa loại đồ uống
        </h1>
        <form action="<?php echo site_url('admin/edit_ldo_ok').'/'.$ttldo["idloaidouong"];?>" method="post">
          	<div class="" style="margin:20px;">
              <p><b>ID loại đồ uống</b></p>
              <input type="text" class="form-control inputlogin1" value="<?php echo $ttldo['idloaidouong']?>" name="" required readonly >
            </div>
            <div class="" style="margin:20px;">
              <p><b>Tên loại đồ uống</b></p>
              <input type="text" class="form-control inputlogin1" value="<?php echo $ttldo['tenloaidouong']?>" name="tenloaidouong" required>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Mô tả</b></p>
              <input type="text" class="form-control inputlogin1" value="<?php echo $ttldo['mota']?>" name="mota" required>
            </div>
            <div class="" style="margin:20px;">
              <button type="submit" class="btn btn-success"><b>Lưu thay đổi</b></button>
            </div>
        </form>
    </div>
</div>
<?php $this->load->view('admin/footer')?>
