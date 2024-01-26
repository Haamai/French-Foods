
<!DOCTYPE html>
<html lang="en">

<body>
<!--   cái trên này cho vào header đc này -->
         <?php $this->load->view('site/header')?>
      <div>
          
        <div class="content">
<div class="container">
          <div class=" thucdon" style="width: 100%">
            <div style="width: 25%;text-align: center;float: left"><a href="<?php echo site_url('thucdon/monan') ?>" style="color:#f1ad01;">Đồ ăn</a></div>
            <div style="width: 25%;text-align: center;float: left"><a href="<?php echo site_url('thucdon/douong') ?>">Đồ uống</a></div>
            <div style="width: 25%;text-align: center;float: left"><a href="<?php echo site_url('thucdon/combo') ?>">Combo món</a></div>
            <div style="width: 25%;text-align: center;float: left"><a href="<?php echo site_url('thucdon/datban') ?>">Đặt bàn</a></div>
          </div>
          <div class="clear"></div>
          <div>
            <div class="col-md-3" style="margin: 0px;float: left">
              <?php foreach ($loaimonan as $lsp){
              ?>
              <a href="<?php echo base_url('thucdon/monan/'.$lsp["idloaimonan"])?>" style="width: 100%;padding: 5px" class="list-group-item"><?php echo $lsp["tenloaimonan"] ?></a>
                <?php } ?>
            </div>
            <div class="col-md-9" style="margin: 0px;float: right;">
                 <?php 
                  $idloaisp = intval($this->uri->rsegment(3));
                 foreach ($list as $sp){
                  ?>

                    <div class="chitietmon" style="margin-bottom: 20px;">
                      <img style="float: left;margin-right: 10px" src="<?php echo public_url()?>/site/image/monan/<?php echo $sp['hinhanh'] ?> " width="280px" height="200px">
                      <div style="">
                          <div class="chucttd" style="font-size: 25px"><b><?php echo $sp['tenmonan'] ?></b></div>
                          <div><?php echo $sp['mota'] ?></div>
                          <div class="chucttd"><b>Giá: <?php echo $sp['gia'] ?> VND</b></div>
                      </div>
                      <div class="clear"></div>
                    </div>
                  <?php } ?>
                    
                      

            </div>
          </div> 
      </div>
       </div>
         
        <div class="clear"></div>
    </div>
    <?php $this->load->view('site/footer');?>
    </body>
    <script type="text/javascript"></script>
</body>
</html>