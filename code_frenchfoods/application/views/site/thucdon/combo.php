
<!DOCTYPE html>
<html lang="en">
<body>

         <?php $this->load->view('site/header')?>
      <div>
          
        <div class="content">
<div class="container">
          <div class=" thucdon" style="width: 100%">
            <div style="width: 25%;text-align: center;float: left"><a href="<?php echo site_url('thucdon/monan') ?>" >Đồ ăn</a></div>
            <div style="width: 25%;text-align: center;float: left"><a href="<?php echo site_url('thucdon/douong') ?>">Đồ uống</a></div>
            <div style="width: 25%;text-align: center;float: left"><a style="color:#f1ad01;" href="<?php echo site_url('thucdon/combo') ?>">Combo món</a></div>
            <div style="width: 25%;text-align: center;float: left"><a href="<?php echo site_url('thucdon/datban') ?>">Đặt bàn</a></div>
          </div>
          <div class="clear"></div>
          <div>
              
            <div class="" style="margin: 0px;">
                 <?php 
                 foreach ($list as $sp){
                  ?>
                    <div class="chitietmon" style="margin-bottom: 10px;">
                      <img style="float: left;margin-right: 10px" src="<?php echo public_url()?>/site/image/combo/<?php echo $sp['hinhanh'] ?> " width="35%" height="25%">
                      <div style="">
                          <div class="chucttd"><b><?php echo $sp['tencombo'] ?></b></div>
                          <div><?php echo $sp['mota'] ?></div><br>
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