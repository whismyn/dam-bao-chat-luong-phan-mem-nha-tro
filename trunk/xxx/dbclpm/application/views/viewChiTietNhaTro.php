<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Chi tiết nhà trọ</title>
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
            .menu{
                font-size: 20px;
                font-weight: bold;
            }
            .php{
                color: #0099CC;
            }
            .thongtin{
                border-style: solid;
                border-width: 1px; 
                height: auto;
                width: 230px;
                padding: 5px;
                border-radius: 5px;
                margin: 10px;
                text-align: center;
                border-color: #B8B8B8;
            }
            .binhluan1{
                font-size: 20px;

            }
            .vipham{
                text-align: right;
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
                            <li class="menu"><a href="<?php echo base_url(); ?>"><img src="http://localhost/dbclpm/media/img/Home-icon.png" width="25" height="25">Trang chủ</a></li>
                            <li class="menu"><a href="<?php echo base_url(); ?>index.php/chuDe/"><img src="http://localhost/dbclpm/media/img/forum_icon.png" width="25" height="25">Diễn đàn</a></li>


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
                    <h1 class="fontcenter">Thông tin chi tiết nhà trọ</h1>
                    <?php  
                        foreach ($nhaTro as $nhaTro) {    
                        }
                    ?>
                    <hr width="100%">
                    <h3><?php echo $nhaTro->TIEU_DE;?></h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="http://localhost/dbclpm/media/img/account-icon.png" width="20" height="20"> Người đăng: <span class="php"><?php echo $nhaTro->TEN_TK; ?></span><br>
                            <img src="http://localhost/dbclpm/media/img/email2-icon.png" width="20" height="20"> Email: <span class="php"><?php echo $nhaTro->EMAIL_LH; ?></span><br>
                            <img src="http://localhost/dbclpm/media/img/home_address-icon.png" width="20" height="20"> Địa chỉ liên hệ: <span class="php"><?php echo $nhaTro->DIA_CHI_LH; ?></span>
                        </div>
                        <div class="col-lg-6">
                            <img src="http://localhost/dbclpm/media/img/clock-icon.png" width="20" height="20"> Ngày đăng: <span class="php"><?php echo $nhaTro->TG_TAO_NT; ?></span><br>
                            <img src="http://localhost/dbclpm/media/img/update-icon.png" width="20" height="20"> Cập nhật lần cuối: <span class="php"><?php echo $nhaTro->CN_CUOI; ?></span>
                        </div>
                    </div>
                    <hr width="100%">
                    <div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="thongtin">
                                    <img src="http://localhost/dbclpm/media/img/phone-icon.png" width="30" height="30">
                                    <label>Số điện thoại: </label><span class="php"><?php echo $nhaTro->SDT_LH;?></span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="thongtin">
                                    <img src="http://localhost/dbclpm/media/img/money-icon.png" width="30" height="30">
                                    <label>Giá: </label><span class="php"><?php echo $nhaTro->GIA;?> VNĐ</span>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="thongtin">
                                    <img src="http://localhost/dbclpm/media/img/size-icon.png" width="30" height="30">
                                    <label>Diện tích: </label><span class="php"><?php echo $nhaTro->DIEN_TICH;?> m<sup>2</sup></span>
                                </div>
                            </div>
                        </div>
                        <br><br><br>
                        <p>Giới thiệu: <?php echo $nhaTro->GIOI_THIEU;?></p>
                        <p>Địa chỉ: <?php echo $nhaTro->DIA_CHI_LH; ?></p>
                        <p>Diện tích: <?php echo $nhaTro->DIEN_TICH;?> m<sup>2</sup></p>
                        <p>Số phòng còn trống: <?php echo $nhaTro->CON_PHONG;?></p>
                    </div>
                </div>
                <div class="border-center">
                    <h3>Khu vực bình luận</h3>
                    <br>
                    <p>Để thêm bình luận vào hệ thống, bạn phải đăng nhập trước đó</p>
                    <div>
                    <?php $maTaiKhoan = $this->session->userdata('maTaiKhoan');
                        if($maTaiKhoan==null) echo "null";?> 
                            <?php echo form_open("nhaTro/xulythemBinhLuan") ?>
                            <div class="form-group">
                                <label class="col-sm-2 control-label">Nội dung bình luận: </label>
                                <div class="col-sm-4">
                                    <TEXTAREA  type="text" class="form-control bfh-phone" name="noiDung" size="35" ROWS="3" COLS="30"></TEXTAREA >

                                </div>
                            </div>
                            <input type="submit" value="Save" class="btn btn-info" <?php if($maTaiKhoan==NULL) echo 'disabled'; ?>>
                            <input type="hidden" name="maNhaTro" value="<?php echo $nhaTro->MA_NT; ?>">
                    <?php echo form_close() ?><br><br><br><br>
                    </div>
                    <div class="row">
                    <div class="col-lg-6">
                    <?php
                                foreach ($binhLuans as $binhLuan){
                                    echo "<span class='binhluan1'>Nội dung: ".$binhLuan->NOI_DUNG."</span>";
                                    echo "<a href='http://localhost/dbclpm/index.php/binhLuan/baoViPham/".$binhLuan->MA_BL."'>";
                                    echo "<img align='right' src='http://localhost/dbclpm/media/img/Remove-icon.png' width='30' height='30' title='Báo vi phạm'></a>";
                                    echo "<hr>";
                                }
                            ?>
                    </div></div>
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