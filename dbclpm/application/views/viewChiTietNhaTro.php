<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap-theme.css" type="text/css"/>
    <link rel="stylesheet" href="http://localhost/dbclpm/media/css/bootstrap-theme.min.css" type="text/css"/>
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
		h1{
			color:#F00
		}
		table.infor {
			border:thin;
			background:#9CF;
		}
		table.infor1{
			width:100;
			border: 1px solid black;
			padding: 30px;
		}
		td.td1{
			border: 1px solid black;
			padding: 10px;
			border-spacing:2px;
		}
		tr.tr1{
			
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
                    <li><a href="<?php echo base_url();?>"><img src="http://localhost/dbclpm/media/img/Home-icon.png" width="20" height="20">Trang chủ</a></li>
                    <li><a href="#">Diễn đàn</a></li>
                    
                   
                </ul>
                <form class="navbar-form navbar-left" role="search" action="http://localhost/dbclpm/index.php/nhaTro/timNhaTro" method="post" accept-charset="utf-8">
                    <div class="form-group">
                        <label>Tìm kiếm</label>
                        <input type="text" name="tuKhoa" class="form-control" placeholder="Từ khóa cần tìm...">
                        <button type="submit" class="btn btn-info">Tìm kiếm</button>
                        <button type="button" class="btn btn-info"><a href="<?php echo base_url();?>index.php/nhaTro/timKiemNangCao" class="font-a">Tìm kiếm nâng cao</a></button>
                    </div>
                </form>
    </head>
    <body>
    
<?php  //print_r($nhaTro) ;?>
        <?php  
            foreach ($nhaTro as $nhaTro) {
                
            }
        ?>
        <br>
        <br>
        <h1><?php echo "<i>".$nhaTro->TIEU_DE."</i>"; ?></h1>
<table class="infor">
          <tr>
            <td><img src="http://localhost/dbclpm/media/img/admin.png" style="width:32px;height:32px">
            </td>
            <td>Tên tài khoản: <?php echo "<i>".$nhaTro->TEN_TK."</i>"; ?>
            </td>
            <td>Ngày tạo: <?php echo "<i>".$nhaTro->TG_TAO_NT."</i>"; ?>
            </td>
          </tr>
          <tr>
            <td><img src="http://localhost/dbclpm/media/img/email.png" style="width:32px;height:32px"></td>
            <td>Email liên hệ: <?php echo "<i>".$nhaTro->EMAIL_LH."</i>"; ?>
            </td>
            <td>Cập nhật lần cuối: <?php echo "<i>".$nhaTro->CN_CUOI."</i>"; ?>
            </td>
          </tr>
          <tr>
            <td><img src="http://localhost/dbclpm/media/img/address.png" style="width:32px;height:32px"></td>
            <td>Địa chỉ: <?php echo "<i>".$nhaTro->DIA_CHI_LH."</i>"; ?></td>
          </tr>
        </table>
        
        
        
        <div align="left">
          <table class="infor1">
              <td class="td1"><img src="http://localhost/dbclpm/media/img/phone.png" style="width:32px;height:32px">Điện thoại: <?php echo "<i>".$nhaTro->SDT_LH."</i>"; ?>
              </td>
              <td class="td1"><img src="http://localhost/dbclpm/media/img/money.png" style="width:32px;height:32px">Giá: <?php echo "<i>".$nhaTro->GIA."</i>"; ?>
              </td>
            </tr>
            </table>
            <br>
            <br>
            <br>
            
            <div style="background-color:#0CF; color:black; margin:0px; padding:30px; width:960px">
            <p>
            	<h1> Giới thiệu nhà trọ </h1>
                <br>
            	<?php echo "<i>".$nhaTro->GIOI_THIEU."</i>"; ?>
                <br>
                <br>
                <br>
                Diện tích: <?php echo "<i>".$nhaTro->DIEN_TICH."</i>"; ?>
                <br>
                Số phòng trống: <?php echo "<i>".$nhaTro->CON_PHONG."</i>"; ?>
            </p>
            </div> 
          
          
        </div>
        <h3>Đã duyệt <?php echo "<i>".$nhaTro->DUYET."</i>"; ?></h3>
        
        <?php  //print_r($binhLuans) ;?>
        
        <?php
        $this->table->set_heading('Mã tài khoản', 'Nội dung', 'Báo vi phạm');
        foreach ($binhLuans as $binhLuan) {
            $this->table->add_row(
                    $binhLuan->MA_TK, $binhLuan->NOI_DUNG,
                    anchor('binhLuan/baoViPham/' . $binhLuan->MA_BL,
                            'Báo vi phạm'));
        }
        echo $this->table->generate();
        ?>
        
        <h1>Để lại bình luận của bạn!!!</h1><i>(Bạn phải đăng nhập để có thể bình luận)</i>
        <?php $maTaiKhoan = $this->session->userdata('maTaiKhoan');
                  if($maTaiKhoan==null) echo "null";?> 
        <?php echo form_open("nhaTro/xulythemBinhLuan") ?>
        Nội dung <input type="text" name="noiDung">
        <br>
        <br>
        <br>
        <input type="submit" value="Save" <?php if($maTaiKhoan==NULL) echo 'disabled'; ?>>
        <input type="hidden" name="maNhaTro" value="<?php echo $nhaTro->MA_NT; ?>">
        <?php echo form_close() ?>
        <a href="<?php echo base_url();?>">Đến trang chủ</a><br>       
    </body>
</html>
