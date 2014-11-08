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
                <a class="navbar-brand" href="<?php echo base_url();?>index.php/taiKhoan/trangquantri">Trang quản trị</a>
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
                    <li class="active">
                        <a href="<?php echo base_url();?>index.php/taiKhoan"><span class="glyphicon glyphicon-user"></span> Quản lý tài khoản</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/nhaTro"><span class="glyphicon glyphicon-home"></span> Quản lý nhà trọ</a>
                    </li>
                    <li>
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
                            Thêm tài khoản
                        </h1>
                    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Chỉnh sửa thông tin tài khoản</h3>
                                    </div>
                                    <div class="panel-body">
                                    <div class="form-horizontal" role="form">
                                    <?php echo form_open("taiKhoan/xulycapnhat") ?>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Loại tài khoản:</label>
                                        <div class="col-sm-4">
                                          <select class="form-control" name="maLoaiTk">
                                                <option value="1" <?php if ($taiKhoan->MA_LTK == '1') echo "selected" ?>>Quản trị hệ thống</option>
                                                <option value="3" <?php if ($taiKhoan->MA_LTK == '3') echo "selected" ?>>Thành viên</option>
                                                <option value="2" <?php if ($taiKhoan->MA_LTK == '2') echo "selected" ?>>Chủ nhà trọ</option>
                                          </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Tên tài khoản: </label>
                                        <div class="col-sm-4">
                                          <input type="text" class="form-control bfh-phone" name="tenTaiKhoan" size="35" value="<?php echo $taiKhoan->TEN_TK ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Mật khẩu: </label>
                                        <div class="col-sm-4">
                                          <input type="password" class="form-control bfh-phone" name="matKhau" size="35" value="<?php echo $taiKhoan->MAT_KHAU ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Giới tính: </label>
                                        <div class="col-sm-4">
                                          <select name="gioiTinh" class="form-control">
                                            <option value="1" <?php if ($taiKhoan->GIOI_TINH == '1') echo "selected" ?>>Nam</option>
                                            <option value="0" <?php if ($taiKhoan->GIOI_TINH == '0') echo "selected" ?>>Nu</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email: </label>
                                        <div class="col-sm-4">
                                          <input type="Email" class="form-control bfh-phone" name="email" size="35" value="<?php echo $taiKhoan->EMAIL ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Số điện thoại: </label>
                                        <div class="col-sm-4">
                                          <input type="number" class="form-control bfh-phone" name="soDienThoai" size="35" value="<?php echo $taiKhoan->SDT ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Địa chỉ: </label>
                                        <div class="col-sm-4">
                                          <input type="text" class="form-control bfh-phone" name="diaChi" size="35" value="<?php echo $taiKhoan->DIA_CHI ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Năm sinh: </label>
                                        <div class="col-sm-4">
                                          <input type="number" class="form-control bfh-phone" name="namSinh" size="35" value="<?php echo $taiKhoan->NAM_SINH ?>">
                                          <br>
                                          <input type="submit" class="btn btn-default" value="Save"></input>
                                          <button type="button" class="btn btn-default"><a href="<?php echo base_url();?>index.php/taiKhoan" class="font-a">Hủy</a></button>
                                          <input type="hidden" name="maTaiKhoan" value="<?php echo $taiKhoan->MA_TK; ?>">
                                        </div>
                                    </div>
                                    <?php echo form_close() ?>
                                </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
