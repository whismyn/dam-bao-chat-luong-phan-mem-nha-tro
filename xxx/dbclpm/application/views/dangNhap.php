<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Đăng nhập</title>
    <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap-theme.css" type="text/css"/>
    <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap-theme.min.css" type="text/css"/>
    <link rel="stylesheet" href="http://localhost/dbclpm/media/css/mycss.css" type="text/css"/>
    <script src="http://localhost/dbclpm/media/js/bootstrap.js"></script>
    <script src="http://localhost/dbclpm/media/js/bootstrap.min.js"></script>
    <script src="http://localhost/dbclpm/media/js/jquery-1.11.1.min.js"></script>
    <style type="text/css">
        .bs-example{
            margin: 20px;
        }
        body{
            background: url(http://localhost/dbclpm/media/img/background.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        h4,h3{
        color: #0099CC;
        margin-left: 15px;
        }
        h2{
            color: red;
        }
        .thongbao{
        color: red;
    }
        .quenmatkhau{
            text-align: center;
            color: red;
        }
    </style>
    <script>
    function submit11(){
        var user=document.forms["loginForm"]["userId"].value;
        var pass=document.forms["loginForm"]["password"].value;
        document.getElementById("msUser").innerHTML=" ";
        document.getElementById("msPass").innerHTML=" ";

        //Xet userID
        if(user==null || user == ""){
            document.getElementById("msUser").innerHTML="Vui lòng nhập vào tên tài khoản";
            return false;
        }
        //Xet password
        if(pass==null || pass==""){
            document.getElementById("msPass").innerHTML="Vui lòng nhập vào mật khẩu";
            return false;
        }
    }
    </script>
</head>
<body>
    <img src="http://localhost/dbclpm/media/img/header.png" class="img-responsive" alt="Responsive image" style="height:150px;width:100%;">
    <div class="bs-example">
        <nav id="myNavbar" class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="container">
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="<?php echo base_url();?>"><img src="http://localhost/dbclpm/media/img/Home-icon.png" width="20" height="20">Trang chủ</a></li>
                        <li><a href="#">Diễn đàn</a></li>
                        
                       
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </nav>
    </div>



<div class="login">
    <h2><img src="http://localhost/dbclpm/media/img/lock-icon.png" width="40" height="40">Đăng nhập vào hệ thống</h2>
    <hr width="100%">
    <div class="logindiv1">
      <img src="http://localhost/dbclpm/media/img/img-login.png" width="497" height="150" margin="5">
      <div class="row">
        <div class="col-lg-12">
          <div class="logindiv2">
            <form role="form" id="loginForm" name="loginForm" onsubmit="return submit11();" action="http://localhost/dbclpm/index.php/taiKhoan/xulydangnhap" method="post" accept-charset="utf-8">
              <div class="form-group">
                <label>Tên đăng nhập</label>
                <input type="text" class="form-control" id="userId" name="tenTaiKhoan" placeholder="Nhập tên đăng nhập"><br>
                <a class="thongbao" id="msUser"></a>
              </div>
              <div class="form-group">
                <label>Mật khẩu</label>
                <input type="password" class="form-control" id="password" name="matKhau" placeholder="Nhập mật khẩu"><br>
                <p class="thongbao" id="msPass"></p>
              </div>
              <div align="center">
              <input type="submit" class="btn btn-default" value="Đăng nhập"/>
              <button onclick="window.location.href='http://localhost/dbclpm/index.php/taiKhoan/dangKy'" class="btn btn-default">Đăng ký</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div style="text-align:center"><h4><a href="<?php echo base_url();?>index.php/taiKhoan/layMatKhau">Bạn quên mật khẩu?</a></h4></div>




      <footer>
        <p>&copy; Đảm bảo chất lượng phần mềm</p>
      </footer>
</body>
</html>                                     