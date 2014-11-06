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
        <h1>Tìm kiếm nhà trọ online!</h1>
        <?php echo form_open("nhaTro/timNhaTro") ?>
        <div class="col-xs-4">
        <input type="text" name="tuKhoa" class="form-control" placeholder="Từ khóa cần tìm..."></div>
        <button type="submit" class="btn btn-info">Tìm kiếm</button>
        <button type="button" class="btn btn-info"><a href="<?php echo base_url();?>index.php/nhaTro/timKiemNangCao" class="font-a">Tìm kiếm nâng cao</a></button>
        <?php echo form_close() ?>

      </div>
    </div>

    <div class="container" >
      <!-- Example row of columns -->
  <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////-->
        <h2><center>Thay đổi thông tin tài khoản</center></h2>
		<div  style="width:30%; margin-left:auto; margin-right:auto;">
		<?php 
			echo form_open("taiKhoan/xulythaydoi") ;
		?>
		
		<div>
			<label>Loại tài khoản</label><br>
			<?php if($taiKhoan->MA_LTK == 1) echo("Quản trị hệ thống");?>
			<?php if($taiKhoan->MA_LTK == 2) echo("Chủ nhà trọ");?>
			<?php if($taiKhoan->MA_LTK == 3) echo("Thành viên");?> 
		</div>
		<br>
		
		
		<div>
			<label>Tên tài khoản</label> <br>
			<input class="form-control" type="text" readonly="readonly" name="tenTaiKhoan" value="<?php echo $taiKhoan->TEN_TK ?>">
		</div>
		<br>
		<div>
			<label>Mật khẩu</label> <br>
			<input class="form-control" type="password" name="matKhau" value="<?php echo $taiKhoan->MAT_KHAU ?>"><br>
		</div>
		<div>
			<label>Giới tính</label> <br>
			<select name="gioiTinh" class="form-control">
				<option value="1" <?php if ($taiKhoan->GIOI_TINH == '1') echo "selected" ?>>Nam</option>
				<option value="0" <?php if ($taiKhoan->GIOI_TINH == '0') echo "selected" ?>>Nu</option>
			</select><br>
		</div>
		<div>
			<label>Email</label> <br>
			<input class="form-control" type="email" name="email" value="<?php echo $taiKhoan->EMAIL ?>"><br>
		</div>
		<div>
			<label>Số điện thoại</label> <br>
			<input class="form-control" type="text" name="soDienThoai" value="<?php echo $taiKhoan->SDT ?>"><br>
		</div>
		<div>
			<label>Địa chỉ</label> <br>
			<input class="form-control" type="text" name="diaChi" value="<?php echo $taiKhoan->DIA_CHI ?>"><br>
		</div>
		<div>
			<label>Năm sinh</label> <br>
			<input class="form-control" type="number" name="namSinh" value="<?php echo $taiKhoan->NAM_SINH ?>"><br>
		</div>
		<div >
			<input type="submit" value="Lưu" class="btn btn-success">
			<input type="hidden" name="maTaiKhoan" value="<?php echo $taiKhoan->MA_TK; ?>">
		</div>
        <?php echo form_close() ?>
		</div>
  <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    </div> <!-- /container -->
	<hr>

    <footer>
        <p>&copy; Đảm bảo chất lượng phần mềm</p>
    </footer>
    </body>
</html>










