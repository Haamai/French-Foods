
<!DOCTYPE html>
<html>

<body>
<?php $this->load->view('site/header')?>
<style type="text/css">
        .preview { width: calc(100% - 340px); }
        .wizard-settings { top: 0; min-height: 100%; }
        .wizard-settings .inner { margin-top: 60px; }
        .wizard-settings .footer { position: absolute; bottom: 0; left: 0; }
        .wizard-settings .settings-controls {
            position: fixed;
            top: 0; right: 0;
            width: 340px;
            padding: 10px 0 0;
            text-align: center;
            background-color: inherit;
        }
    
    
</style>
<div>
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

    <?php
      $anh1=$slidett[0];
      $anh2=$slidett[1];
      $anh3=$slidett[2];
    ?>
    <div class="carousel-item active">
      <img src="<?php echo public_url()?>/site/image/slidett/<?php echo $anh1['hinhanhtt'] ?>" class='w-100' height='400px' alt='Tổ chức sự kiện'>
    </div>
    <div class="carousel-item">
      <img src="<?php echo public_url()?>/site/image/slidett/<?php echo $anh2['hinhanhtt'] ?>" class='w-100' height='400px' alt='Tổ chức sự kiện'>
    </div>
    <div class="carousel-item">
      <img src="<?php echo public_url()?>/site/image/slidett/<?php echo $anh3['hinhanhtt'] ?>" class='w-100' height='400px' alt='Tổ chức sự kiện'>
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
    <div style="padding-top: 30px">
      
      <div >
        <div class="MagicScroll">
            <?php 
                foreach ($monan as $mn){
              ?>
              <a href="<?php echo site_url('thucdon/monan') ?>"><img src="<?php echo public_url()?>/site/image/monan/<?php echo $mn["hinhanh"] ?>" style="width: 200px; height: 150px;padding-left: 10px" ></a>
            <?php } ?>
        </div>
      </div>

    </div>

    <div style="margin: 30px;"><center><a href="<?php echo site_url('thucdon/monan') ?>" class="xemthem">XEM THÊM</a></center></div>
    <div class="preview col">
</div>
    </div>
    <?php $this->load->view('site/footer');?>
    </body>
    <script>
    function toOptionValue(v) {
        if ( /^(true|false)$/.test(v) ) {
            return 'true' === v;
        }
        if ( /^[0-9]{1,}$/i.test(v) ) {
            return parseInt(v,10);
        }
        return v;
    }
</script>
</body>
</html>