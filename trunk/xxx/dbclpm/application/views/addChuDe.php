<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Thêm chủ đề</title>
        <script type="text/javascript" src="http://localhost/dbclpm/media/js/tinymce/tinymce.min.js"></script>
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
        <script type="text/javascript">
            tinymce.init({
                selector: "textarea#elm1",
                theme: "modern",
                width: 900,
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
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>"><img src="http://localhost/dbclpm/media/img/Home-icon.png" width="20" height="20">Trang chủ</a>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>index.php/chuDe"><img src="http://localhost/dbclpm/media/img/Home-icon.png" width="20" height="20">Diễn đàn</a>
                    <?php
                    $maLoaiTaiKhoan = $this->session->userdata("maLoaiTaiKhoan");
                   
            ?>
        </div>
        <div class="navbar-collapse collapse">
          <div class="navbar-form navbar-right" role="form">
            <?php 
            $maTaiKhoan = $this->session->userdata('maTaiKhoan');
            $tenTaiKhoan = $this->session->userdata('tenTaiKhoan');
            //$maLoaiTaiKhoan = $this->session->userdata('maLoaiTaiKhoan');
            $url = base_url();
            if($tenTaiKhoan == null){
                echo "<button class = 'btn btn-success'><a href = '".$url."index.php/taiKhoan/dangNhap' class = 'font-a'>Đăng nhập</a></button>";
            } else{
                echo "<span class = 'font'>Xin chào <a href = '".$url."index.php/taiKhoan/thayDoi/".$maTaiKhoan."'>".$tenTaiKhoan.", </a></span>";
                echo "<a href = '".$url."index.php/taiKhoan/dangXuat'>Đăng xuất</a>";
                echo "&nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        &nbsp;
                        ";
            }
            if($maLoaiTaiKhoan == 1){
                echo "<a href = '".$url."index.php/taiKhoan/trangquantri'><img src = 'http://localhost/dbclpm/media/img/admin-icon.png' width = '20' height = '20'/>Quản trị hệ thống</a>";
            } else if($maLoaiTaiKhoan == 2){
                echo "<a href = '".$url."index.php/taiKhoan/trangquanlynhatro/".$maTaiKhoan."'><img src = 'http://localhost/dbclpm/media/img/admin-icon.png' width = '20' height = '20'/>Quản trị nhà trọ</a>";
            }
        ?>
          </div>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      
                </div>

                <div class="container">
                    <!-- Example row of columns -->

                    <div class="row">
                        <div class="diendan">
                        <div class="header-diendan">
                            <p style="margin-left:15px">
                              Thêm chủ đề con vào diễn đàn
                            </p>
                        </div>
                        <div class="header-diendan2">
                        </div>
                        <div class="themdiendan">
                            <div class="form-horizontal" role="form">
                                <?php echo form_open("chuDe/xulythem") ?>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tiêu đề:</label>
                                    <div class="col-sm-4">
                                        <input type="text" class="form-control" name="tieuDe">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Nội dung:</label>
                                    <div class="col-sm-10">
                                        <textarea id="elm1" name="noiDung"></textarea><br>
                                        <input type="submit" value="Save" class="btn btn-info">
                                    </div>
                                </div>
                                <?php echo form_close() ?>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>

                <footer>
                    <p>&copy; Đảm bảo chất lượng phần mềm</p>
                </footer>
            </div> <!-- /container -->
    </body>
</html>
