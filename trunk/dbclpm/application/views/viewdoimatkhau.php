<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Thay đổi mật khẩu</title>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap-theme.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap-theme.min.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/admin.css" type="text/css"/>
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
        </style>
        <script type="text/javascript">
            $( document ).ready(function() {
                
                
            });
           function check(){
               var $nhaplai = document.getElementById("nhaplai").value ;
               var $matkhaumoi = document.getElementById("matkhaumoi").value;
               var $matkhaucu = document.getElementById("matkhaucu").value;
               if($nhaplai != $matkhaumoi){
                   document.getElementById("thongbao").innerHTML = "Mật khẩu không trùng khớp!";
                   document.getElementById("nhaplai").focus();
                   return false;
               }
               if($matkhaucu == ""){
                   document.getElementById("thongbao").innerHTML = "Hãy nhập mật khẩu củ!";
                   document.getElementById("matkhaucu").focus();
                   return false;
               }
               if($matkhaumoi == ""){
                   document.getElementById("thongbao").innerHTML = "Hãy nhập mật khẩu mới!";
                   document.getElementById("matkhaumoi").focus();
                   return false;
               }
                   
               return true;
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
                            <li><a href="<?php echo base_url(); ?>"><img src="http://localhost/dbclpm/media/img/Home-icon.png" width="20" height="20">Trang chủ</a></li>
                            <li><a href="#">Diễn đàn</a></li>


                        </ul>
                        <form class="navbar-form navbar-left" role="search" action="http://localhost/dbclpm/index.php/nhaTro/timNhaTro" method="post" accept-charset="utf-8">
                            <div class="form-group">
                                <label>Tìm kiếm</label>
                                <input type="text" name="tuKhoa" class="form-control" placeholder="Từ khóa cần tìm...">
                                <button type="submit" class="btn btn-info">Tìm kiếm</button>
                                <button type="button" class="btn btn-info"><a href="<?php echo base_url(); ?>index.php/nhaTro/timKiemNangCao" class="font-a">Tìm kiếm nâng cao</a></button>
                            </div>
                        </form>
                    </div><!-- /.navbar-collapse -->
                </div>
            </nav>
        </div>
        <?php
        $maTaiKhoan = $this->session->userdata('maTaiKhoan');
        $tenTaiKhoan = $this->session->userdata('tenTaiKhoan');
        $maLoaiTaiKhoan = $this->session->userdata('maLoaiTaiKhoan');
        if ($tenTaiKhoan != null) {
            echo "<h3>Xin chào " . $tenTaiKhoan . "</h3>";
        }
        ?>
        

        <div class="row">
    <div class="col-lg-3">
        <div class="logout">
            <p><span class="glyphicon glyphicon-chevron-right"></span><a href="<?php echo base_url()."index.php/taiKhoan/dangXuat"; ?>">Logout</a></p>
        </div>
        <div class="divmenu">
            <div id='cssmenu'>
                <ul>
                   <li class="has-sub"><a href="<?php echo base_url()."index.php/taiKhoan/thayDoi/".$maTaiKhoan; ?>"><span>Thông tin cá nhân</span></a>
                   </li>
                   <li class="has-sub"><a href="<?php echo base_url(); ?>/index.php/taiKhoan/doimatkhau/<?php echo $taiKhoan->MA_TK ;?>"><span>Thay đổi mật khẩu</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="border-center">
            <h3>Thông tin cá nhân</h3>
            <hr width="100%">
            <form class="form-horizontal" role="form" action="http://localhost/dbclpm/index.php/taiKhoan/xulydoimatkhau" method="post" accept-charset="utf-8" onSubmit="return check();">
            <?php 
                    $atrb = array('onSubmit' => 'return check();');
                    echo form_open("taiKhoan/xulydoimatkhau",$atrb) ;
            ?>
            <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Mật khẩu củ: </label>
                <div class="col-sm-4">
                    <input class="form-control bfh-phone" size="35" type="password" name="matkhaucu" id="matkhaucu">
                </div>
            </div>
            <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Mật khẩu mới: </label>
                <div class="col-sm-4">
                    <input class="form-control bfh-phone" size="35" type="password" name="matkhaumoi" id="matkhaumoi">
                </div>
            </div>
            <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Nhập lại mật khẩu mới: </label>
                <div class="col-sm-4">
                    <input class="form-control bfh-phone" size="35" type="password"  id="nhaplai"><br>
                    <input type="hidden" name="maTaiKhoan" value="<?php echo $taiKhoan->MA_TK; ?>">
                    <input type="submit" value="Lưu" class="btn btn-info">
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
        <footer>
            <p>&copy; Đảm bảo chất lượng phần mềm</p>
        </footer>
    </body>
</html>                                     