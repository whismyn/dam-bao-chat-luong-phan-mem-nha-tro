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
		<script type="text/javascript" src="http://localhost/dbclpm/media/js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript" src="http://localhost/dbclpm/media/js/jquery.chained.min.js"></script>
        <script>
            $(function() {
                $("#series").chained("#mark");
                $("#model").chained("#series");
            });
        </script>
		<script type="text/javascript">
            tinymce.init({
                selector: "textarea#elm1",
                theme: "modern",
                width: 800,
                height: 300,
				relative_urls : false,
				remove_script_host : false,
                plugins: [
                    "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                    "save table contextmenu directionality emoticons template paste textcolor"
                ],
                content_css: "css/content.css",
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | responsivefilemanager | print preview media fullpage | forecolor backcolor emoticons",
                style_formats: [
                    {title: 'Bold text', inline: 'b'},
                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                    {title: 'Table styles'},
                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                ],
				external_filemanager_path:"<?php echo base_url(); ?>filemanager/",
			   filemanager_title:"Responsive Filemanager" ,
			   external_plugins: { "filemanager" : "<?php echo base_url(); ?>/filemanager/plugin.min.js"}
            });
        </script>
    </head>
    <body>
<<<<<<< .mine
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
                    <li>
                        <a href="<?php echo base_url();?>index.php/taiKhoan"><span class="glyphicon glyphicon-user"></span> Quản lý tài khoản</a>
                    </li>
                    <li class="active">
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
                            Cập nhật thông tin nhà trọ
                        </h1>
                    
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h3 class="panel-title"><i class="fa fa-bar-chart-o fa-fw"></i> Chỉnh sửa thông tin nhà trọ</h3>
                                    </div>
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
                                          <input type="text" class="form-control bfh-phone" name="tieuDe" value="<?php echo $nhaTro->TIEU_DE; ?>" size="35">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Giới thiệu: </label>
                                        <div class="col-sm-4">
										  <textarea id="elm1" name="gioiThieu"><?php echo $nhaTro->GIOI_THIEU; ?></textarea><br>
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
        
=======
        
    </body>
</html>
