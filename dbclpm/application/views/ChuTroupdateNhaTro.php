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
                            <li><a href="#">Diễn đàn</a></li>


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
            <div class="col-lg-3">
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
                            Tỉnh/Thành phố<br>
                            <select id="mark" name="maTinh"> 
                                <option value="">----</option>
                                <?php
                                foreach ($tinhThanhs as $tinhThanh) {
                                    echo "<option value=" . $tinhThanh->MA_TINH . " class=" . $tinhThanh->MA_TINH . ">";
                                    echo $tinhThanh->TEN_TINH;
                                    echo "</option>";
                                }
                                ?>
                            </select><br>
                            Quận/Huyện<br>
                            <select id="series" name="maHuyen">
                                <option value="">--</option>
                                <?php
                                foreach ($quanHuyens as $quanHuyen) {
                                    echo "<option value=" . $quanHuyen->MA_HUYEN . " class=" . $quanHuyen->MA_TINH . ">";
                                    echo $quanHuyen->TEN_HUYEN;
                                    echo "</option>";
                                }
                                ?>
                            </select><br>
                            Xã<br>
                            <select name="maXa"  id="model">
                                <option value="">--</option>
                                <?php
                                foreach ($phuongXas as $phuongXa) {
                                    echo "<option value=" . $phuongXa->MA_XA . " class=" . $phuongXa->MA_HUYEN . ">";
                                    echo $phuongXa->TEN_XA;
                                    echo "</option>";
                                }
                                ?>
                            </select><br>
                            Mức giá <br>
                            <select name="mucGia">
                                <option value="500000">500 000 VNĐ</option>
                                <option value="700000">700 000 VND</option>    
                                <option value="900000">900 000 VND</option>    
                                <option value="1000000">1 000 000 VND</option>
                                <option value="1200000">1 200 000 VND</option>
                                <option value="1400000">1 400 000 VND</option>
                                <option value="10 000 000">trên 1 500 000 VND</option>
                            </select><Br>
                            Diện tích<br>
                            <select name="dienTich">
                                <option value="15">15 m²</option>
                                <option value="20">20 m²</option>
                                <option value="25">25 m²</option>
                                <option value="30">30 m²</option>
                                <option value="100">trên 30 m²</option>
                            </select>
                            <br>
                            <input type="submit" value="Tìm">
                            <?php echo form_close() ?>
                        </div>
                    </article>
                </form>
            </div>
            <div class="col-lg-6">
                <div class="border-center">
                    <h1 class="fontcenter">Thông tin nhà trọ online</h1><hr>
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Chỉnh sửa thông tin nhà trọ
                        </div>
                          <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                    <div class="form-horizontal" role="form">
                                    <?php echo form_open("nhaTro/xulycapnhat") ?>
									<?php
							            //print_r($diachi);
							            foreach ($diachi as $diachi) {
							                $maTinh = $diachi->MA_TINH;
							                $maHuyen = $diachi->MA_HUYEN;
							                $maXa = $diachi->MA_XA;
							            }
							        ?>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tỉnh/Thành phố:</label>
                                        <div class="col-sm-4">
                                          <select id="mark" class="form-control"> 
                                            <option value="">----</option>
                                            <?php
										            foreach ($tinhThanhs as $tinhThanh) {
										                echo "<option value=" . $tinhThanh->MA_TINH . " class=".$tinhThanh->MA_TINH." ";
										                if($tinhThanh->MA_TINH == $maTinh) echo "selected";
										                echo ">";
										                echo $tinhThanh->TEN_TINH;
										                echo "</option>";
										            }
										            ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Quận/Huyện:</label>
                                        <div class="col-sm-4">
                                          <select id="series" class="form-control">
                                            <option value="">--</option>
                                            <?php
									            foreach ($quanHuyens as $quanHuyen) {
									                echo "<option value=" . $quanHuyen->MA_HUYEN . " class=".$quanHuyen->MA_TINH." ";
									                if($quanHuyen->MA_HUYEN == $maHuyen) echo "selected";
									                echo ">";
									                echo $quanHuyen->TEN_HUYEN;
									                echo "</option>";
									            }
									            ?>	
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Phường/Xã:</label>
                                        <div class="col-sm-4">
                                          <select name="maXa"  id="model" class="form-control">
                                            <option value="">--</option>
                                           <?php
									            foreach ($phuongXas as $phuongXa) {
									                echo "<option value=" . $phuongXa->MA_XA . " class=".$phuongXa->MA_HUYEN." ";
									                if($phuongXa->MA_XA == $maXa) echo "selected";
									                echo ">";
									                echo $phuongXa->TEN_XA;
									                echo "</option>";
									            }
									            ?>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Số nhà: </label>
                                        <div class="col-sm-4">
                                          <input type="text" class="form-control bfh-phone" name="soNha" value="<?php echo $nhaTro->SO_NHA; ?>" size="35">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Diện tích: </label>
                                        <div class="col-sm-4">
                                          <input type="text" class="form-control bfh-phone" name="dienTich" value="<?php echo $nhaTro->DIEN_TICH; ?>" size="35">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Còn phòng: </label>
                                        <div class="col-sm-4">
                                          <input type="text" class="form-control bfh-phone" name="conPhong" value="<?php echo $nhaTro->CON_PHONG; ?>" size="35">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Giá: </label>
                                        <div class="col-sm-4">
                                          <input type="text" class="form-control bfh-phone" name="gia" value="<?php echo $nhaTro->GIA; ?>" size="35">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Người liên hệ: </label>
                                        <div class="col-sm-4">
                                          <input type="text" class="form-control bfh-phone" name="nguoiLienHe" value="<?php echo $nhaTro->NGUOI_LH; ?>" size="35">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Số điện thoại liên hệ: </label>
                                        <div class="col-sm-4">
                                          <input type="text" class="form-control bfh-phone" name="sdtLienHe" value="<?php echo $nhaTro->SDT_LH; ?>" size="35">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Địa chỉ liên hệ: </label>
                                        <div class="col-sm-4">
                                          <input type="text" class="form-control bfh-phone" name="diaChiLienHe" value="<?php echo $nhaTro->DIA_CHI_LH; ?>" size="35">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tiêu đề: </label>
                                        <div class="col-sm-4">
                                          <input type="text" class="form-control bfh-phone" name="gia" value="<?php echo $nhaTro->GIA; ?>" size="35">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Giới thiệu: </label>
                                        <div class="col-sm-4">
                                          <input type="text" class="form-control bfh-phone" name="gioiThieu" value="<?php echo $nhaTro->GIOI_THIEU; ?>" size="35">
                                          <br>
                                          <input type="submit" class="btn btn-default" value="Save"></input>
                                          <button type="button" class="btn btn-default"><a href="<?php echo base_url();?>index.php/taiKhoan" class="font-a">Hủy</a></button>
                                          <input type="hidden" name="maNhaTro" value="<?php echo $nhaTro->MA_NT; ?>">
                                        </div>
                                    </div>
                                    <?php echo form_close() ?>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Advanced Tables -->

                </div>
            </div>
            <div class="col-lg-3">
                <form>
                    <article class="lifted_content_box">
                        <h1><img src="http://localhost/dbclpm/media/img/location-icon1.png" width="20" height="20">Tìm kiếm theo khu vực</h1>
                        <div class="content">
                            <p>Tìm kiếm nhà trọ theo khu vực tỉnh thành:</p>
                            <a href="http://localhost/dbclpm/index.php/tinhThanh/xemNhaTroTheoTinhThanh/2">Cần Thơ</a><br>
                            <a href="http://localhost/dbclpm/index.php/tinhThanh/xemNhaTroTheoTinhThanh/32">TP. Hồ Chí Minh</a><br>
                            <a href="http://localhost/dbclpm/index.php/tinhThanh/xemNhaTroTheoTinhThanh/16">Đà Nẵng</a><br>
                            <a href="http://localhost/dbclpm/index.php/tinhThanh/xemNhaTroTheoTinhThanh/28">Hải Phòng</a><br>
                            <a href="http://localhost/dbclpm/index.php/tinhThanh/xemNhaTroTheoTinhThanh/25">Hà Nội</a><br>
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