<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Đăng ký tài khoản mới</title>
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
            a{
                color: black;
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
                
            </div>
            <div class="col-lg-8">
                <div class="border-center">
                    <h1 class="fontcenter">Đăng ký tài khoản mới</h1><hr>
                    <form class="form-horizontal" role="form" action="http://localhost/dbclpm/index.php/taiKhoan/xulydangky" method="post" accept-charset="utf-8">
                      <div class="form-group">
                        <label for="firstname" class="col-sm-2 control-label">Loại tài khoản: </label>
                        <div class="col-sm-4">
                            <select class="form-control" name="maLoaiTk">
                                <option value="3">Thành viên</option>
                                <option value="2">Chủ nhà trọ</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="firstname" class="col-sm-2 control-label">Tên tài khoản: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control bfh-phone" size="35" name="tenTaiKhoan"/>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="firstname" class="col-sm-2 control-label">Mật khẩu: </label>
                        <div class="col-sm-4">
                            <input type="password" class="form-control bfh-phone" size="35" name="matKhau">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="firstname" class="col-sm-2 control-label">Giới tính: </label>
                        <div class="col-sm-4">
                            <select class="form-control" name="gioiTinh">
                                <option value="1">Nam</option>
                                <option value="0">Nữ</option>
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="firstname" class="col-sm-2 control-label">Email: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control bfh-phone" size="35" name="email">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="firstname" class="col-sm-2 control-label">Số điện thoại: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control bfh-phone" size="35" name="soDienThoai">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="firstname" class="col-sm-2 control-label">Địa chỉ: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control bfh-phone" size="35" name="diaChi">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="firstname" class="col-sm-2 control-label">Năm sinh: </label>
                        <div class="col-sm-4">
                            <input type="text" class="form-control bfh-phone" size="35" name="namSinh"><br>
                            <button type="submit" class="btn btn-default">Đăng ký</button>
                            <button type="button" class="btn btn-default"><a href="<?php echo base_url(); ?>">Trở về</a></button>
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