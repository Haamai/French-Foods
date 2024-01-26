


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="<?php echo public_url()?>/site/css/magicscroll.css" rel="stylesheet" type="text/css" media="screen"/>
  <link rel="stylesheet" href="<?php echo public_url()?>/site/css/bootstrap/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="<?php echo public_url()?>/site/css/style.css" type="text/css">
</head> 


<center><a href="<?php echo site_url('trangchu/index') ?>"><img src="<?php echo public_url()?>/site/image/logo.png" width='200px' class='img'></a></center>
<nav class="navbar navbar-expand-lg navbar-dark">
  <div class="container">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('trangchu/index') ?>"><p>TRANG CHỦ</p></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" id="navbarDropdown"><p>THỰC ĐƠN</p></a>
        <div class="dropdown-content">
          <a class="dritem" href="<?php echo site_url('thucdon/monan') ?>">Đồ ăn</a>
          <a class="dritem" href="<?php echo site_url('thucdon/douong') ?>">Đồ uống</a>
          <a class="dritem" href="<?php echo site_url('thucdon/combo') ?>">Combo món</a>
          <a class="dritem" href="<?php echo site_url('thucdon/datban') ?>">Đặt bàn</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link" id="navbarDropdown"><p>SỰ KIỆN</p></a>
        <div class="dropdown-content">
          <a class="dritem" href="<?php echo site_url('sukien/khuyenmai') ?>">Khuyến mãi</a>
          <a class="dritem" href="<?php echo site_url('sukien/skthang') ?>">Sự kiện tháng</a>
          <a class="dritem" href="<?php echo site_url('sukien/tuyendung') ?>">Tuyển dụng</a>
          <a class="dritem" href="<?php echo site_url('sukien/dktcsk') ?>">Đăng ký tổ chức sự kiện</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('blog/nhanxet') ?>"><p>BLOG</p></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('lienhe/dclienhe') ?>"><p>LIÊN HỆ</p></a>
      </li>
      <?php 
        if (!empty($user)) { ?>
          <li class="nav-item dropdown">
              <a class="nav-link" id="navbarDropdown"><p>TÀI KHOẢN</p></a>
              <div class="dropdown-content">
                <a class="dritem" href="<?php echo site_url('lienhe/ttcn') ?>">Tài khoản cá nhân</a>
                <a class="dritem" href="<?php echo site_url('lienhe/ttdatban') ?>">Thông tin đặt bàn</a>
                <a class="dritem" href="<?php echo site_url('lienhe/tttcsukien') ?>">Thông tin tổ chức sự kiện</a>
              </div>
      </li>
      <?php }
      ?>
      
    </ul>
    <div class="navbar-nav">

<?php 


if (empty($user)) { ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('trangchu/dangnhap') ?>"><p>ĐĂNG NHẬP</p></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('trangchu/dangky') ?>"><p>ĐĂNG KÝ</p></a>
          </li>
<?php } else {?>
          <li class="nav-item">
            <li class="nav-item dropdown">
              <a class="nav-link" href="<?php echo site_url('lienhe/ttcn') ?>"><p>CHÀO <?php echo $user['taikhoan']; ?></p></a>
            </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('trangchu/dangxuat') ?>"><p>ĐĂNG XUẤT</p></a>
          </li>
<?php } ?>
    </div>
  </div>
</div>
</nav>
		       
	