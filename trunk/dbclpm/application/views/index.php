<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap-theme.css" type="text/css"/>
    <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap-theme.min.css" type="text/css"/>
    <link rel="stylesheet" href="http://localhost/dbclpm/media/css/mycss.css" type="text/css"/>
    <script src="http://localhost/dbclpm/media/js/bootstrap.js"></script>
    <script src="http://localhost/dbclpm/media/js/bootstrap.min.js"></script>
    <script src="http://localhost/dbclpm/media/js/jquery-1.11.1.min.js"></script>


    <link href="http://localhost/dbclpm/media/css/css.css" media="screen" rel="stylesheet" type="text/css" >
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
    <script type="text/javascript" src="http://localhost/dbclpm/media/js/paging.js"></script>

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
                <form class="navbar-form navbar-left" role="search" action="http://localhost/dbclpm/index.php/nhaTro/timNhaTro" method="post" accept-charset="utf-8">
                    <div class="form-group">
                        <label>Tìm kiếm</label>
                        <input type="text" name="tuKhoa" class="form-control" placeholder="Từ khóa cần tìm...">
                        <button type="submit" class="btn btn-info">Tìm kiếm</button>
                        <button type="button" class="btn btn-info"><a href="<?php echo base_url();?>index.php/nhaTro/timKiemNangCao" class="font-a">Tìm kiếm nâng cao</a></button>
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
                    if($tenTaiKhoan != null){
                        echo "<h3>Xin chào ".$tenTaiKhoan."</h3>";
                    }
                ?>
<div class="row">
        <div class="col-lg-3">
            <?php 
                    $maTaiKhoan = $this->session->userdata('maTaiKhoan');
                    $tenTaiKhoan = $this->session->userdata('tenTaiKhoan');
                    $maLoaiTaiKhoan = $this->session->userdata('maLoaiTaiKhoan');
                    $url = base_url();
                    if($tenTaiKhoan == null){
                        echo "<form><article class='lifted_content_box'>";
                        echo "<h1><img src='http://localhost/dbclpm/media/img/login.png' width='30' height='30'>Đăng nhập</h1>";
                        echo "<div class='content'>";
                        echo "<p><span class='glyphicon glyphicon-chevron-right'></span><a href='".$url."index.php/taiKhoan/dangNhap'>Đăng nhập</a></p>";
                        echo "<p><span class='glyphicon glyphicon-chevron-right'></span><a href='".$url."index.php/taiKhoan/dangKy'>Đăng ký tài khoản mới</a></p>";
                        echo "</article></form>";
                        } else{
                            echo "<form><article class='lifted_content_box'>";
                            echo "<h1><img src='http://localhost/dbclpm/media/img/login.png' width='20' height='20'>Tài khoản</h1>";
                            echo "<div class='content'>";
                            echo "<p><span class='glyphicon glyphicon-chevron-right'></span><a href='".$url."index.php/taiKhoan/thayDoi/".$maTaiKhoan."'>Thông tin cá nhân</a></p>";
                            if($maLoaiTaiKhoan == 1){
                                echo "<p><span class='glyphicon glyphicon-chevron-right'></span><a href='".$url."index.php/taiKhoan/trangquantri'>Quản trị hệ thống</a></p>";
                            } else if($maLoaiTaiKhoan == 2){
                                echo "<p><span class='glyphicon glyphicon-chevron-right'></span><a href='".$url."index.php/taiKhoan/trangquanlynhatro/".$maTaiKhoan."'>Quản trị nhà trọ</a></p>";
                            }
                            echo "<p><span class='glyphicon glyphicon-chevron-right'></span><a href='".$url."index.php/taiKhoan/dangXuat'>Đăng xuất</a></p>";
                            echo "</article></form>";
                        }
                ?>
            <form>
                <article class="lifted_content_box">
                  <h1><img src="http://localhost/dbclpm/media/img/search-icon.png" width="20" height="20">Tìm kiếm nâng cao</h1>
                  <div class="content">
                    <p>Khu vực tìm kiếm nâng cao</p>
                  </div>
                </article>
            </form>
        </div>
        <div class="col-lg-6">
          <div class="border-center">
            <h1 class="fontcenter">Thông tin nhà trọ online</h1><hr>
            <?php
                $url = base_url();
                foreach ($nhaTros as $nhaTro) {
                echo "<h3><a href='".$url."index.php/nhaTro/xemNhaTro/".$nhaTro->MA_NT."'";
                echo " style='text-decoration: none'>".$nhaTro->TIEU_DE."</a></h3>";
                echo "<p><label>Địa chỉ LH:</label> ".$nhaTro->DIA_CHI_LH;
                echo "<label style='margin-left:50px'>Giá:</label> ".$nhaTro->GIA."&#09;&#09;";
                echo "<label style='margin-left:50px'>Diện tích:</label> ".$nhaTro->DIEN_TICH."</p>";
                echo "<hr>";
                }
            ?>
          </div>
       </div>
        <div class="col-lg-3">
          <form>
            <article class="lifted_content_box">
              <h1><img src="http://localhost/dbclpm/media/img/location-icon1.png" width="20" height="20">Tìm kiếm theo khu vực</h1>
              <div class="content">
                <p>Nội dung</p>
              </div>
            </article>
          </form>
          
        </div>
      </div>
           <footer>
        <p>&copy; Đảm bảo chất lượng phần mềm</p>
      </footer>
</body>
</html>                                     