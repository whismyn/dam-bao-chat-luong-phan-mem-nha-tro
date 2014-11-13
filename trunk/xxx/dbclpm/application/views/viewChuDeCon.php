<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Chủ đề con</title>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap-theme.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap-theme.min.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/mycss.css" type="text/css"/>
        <script src="http://localhost/dbclpm/media/js/bootstrap.js"></script>
        <script src="http://localhost/dbclpm/media/js/bootstrap.min.js"></script>
        <script src="http://localhost/dbclpm/media/js/jquery-1.11.1.min.js"></script>
        <style type="text/css">
            .h2{
                text-align: center;
            }
            .h4{
                font-style: italic;
            }
            .head-table{
                color: #3333FF;
                text-align: center;
                font-style: italic;
            }
            .tenchude{
                font-size: 20px;
                color: black;
                padding-top: 15px;
            }
            .font-tieude{
                font-size: 14px;
                color: black;
                font-style: italic;
            }
        </style>
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
                    <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="http://localhost/dbclpm/media/img/Home-icon.png" width="20" height="20">Trang chủ</a>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/chuDe"><img src="http://localhost/dbclpm/media/img/forum_icon.png" width="20" height="20"> Diễn đàn</a>
                    <?php
                    $maLoaiTaiKhoan = $this->session->userdata("maLoaiTaiKhoan");
                    if ($maLoaiTaiKhoan == 1 || $maLoaiTaiKhoan == 2 || $maLoaiTaiKhoan == 3) {
                        echo "<a class='navbar-brand' href='".base_url()."index.php/chuDe/themChuDe'><img src = 'http://localhost/dbclpm/media/img/add-forum.png' width = '20' height = '20'> Thêm diễn đàn</a>";
                    }
            ?>
        </div>
        <div class="navbar-collapse collapse">
          <div class="navbar-form navbar-right" role="form">
            <?php 
            $maTaiKhoan = $this->session->userdata('maTaiKhoan');
            $tenTaiKhoan = $this->session->userdata('tenTaiKhoan');
            //$maLoaiTaiKhoan = $this->session->userdata('maLoaiTaiKhoan');
            $url = base_url();
            if($tenTaiKhoan == null){
                echo "<button class = 'btn btn-success'><a href = '".$url."index.php/taiKhoan/dangNhap' class = 'font-a'>Đăng nhập</a></button>";
            } else{
                echo "<span class = 'font'>Xin chào <a href = '".$url."index.php/taiKhoan/thayDoi/".$maTaiKhoan."'>".$tenTaiKhoan.", </a></span>";
                echo "<a href = '".$url."index.php/taiKhoan/dangXuat'>Đăng xuất</a>";
                echo "&nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        ";
            }
            if($maLoaiTaiKhoan == 1){
                echo "<a href = '".$url."index.php/taiKhoan/trangquantri'><img src = 'http://localhost/dbclpm/media/img/admin-icon.png' width = '20' height = '20'/>Quản trị hệ thống</a>";
            } else if($maLoaiTaiKhoan == 2){
                echo "<a href = '".$url."index.php/taiKhoan/trangquanlynhatro/".$maTaiKhoan."'><img src = 'http://localhost/dbclpm/media/img/admin-icon.png' width = '20' height = '20'/>Quản trị nhà trọ</a>";
            }
        ?>
          </div>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h2 class="h2">Các diễn đàn con trong hệ thống:</h2>
                </div>

                <div class="container">
                    <!-- Example row of columns -->

                <div class="row">
                    <div class="diendan">
                        <div class="header-diendan">
                            <p style="margin-left:15px">
                              <?php
                                $machude = $this->session->userdata('maChuDe');
                                echo $tenchude;
                              ?>
                            </p>
                        </div>
                        <div class="header-diendan2">
                            <div class="row">
                                <div class="col-lg-1">
                                </div>
                                <div class="col-lg-7">
                                    <span>Tiêu đề</span>
                                </div>
                                <div class="col-lg-4">
                                    <span>Ngày đăng</span>
                                </div>
                            </div>
                        </div>
                        <?php
                            $url = base_url();
                            foreach ($chuDeCons as $chuDe) {
                                echo "<div class='noidung-diendan'>";
                                echo "<div class='row'>";
                                echo "<div class='col-lg-1'>";
                                echo "<img src='http://localhost/dbclpm/media/img/my-topic.png' width='45' height='45' style='margin-left:15px'></div>";
                                echo "<div class='col-lg-7'>";
                                echo "<a class='tenchude' href='".$url."index.php/chuDe/xemChiTiet/".$chuDe->MA_CHU_DE."'>". $chuDe->TIEU_DE."</a>";
                                echo "</div>";
                                echo "<div class='col-lg-4'>";
                                echo "<h4 class='h4'>".$chuDe->TG_TAO_CHU_DE."</h4>";
                                echo "</div>";
                                echo "</div></div>";
                            }
                        ?>
                    </div>
                </div>
                <hr>

                <footer>
                    <p>&copy; Đảm bảo chất lượng phần mềm</p>
                </footer>
            </div> <!-- /container -->
    </body>
</html>
