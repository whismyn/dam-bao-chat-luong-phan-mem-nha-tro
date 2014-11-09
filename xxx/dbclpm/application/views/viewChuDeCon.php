<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Trang chủ</title>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap-theme.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap-theme.min.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/mycss.css" type="text/css"/>
        <script src="http://localhost/dbclpm/media/js/bootstrap.js"></script>
        <script src="http://localhost/dbclpm/media/js/bootstrap.min.js"></script>
        <script src="http://localhost/dbclpm/media/js/jquery-1.11.1.min.js"></script>
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
          <a class="navbar-brand" href="<?php echo base_url();?>index.php/chuDe"><img src="http://localhost/dbclpm/media/img/Home-icon.png" width="20" height="20">Diễn đàn</a>
          <a class="navbar-brand" href="<?php echo base_url();?>index.php/chuDe/themChuDe"><img src="http://localhost/dbclpm/media/img/Home-icon.png" width="20" height="20">Thêm chủ đề</a>
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

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
       
        

      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      
      <div class="row">
        <h1>Các diễn đàn con</h1>
        <?php
        $url = base_url();
        foreach ($chuDeCons as $chuDe) {
        echo "<div class='col-6 col-sm-6 col-lg-4'>";
        echo "<h3>".$chuDe->TIEU_DE."</h3>";
        echo "<p>Ngày tạo: ".$chuDe->TG_TAO_CHU_DE."</p>";
        echo "<p><a class='btn btn-default' href='";
        echo $url."index.php/chuDe/xemChiTiet/".$chuDe->MA_CHU_DE."'";
        echo "role='button'>Xem &raquo;</a></p>";
        echo "</div>";   
        }
        ?>
      </div>
      <hr>

      <footer>
        <p>&copy; Đảm bảo chất lượng phần mềm</p>
      </footer>
    </div> <!-- /container -->
    </body>
</html>
