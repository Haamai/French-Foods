<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?php echo public_url()?>/admin/css/img/favicon.ico">
        <link href="<?php echo public_url()?>/admin/css/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo public_url()?>/admin/css/css/metisMenu.min.css" rel="stylesheet">
        <link href="<?php echo public_url()?>/admin/css/css/style.css" rel="stylesheet">
        <link href="<?php echo public_url()?>/admin/css/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <center><b class="panel-title">Quên mật khẩu</b></center>
                        </div>
                        <div class="panel-body">
                            <form action="quenmatkhau" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <p><b>Tên đăng nhập</b></p>
                                        <input class="form-control" id="user_signin" placeholder="" name="taikhoan" type="" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <p><b>Email</b></p>
                                        <input class="form-control" id="pass_signin" placeholder="" name="email" type="text" value="">
                                    </div>
                                    <div class="form-group">
                                        <p>Quay trở lại <a href="<?php echo site_url('admin') ?>"><i class=""></i>đăng nhập</a></p>
                                    </div>
                                    <button type="submit" class="btn btn-lg btn-success btn-block"><b>Đồng ý</b></button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $this->load->view('admin/footer')?>  