<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link href="<?php echo public_url()?>/admin/css/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo public_url()?>/admin/css/css/metisMenu.min.css" rel="stylesheet">
        <link href="<?php echo public_url()?>/admin/css/css/dataTables/dataTables.bootstrap.css" rel="stylesheet">
        <link href="<?php echo public_url()?>/admin/css/css/dataTables/dataTables.responsive.css" rel="stylesheet">
        <link href="<?php echo public_url()?>/admin/css/css/style.css" rel="stylesheet">
        
        <link href="<?php echo public_url()?>/admin/css/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <div id="wrapper">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <ul class="nav navbar-nav navbar-left navbar-top-links">
                    <li><a href="<?php echo site_url('trangchu/dangnhap') ?>"><i class="fa fa-home fa-fw"></i> FRENCHFOODS</a></li>
                </ul>

                <ul class="nav navbar-right navbar-top-links">
                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-user fa-fw"></i><?php echo $admin['taikhoan']; ?><b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="<?php echo site_url('admin/doimatkhau') ?>"><i class="fa fa-user fa-fw"></i> Đổi mật khẩu</a>
                            </li>
                            <li><a href="<?php echo site_url('admin/dangxuat') ?>"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a>
                            </li>

                        </ul>
                    </li>
                </ul>

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                             
                            <!-- <li>
                                <a href="<?php echo site_url('admin/taikhoan') ?>"><i class="fa fa-user fa-fw"></i> Tài khoản</a>
                            </li>  -->  
                            <li>
                                <a><i class="fa fa-user fa-fw"></i> Tài khoản<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo site_url('admin/qtv') ?>">Người kiểm duyệt</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('admin/taikhoan') ?>">Người dùng</a>
                                    </li>
                                </ul>
                            </li>      
                            <li>
                                <a><i class="fa fa-cutlery fa-fw "></i> Thực đơn<span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo site_url('admin/loaimonan') ?>">Loại món ăn</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('admin/loaidouong') ?>">Loại đồ uống</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('admin/doan') ?>">Đồ ăn</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('admin/douong') ?>">Đồ uống</a>
                                    </li>
                                    <li>
                                        <a href="<?php echo site_url('admin/combo') ?>">Combo món ăn</a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin/sukien') ?>"><i class="fa fa-tags fa-fw"></i> Sự kiện, khuyến mãi</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin/tuyendung') ?>"><i class="fa fa-list fa-fw"></i> Tuyển dụng</a>
                            </li> 
                            <li>
                                <a href="<?php echo site_url('admin/datban') ?>"><i class="fa fa-phone fa-fw"></i> Đặt bàn</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin/dktcsk') ?>"><i class="fa fa-phone fa-fw"></i> Tổ chức sự kiện</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin/nhanxet') ?>"><i class="fa fa-comment fa-fw"></i> Nhận xét</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin/baiviet') ?>"><i class="fa fa-file fa-fw"></i> Bài viết</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>