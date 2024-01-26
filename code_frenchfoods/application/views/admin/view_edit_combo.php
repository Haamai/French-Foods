<?php $this->load->view('admin/header')?>
<div id="page-wrapper">   
  <div class="container-fluid" style="margin-top: 30px">
    <h1 class="textlogin">
            Chỉnh sửa combo
        </h1>
        <form action="<?php echo site_url('admin/edit_combo_ok').'/'.$ttcombo["idcombo"];?>" method="post">
            <div class="" style="margin:20px;">
              <p><b>ID combo</b></p>
              <input type="text" class="form-control inputlogin1" value="<?php echo $ttcombo['idcombo']?>" name="" required readonly >
            </div>
            <div class="" style="margin:20px;">
              <p><b>Tên combo</b></p>
              <input type="text" class="form-control inputlogin1" value="<?php echo $ttcombo['tencombo']?>" name="tencombo" required>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Mô tả</b></p>
              <!-- <input type="text" class="form-control inputlogin1" value="<?php echo $ttcombo['mota']?>" name="mota" required> -->
              <textarea class="form-control inputlogin1"  name="mota" required><?php echo $ttcombo['mota']?></textarea>
            </div>
            <div class="" style="margin:20px;">
              <p><b>Giá</b></p>
              <input type="text" class="form-control inputlogin1" value="<?php echo $ttcombo['gia']?>" name="gia" required>
            </div>
            <div class="" style="margin:20px;">
              <button type="submit" class="btn btn-success"><b>Lưu thay đổi</b></button>
            </div>
        </form>
    </div>
</div>
<?php $this->load->view('admin/footer')?>
