<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Đăng nhập</title>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap-theme.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap-theme.min.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/mycss.css" type="text/css"/>
        <link href="http://localhost/dbclpm/media/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="http://localhost/dbclpm/media/css/style.css" rel="stylesheet">
        <link href="http://localhost/dbclpm/media/css/typica-login.css" rel="stylesheet">
        <script src="http://localhost/dbclpm/media/js/bootstrap.js"></script>
        <script src="http://localhost/dbclpm/media/js/bootstrap.min.js"></script>
        <script src="http://localhost/dbclpm/media/js/jquery-1.11.1.min.js"></script>
        <script src="http://localhost/dbclpm/media/js/typica-login.js"></script>
    </head>
    <body>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo base_url();?>"><img src="http://localhost/dbclpm/media/img/Home-icon.png" width="20" height="20">Trang chủ</a>
        </div>
        <div class="navbar-collapse collapse">
          <div class="navbar-form navbar-right" role="form">
            <?php 
            $maTaiKhoan = $this->session->userdata('maTaiKhoan');
            $tenTaiKhoan = $this->session->userdata('tenTaiKhoan');
            $maLoaiTaiKhoan = $this->session->userdata('maLoaiTaiKhoan');
            $url = base_url();
            if($tenTaiKhoan == null){
                echo "<button class='btn btn-success'><a href='".$url."index.php/taiKhoan/dangNhap' class='font-a'>Đăng nhập</a></button>";
            } else{
                echo "<span class='font'>Xin chào <a href='".$url."index.php/taiKhoan/thayDoi/".$maTaiKhoan."'>".$tenTaiKhoan.",</a></span>";
                echo "<a href='".$url."index.php/taiKhoan/dangXuat'>Đăng xuất</a>";
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
            }
            if($maLoaiTaiKhoan == 1){
                echo "<a href='".$url."index.php/taiKhoan/trangquantri'><img src='http://localhost/dbclpm/media/img/admin-icon.png' width='20' height='20'/>Quản trị hệ thống</a>";
            } else if($maLoaiTaiKhoan == 2){
                echo "<a href='".$url."index.php/taiKhoan/trangquanlynhatro/".$maTaiKhoan."'><img src='http://localhost/dbclpm/media/img/admin-icon.png' width='20' height='20'/>Quản trị nhà trọ</a>";
            }
        ?>
          </div>
        </div><!--/.navbar-collapse -->
      </div>
    </div>



    <div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Quên mật khẩu</h1>
            <div class="account-wall">
                <img class="profile-img" src="http://localhost/dbclpm/media/img/email-icon.png"/>
                <div class="form-signin">
                <?php echo form_open("taiKhoan/xuLyLayMatKhau") ?>
                <h4 align="center">Để lấy lại mật khẩu<br>bạn vui lòng nhập vào địa chỉ email <br>mà bạn dùng đăng ký tài khoản</h4>
                <input type="password" class="form-control" placeholder="Địa chỉ email" name="email" required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    Gửi</button>
                </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>
    </body>
</html>
