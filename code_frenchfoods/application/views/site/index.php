<p class="text-center" style="padding-top: 15px;">Xin chào 
<span style="color: red"><?php echo $this->session->userdata('taikhoan');?></span></p>

<!DOCTYPE html>
<html>

<body>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?php echo public_url()?>/site/image/img01.jpg" class='w-100' height='400px' alt='Tổ chức sự kiện'>
    </div>
    <div class="carousel-item">
      <img src="<?php echo public_url()?>/site/image/img01.jpg" class='w-100' height='400px' alt='Tổ chức sự kiện'>
    </div>
    <div class="carousel-item">
      <img src="<?php echo public_url()?>/site/image/img01.jpg" class='w-100' height='400px' alt='Tổ chức sự kiện'>
    </div>
  </div>
  <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="sr-only">Next</span>
  </a>
</div>
    <div class="container">
        <?php 
          $ds=array("danhsach"=>$result[0]);
          foreach ($result as $value){
        ?>
          <div class="col">
            <img src="<?php echo public_url()?>/site/image/baiviet/<?php echo $value["hinhanh"] ?>" class="anhtt">
            <div class="vbtt">
                <h1 style="font-family:monospace"><b><?php echo $value["chude"] ?></b></h1>
                <span style="font-family: cursive;font-size: 15px;text-align: justify;">
                <?php echo $value["noidung"] ?>
            <div class="clear"></div>
            </div>
          </div>

        <?php } ?>
    </div>
<div style="margin: 30px;"><center><a href="<?php echo site_url('thucdon/monan') ?>" class="xemthem">XEM THÊM</a></center></div>