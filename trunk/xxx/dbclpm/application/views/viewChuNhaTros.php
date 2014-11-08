<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Trang quản trị</title>
        <link href="http://localhost/dbclpm/media/css/bootstrap.min.css" rel="stylesheet">
        <link href="http://localhost/dbclpm/media/css/bootstrap-theme.min.css" rel="stylesheet">
        <link href="http://localhost/dbclpm/media/css/sb-admin.css" rel="stylesheet">
        <link href="http://localhost/dbclpm/media/css/plugins/morris.css" rel="stylesheet">
        <link href="http://localhost/dbclpm/media/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <script src="http://localhost/dbclpm/media/js/jquery.min.js"></script>

    </head>
    <body>
        <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>">Quay lại trang chủ</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo base_url();?>index.php/taiKhoan/thayDoi"><i class="fa fa-fw fa-user"></i> Thông tin cá nhân</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="<?php echo base_url();?>index.php/taiKhoan/dangXuat"><i class="fa fa-fw fa-power-off"></i> Đăng xuất</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="<?php echo base_url();?>index.php/taiKhoan/trangQuanTri"><i class="fa fa-fw fa-table"></i> Quản lý loại tài khoản</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/taiKhoan"><span class="glyphicon glyphicon-user"></span> Quản lý tài khoản</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/nhaTro"><span class="glyphicon glyphicon-home"></span> Quản lý nhà trọ</a>
                    </li>
                    <li class="active">
                        <a href="<?php echo base_url();?>index.php/taiKhoan/quanLyChuNhatro"><span class="glyphicon glyphicon-user"></span> Quản lý chủ nhà trọ</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/nhaTro/dangTin"><span class="glyphicon glyphicon-list"></span> Quản lý đăng tin</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/binhLuan/quanLyBinhLuan"><span class="glyphicon glyphicon-pencil"></span> Quản lý bình luận</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Quản lý địa chỉ <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="<?php echo base_url();?>index.php/tinhThanh">Quản lý tỉnh thành</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/quanHuyen">Quản lý quận huyện</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url();?>index.php/phuongXa">Quản lý phường xã</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/Email"><span class="glyphicon glyphicon-user"></span> Gửi Email</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <img src="http://localhost/dbclpm/media/img/chunhatro-icon.png" width="100" height="100">
                            Quản lý chủ nhà trọ
                        </h1>
                    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Thông tin chủ nhà trọ của hệ thống</h3>
                                    </div>
                                    <div class="panel-body">
                                        <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Mã tài khoản</th>
                                                <th>Tên tài khoản</th>
                                                <th>Mật khẩu</th>
                                                <th>Giới tính</th>
                                                <th>Email</th>
                                                <th>Số điện thoại</th>
                                                <th>Địa chỉ</th>
                                                <th>Năm sinh</th>
                                                <th>Thời gian tạo TK</th>
                                                <th>Tùy chọn</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $url = base_url();
                                            foreach ($taiKhoans as $taiKhoan) {
                                                echo "<tr>";
                                                echo "<th>".$taiKhoan->MA_TK."</th>";
                                                echo "<th>".$taiKhoan->TEN_TK."</th>";
                                                echo "<th>".md5($taiKhoan->MAT_KHAU)."</th>";
                                                echo "<th>".$taiKhoan->GIOI_TINH."</th>";
                                                echo "<th>".$taiKhoan->EMAIL."</th>";
                                                echo "<th>".$taiKhoan->SDT."</th>";
                                                echo "<th>".$taiKhoan->DIA_CHI."</th>";
                                                echo "<th>".$taiKhoan->NAM_SINH."</th>";
                                                echo "<th>".$taiKhoan->TG_TAO_TK."</th>";
                                                echo "<th>";
                                                echo "<a href='";
                                                echo $url."index.php/taiKhoan/trangquanlynhatro/".$taiKhoan->MA_TK;
                                                echo "' role='button'><img src='http://localhost/dbclpm/media/img/home.png' title='Xem danh sách nhà trọ' width='30' height='30'/></a>";
                                                echo "</th>";
                                                echo "</tr>";
                                            }
                                            ?>
                                        </tbody>
                                        </table>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </div>
                </div>


            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
<script src="http://localhost/dbclpm/media/js/jquery-1.11.1.js"></script>
        <script src="http://localhost/dbclpm/media/js/bootstrap.min.js"></script>
        <script src="http://localhost/dbclpm/media/js/plugins/morris/raphael.min.js"></script>
        <script src="http://localhost/dbclpm/media/js/plugins/morris/morris.min.js"></script>
        <script src="http://localhost/dbclpm/media/js/plugins/morris/morris-data.js"></script>
        
    </body>
</html>
