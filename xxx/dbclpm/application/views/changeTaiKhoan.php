<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Thông tin cá nhân</title>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap.min.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap-theme.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap-theme.min.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/admin.css" type="text/css"/>
        <link rel="stylesheet" href="http://localhost/dbclpm/media/css/mycss.css" type="text/css"/>
        <script src="http://localhost/dbclpm/media/js/bootstrap.js"></script>
        <script src="http://localhost/dbclpm/media/js/bootstrap.min.js"></script>
        <script src="http://localhost/dbclpm/media/js/jquery-1.11.1.min.js"></script>
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
                            <li><a href="<?php echo base_url(); ?>index.php/chuDe/"><img src="http://localhost/dbclpm/media/img/forum_icon.png" width="25" height="25">Diễn đàn</a></li>


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
        <div class="logout">
            <p><span class="glyphicon glyphicon-chevron-right"></span><a href="<?php echo base_url()."index.php/taiKhoan/dangXuat"; ?>">Logout</a></p>
        </div>
        <div class="divmenu">
            <div id='cssmenu'>
                <ul>
                   <li class="has-sub"><a href="<?php echo base_url()."index.php/taiKhoan/thayDoi/".$maTaiKhoan; ?>"><span>Thông tin cá nhân</span></a>
                   </li>
                   <li class="has-sub"><a href="<?php echo base_url(); ?>/index.php/taiKhoan/doimatkhau/<?php echo $taiKhoan->MA_TK ;?>"><span>Thay đổi mật khẩu</span></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-8">
        <div class="border-center">
            <h3>Thông tin cá nhân</h3>
            <hr width="100%">
            <form class="form-horizontal" role="form" action="http://localhost/dbclpm/index.php/taiKhoan/xulythaydoi" method="post" accept-charset="utf-8">
            <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Loại tài khoản: </label>
                <div class="col-sm-4">
                    <p><?php echo $loaitk;?></p>
                </div>
            </div>
            <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Tên tài khoản: </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control bfh-phone" size="35" readonly="readonly" name="tenTaiKhoan" value="<?php echo $taiKhoan->TEN_TK ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Giới tính: </label>
                <div class="col-sm-4">
                    <select name="gioiTinh" class="form-control">
                        <option value="1" <?php if ($taiKhoan->GIOI_TINH == '1') echo "selected" ?>>Nam</option>
                        <option value="0" <?php if ($taiKhoan->GIOI_TINH == '0') echo "selected" ?>>Nữ</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Email: </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control bfh-phone" size="35" name="email" value="<?php echo $taiKhoan->EMAIL ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Số điện thoại: </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control bfh-phone" size="35" name="soDienThoai" value="<?php echo $taiKhoan->SDT ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Địa chỉ: </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control bfh-phone" size="35" name="diaChi" value="<?php echo $taiKhoan->DIA_CHI ?>">
                </div>
            </div>
            <div class="form-group">
                <label for="firstname" class="col-sm-2 control-label">Năm sinh: </label>
                <div class="col-sm-4">
                    <input type="text" class="form-control bfh-phone" size="35" name="namSinh" value="<?php echo $taiKhoan->NAM_SINH ?>"><br>
                    <input type="submit" class="btn btn-info" value="Lưu"></input>
                    <input type="hidden" name="maTaiKhoan" value="<?php echo $taiKhoan->MA_TK; ?>">
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
</html>                                     