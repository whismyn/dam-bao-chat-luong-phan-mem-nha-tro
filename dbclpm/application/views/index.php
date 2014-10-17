<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
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
          <a class="navbar-brand" href="#"><img src="http://localhost/dbclpm/media/img/Home-icon.png" width="20" height="20">Trang chủ</a>
        </div>
        <div class="navbar-collapse collapse">
          <div class="navbar-form navbar-right" role="form">
            <?php 
            $maTaiKhoan = $this->session->userdata('maTaiKhoan');
            $tenTaiKhoan = $this->session->userdata('tenTaiKhoan');
            $maLoaiTaiKhoan = $this->session->userdata('maLoaiTaiKhoan');
            $url = base_url();
            if($tenTaiKhoan == null){
                echo "<button class='btn btn-success'><a href='".$url."index.php/taiKhoan/dangNhap'>Đăng nhập</a></button>";
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
        <h1>Tìm kiếm nhà trọ online!</h1>
        <?php echo form_open("nhaTro/timNhaTro") ?>
        <div class="col-xs-4">
        <input type="text" name="tuKhoa" class="form-control" placeholder="Từ khóa cần tìm..."></div>
        <button type="submit" class="btn btn-info">Tìm kiếm</button>
        <button type="button" class="btn btn-info"><a href="<?php echo base_url();?>index.php/nhaTro/timKiemNangCao">Tìm kiếm nâng cao</a></button>
        <?php echo form_close() ?>

      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      
      <div class="row">
        <h1>Các nhà trọ trong hệ thống</h1>
        <?php
        foreach ($nhaTros as $nhaTro) {
        echo "<div class='col-6 col-sm-6 col-lg-4'>";
        echo "<h3>".$nhaTro->TIEU_DE."</h3>";
        echo "<p>Địa chỉ LH: ".$nhaTro->DIA_CHI_LH."</p>";
        echo "<p>Giá: ".$nhaTro->GIA."</p>";
        echo "<p>Diện tích: ".$nhaTro->DIEN_TICH."</p>";
        echo "<p><a class='btn btn-default' href='index.php/nhaTro/xemNhaTro/".$nhaTro->MA_NT."' role='button'>Xem chi tiết &raquo;</a></p>";
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
