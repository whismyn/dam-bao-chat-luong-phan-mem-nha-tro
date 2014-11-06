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
        <h2>Tìm kiếm nhà trọ online!</h2>
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
                    $atrb = array('onSubmit' => 'return check();');
                    echo form_open("taiKhoan/xulydoimatkhau",$atrb) ;
		?>

                    
		<div>
			<label>Mật khẩu củ</label> <br>
                        <input class="form-control" type="password" name="matkhaucu" value=" " id="matkhaucu" ><br>
		</div>
		<div>
			<label>Mật khẩu mới</label> <br>
			<input class="form-control" type="password" name="matkhaumoi" id="matkhaumoi"><br>
		</div>
		<div>
			<label>Nhập lại</label> <br>
			<input class="form-control" type="password" id="nhaplai"><br>
		</div>
		<div >
			<input type="hidden" name="maTaiKhoan" value="<?php echo $taiKhoan->MA_TK; ?>">
			<input type="submit" value="Lưu" class="btn btn-success">
		</div>
                <?php echo form_close() ?>
                    <h3 id="thongbao" style="color:red;"><?php echo $thongbao ;?></h3>
		</div>
        
  <!--//////////////////////////////////////////////////////////////////////////////////////////////////////////-->
    </div> <!-- /container -->
	<hr>

    <footer>
        <p>&copy; Đảm bảo chất lượng phần mềm</p>
    </footer>
        
    </body>
    
    <script type="text/javascript">
            $( document ).ready(function() {
                
                
            });
           function check(){
               var $nhaplai = document.getElementById("nhaplai").value ;
               var $matkhaumoi = document.getElementById("matkhaumoi").value;
               var $matkhaucu = document.getElementById("matkhaucu").value;
               if($nhaplai != $matkhaumoi){
                   document.getElementById("thongbao").innerHTML = "Mật khẩu không trùng khớp!";
                   document.getElementById("nhaplai").focus();
                   return false;
               }
               if($matkhaucu == ""){
                   document.getElementById("thongbao").innerHTML = "Hãy nhập mật khẩu củ!";
                   document.getElementById("matkhaucu").focus();
                   return false;
               }
               if($matkhaumoi == ""){
                   document.getElementById("thongbao").innerHTML = "Hãy nhập mật khẩu mới!";
                   document.getElementById("matkhaumoi").focus();
                   return false;
               }
                   
               return true;
           }
    </script>
</html>










