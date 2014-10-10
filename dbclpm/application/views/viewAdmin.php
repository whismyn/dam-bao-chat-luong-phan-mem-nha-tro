<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo "<h1>Chào mừng đến trang quản trị</h1>";
        ?>
        <h1>Thao tác với tài khoản</h1>
        <a href="<?php echo base_url();?>index.php/taiKhoan/dangXuat">Đăng xuất</a><br><br>
        <a href="<?php echo base_url();?>index.php/taiKhoan/thayDoi">Đổi thông tin cá nhân</a><br><br>
        
        <h1>Các chức năng của quản trị</h1>
        <a href="<?php echo base_url();?>index.php/loaiTK">Quản lý loại tài khoản</a><br><br>
        <a href="<?php echo base_url();?>index.php/taiKhoan">Quản lý tài khoản</a><br><br>
        <a href="<?php echo base_url();?>index.php/tinhThanh">Quản lý tỉnh thành</a><br><br>
        <a href="<?php echo base_url();?>index.php/quanHuyen">Quản lý quận huyện</a><br><br>
        <a href="<?php echo base_url();?>index.php/phuongXa">Quản lý phường xã</a><br><br>
        <a href="<?php echo base_url();?>index.php/nhaTro">Quản lý nhà trọ</a><br><br>
        <a href="<?php echo base_url();?>index.php/taiKhoan/quanLyChuNhatro">Quản lý chủ nhà trọ</a><br><br>
        <a href="<?php echo base_url();?>index.php/nhaTro/dangTin">Quản lý đăng tin</a><br><br>
        <a href="<?php echo base_url();?>index.php/binhLuan/quanLyBinhLuan">Quản lý bình luận</a><br><br>
        <a href="<?php echo base_url();?>index.php/Email">Gửi email</a><br><br>
        <br>
        
    </body>
</html>
