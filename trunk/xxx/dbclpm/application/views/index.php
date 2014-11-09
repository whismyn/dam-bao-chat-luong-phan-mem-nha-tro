<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Trang chủ</title>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap-theme.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap-theme.min.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/font-awesome.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/customPhanTrang.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/mycss.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/js/dataTables/dataTables.bootstrap.css" type="text/css"/>
        <script src="http://localhost/dbclpm/media/js/bootstrap.js"></script>
        <script src="http://localhost/dbclpm/media/js/bootstrap.min.js"></script>
        <script src="http://localhost/dbclpm/media/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="http://localhost/dbclpm/media/js/jquery.chained.min.js"></script>
        <script>
            $(function () {
                $("#series").chained("#mark");
                $("#model").chained("#series");
            });

        </script>
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
                            <li><a href="<?php echo base_url(); ?>"><img src="http://localhost/dbclpm/media/img/Home-icon.png" width="20" height="20">Trang chủ</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/chuDe/"><img src="http://localhost/dbclpm/media/img/Home-icon.png" width="20" height="20">Diễn đàn</a></li>


                        </ul>
                        <form class="navbar-form navbar-left" role="search" action="http://localhost/dbclpm/index.php/nhaTro/timNhaTro" method="post" accept-charset="utf-8">
                            <div class="form-group">
                                <label>Tìm kiếm</label>
                                <input type="text" name="tuKhoa" class="form-control" placeholder="Từ khóa cần tìm...">
                                <button type="submit" class="btn btn-info">Tìm kiếm</button>
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
            <div class="col-lg-2">
                <?php
                $maTaiKhoan = $this->session->userdata('maTaiKhoan');
                $tenTaiKhoan = $this->session->userdata('tenTaiKhoan');
                $maLoaiTaiKhoan = $this->session->userdata('maLoaiTaiKhoan');
                $url = base_url();
                if ($tenTaiKhoan == null) {
                    echo "<form><article class='lifted_content_box'>";
                    echo "<h1><img src='http://localhost/dbclpm/media/img/login.png' width='30' height='30'>Đăng nhập</h1>";
                    echo "<div class='content'>";
                    echo "<p><span class='glyphicon glyphicon-chevron-right'></span><a href='" . $url . "index.php/taiKhoan/dangNhap'>Đăng nhập</a></p>";
                    echo "<p><span class='glyphicon glyphicon-chevron-right'></span><a href='" . $url . "index.php/taiKhoan/dangKy'>Đăng ký tài khoản mới</a></p>";
                    echo "</article></form>";
                } else {
                    echo "<form><article class='lifted_content_box'>";
                    echo "<h1><img src='http://localhost/dbclpm/media/img/login.png' width='20' height='20'>Tài khoản</h1>";
                    echo "<div class='content'>";
                    echo "<p><span class='glyphicon glyphicon-chevron-right'></span><a href='" . $url . "index.php/taiKhoan/thayDoi/" . $maTaiKhoan . "'>Thông tin cá nhân</a></p>";
                    if ($maLoaiTaiKhoan == 1) {
                        echo "<p><span class='glyphicon glyphicon-chevron-right'></span><a href='" . $url . "index.php/taiKhoan/trangquantri'>Quản trị hệ thống</a></p>";
                    } else if ($maLoaiTaiKhoan == 2) {
                        echo "<p><span class='glyphicon glyphicon-chevron-right'></span><a href='" . $url . "index.php/taiKhoan/trangquanlynhatro/" . $maTaiKhoan . "'>Quản trị nhà trọ</a></p>";
                    }
                    echo "<p><span class='glyphicon glyphicon-chevron-right'></span><a href='" . $url . "index.php/taiKhoan/dangXuat'>Đăng xuất</a></p>";
                    echo "</article></form>";
                }
                ?>
                <form>
                    <article class="lifted_content_box">
                        <h1><img src="http://localhost/dbclpm/media/img/search-icon.png" width="20" height="20">Tìm kiếm nâng cao</h1>
                        <div class="content">
                            <?php echo form_open("nhaTro/xulytimkiem") ?>
                            <label>Tỉnh/Thành phố:</label>
                            <select id="mark" name="maTinh" class="form-control"> 
                                <option value="">----</option>
                                <?php
                                foreach ($tinhThanhs as $tinhThanh) {
                                    echo "<option value=" . $tinhThanh->MA_TINH . " class=" . $tinhThanh->MA_TINH . ">";
                                    echo $tinhThanh->TEN_TINH;
                                    echo "</option>";
                                }
                                ?>
                            </select><br>
                            <label>Quận/Huyện</label>
                            <select id="series" name="maHuyen" class="form-control">
                                <option value="">--</option>
                                <?php
                                foreach ($quanHuyens as $quanHuyen) {
                                    echo "<option value=" . $quanHuyen->MA_HUYEN . " class=" . $quanHuyen->MA_TINH . ">";
                                    echo $quanHuyen->TEN_HUYEN;
                                    echo "</option>";
                                }
                                ?>
                            </select><br>
                            <label>Xã:</label>
                            <select name="maXa"  id="model" class="form-control">
                                <option value="">--</option>
                                <?php
                                foreach ($phuongXas as $phuongXa) {
                                    echo "<option value=" . $phuongXa->MA_XA . " class=" . $phuongXa->MA_HUYEN . ">";
                                    echo $phuongXa->TEN_XA;
                                    echo "</option>";
                                }
                                ?>
                            </select><br>
                            <label>Mức giá:</label>
                            <select name="mucGia" class="form-control">
                                <option value="500000">500 000 VNĐ</option>
                                <option value="700000">700 000 VND</option>    
                                <option value="900000">900 000 VND</option>    
                                <option value="1000000">1 000 000 VND</option>
                                <option value="1200000">1 200 000 VND</option>
                                <option value="1400000">1 400 000 VND</option>
                                <option value="10 000 000">trên 1 500 000 VND</option>
                            </select><Br>
                            <label>Diện tích:</label>
                            <select name="dienTich" class="form-control">
                                <option value="15">15 m²</option>
                                <option value="20">20 m²</option>
                                <option value="25">25 m²</option>
                                <option value="30">30 m²</option>
                                <option value="100">trên 30 m²</option>
                            </select>
                            <br>
                            <input type="submit" value="Tìm" class="btn btn-info">
                            <?php echo form_close() ?>
                        </div>
                    </article>
                </form>
            </div>
            <div class="col-lg-8">
                <div class="border-center">
                    <h1 class="fontcenter">Thông tin nhà trọ online</h1><hr>
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Các nhà trọ trong hệ thống
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $url = base_url();
                                        for ($i=0; $i<count($nhaTros); $i++){
                                            echo "<tr class='odd gradeX'>";
                                            echo "<td>";
											if($i < 5 ){
												echo " <img src='http://localhost/dbclpm/media/img/new.gif'>";
											} else{
												echo " <img src='http://localhost/dbclpm/media/img/old.svg' width='70'>";
											}
											echo "</td>";
                                            echo "<td>";
                                            echo "<h4><a href='" . $url . "index.php/nhaTro/xemNhaTro/" . $nhaTros[$i]->MA_NT . "'";
                                            echo " style='text-decoration: none'>" . $nhaTros[$i]->TIEU_DE . "</a></h4>";
                                            echo "<p><label>Địa chỉ LH:</label> " . $nhaTros[$i]->DIA_CHI_LH . "<br>";
                                            echo "<label>Giá:</label> " . $nhaTros[$i]->GIA . "&#09;&#09;";
                                            echo "<label>Diện tích:</label> " . $nhaTros[$i]->DIEN_TICH . "</p>";
                                            echo "</td>";
                                            
                                            echo "</tr>";
                                        }
                                        ?>
                                        </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--End Advanced Tables -->

                </div>
            </div>
            <div class="col-lg-2">
                <form>
                    <article class="lifted_content_box">
                        <h1><img src="http://localhost/dbclpm/media/img/location-icon1.png" width="20" height="20">Tìm kiếm theo KV</h1>
                        <div class="content">
                            <label><a href="http://localhost/dbclpm/index.php/tinhThanh/xemNhaTroTheoTinhThanh/2">Cần Thơ</a></label><br>
                            <label><a href="http://localhost/dbclpm/index.php/tinhThanh/xemNhaTroTheoTinhThanh/32">TP. Hồ Chí Minh</a></label><br>
                            <label><a href="http://localhost/dbclpm/index.php/tinhThanh/xemNhaTroTheoTinhThanh/16">Đà Nẵng</a></label><br>
                            <label><a href="http://localhost/dbclpm/index.php/tinhThanh/xemNhaTroTheoTinhThanh/28">Hải Phòng</a></label><br>
                            <label><a href="http://localhost/dbclpm/index.php/tinhThanh/xemNhaTroTheoTinhThanh/25">Hà Nội</a></label><br>
                        </div>
                    </article>
                </form>

            </div>
        </div>
        <footer>
            <p>&copy; Đảm bảo chất lượng phần mềm</p>
        </footer>
    </body>
    <script src="http://localhost/dbclpm/media/js/jquery.metisMenu.js"></script>
    <!-- DATA TABLE SCRIPTS -->
    <script src="http://localhost/dbclpm/media/js/dataTables/jquery.dataTables.js"></script>
    <script src="http://localhost/dbclpm/media/js/dataTables/dataTables.bootstrap.js"></script>
    <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
    <!-- CUSTOM SCRIPTS -->
    <script src="http://localhost/dbclpm/media/js/customPhanTrang.js"></script>

</html>                                     