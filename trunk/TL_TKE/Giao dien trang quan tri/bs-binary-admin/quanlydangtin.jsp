<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Trang Quản Trị</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> &nbsp; <a href="#" class="btn btn-danger square-btn-adjust">Thông tin tài khoản</a><a href="#" class="btn btn-danger square-btn-adjust">Đăng xuất</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a  href="index.html"><i class="fa fa-dashboard fa-3x"></i> Tổng quan</a>
                    </li>
                     <li>
                        <a  href="ui.html"><i class="glyphicon glyphicon-phone fa-3x"></i>Quản lý sản phẩm</a>
                    </li>
                    <li>
                        <a   href="nguoidung.html"><i class="glyphicon glyphicon-user fa-3x"></i> Quản lý người dùng</a>
                    </li>
						   <li  >
                        <a   href="thongbao.html"><i class="fa fa-bell-o fa-3x"></i> Quản lý thông báo</a>
                    </li>
                    <li>
                        <a  href="nhasanxuat.html"><i class="glyphicon glyphicon-home fa-3x"></i> Quản lý nhà sản xuất</a>
                    </li>
                    <li>
                        <a class="active-menu" href="quanlybinhluan.html"><i class="glyphicon glyphicon-comment fa-3x"></i> Quản lý bình luận</a>
                    </li>
                    <li>
                        <a  href="quanlydondathang.html"><i class="glyphicon glyphicon-shopping-cart fa-3x"></i> Quản lý đơn đặt hàng</a>
                    </li>
                    <li>
                        <a href="#"><i class="glyphicon glyphicon-usd fa-3x"></i> Thống Kê<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"></a>
                            </li>
                            <li>
                                <a href="thongke-doanhthu.html">Doanh thu</a>
                            </li>
                            <li>
                                <a href="thongke-nguoidung.html">Người dùng</a>
                            </li>
                            <li>
                                <a href="thongke-sanpham.html">Sản phẩm</a>
                            </li>                            
                        </ul>
                      </li>
                    
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Quản lý đăng tin</h2>   
                        <h5>Xin chào Quách Hoàng Phúc.</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Bảng liệt kê các tin đã đăng trong hệ thống
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Ngày đăng</th>
                                            <th>Tiêu đề</th>
                                            <th>Người đăng</th>
                                            <th>Địa chỉ</th>
                                            <th>Giá</th>
                                            <th>Diện tích</th>
                                            <th>Thao tác</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>19/09/2014</td>
                                            <td>CHO THUÊ NHÀ TRỌ ĐƯỜNG 3-2 PHƯỜNG HƯNG LỢI NINH KIỀU</td>
                                            <td>Hoàng Phúc</td>
                                            <td>37, Quảng Trọng Hoàng, Phường Hưng Lợi, Quận Ninh Kiều, TP Cần Thơ</td>
                                            <td>1.300.000 VNĐ</td>
                                            <td>15 m²</td>
                                            <td class="center">
                                                <a class="glyphicon glyphicon-remove"></a>
                                                <a class="glyphicon glyphicon-ok"></a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>07/08/2014</td>
                                            <td>Cho thuê nhà trọ đối diện BV Nhi đồng Cần Thơ mới, gần Trường ĐH Nam Cần Thơ</td>
                                            <td>Anh Thư</td>
                                            <td>Đối diện Bệnh Nhi đồng Cần Thơ đang xây dựng</td>
                                            <td>1.000.000 VNĐ</td>
                                            <td>22 m²</td>
                                            <td class="center">
                                                <a class="glyphicon glyphicon-remove"></a>
                                                <a class="glyphicon glyphicon-ok"></a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>01/07/2014</td>
                                            <td>CHO THUÊ PHÒNG TRỌ ĐƯỜNG VÕ VĂN KIỆT GIA MỀM</td>
                                            <td>Nguyễn Hoài Nam</td>
                                            <td>Đường Võ Văn Kiệt, Phường An Hòa, Quận Ninh Kiều, Cần Thơ</td>
                                            <td>700.000 VNĐ</td>
                                            <td>21.00 m²</td>
                                            <td class="center">
                                                <a class="glyphicon glyphicon-remove"></a>
                                                <a class="glyphicon glyphicon-ok"></a>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeX">
                                            <td>15/06/2014</td>
                                            <td>Cho thuê nhà trọ 118/2B đường 3/2 quận Ninh Kiều thoáng mát sạch sẽ tiện nghi</td>
                                            <td>Nguyễn Quí Nghĩa</td>
                                            <td>118/2B Đường 3 tháng 2, Phường Hưng Lợi, Quận Ninh Kiều, Cần Thơ</td>
                                            <td>1.500.000 VNĐ</td>
                                            <td>27 m²</td>
                                            <td class="center">
                                                <a class="glyphicon glyphicon-remove"></a>
                                                <a class="glyphicon glyphicon-ok"></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
             <p><a class="btn btn-primary btn-lg" role="button">Thêm bình luận (Admin)</a></p>    
                
              
   
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>