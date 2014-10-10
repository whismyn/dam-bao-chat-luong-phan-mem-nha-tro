<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo form_open("taiKhoan/xulydangnhap") ?>
        Tên tài khoản:<br>
        <input type="text" name="tenTaiKhoan"><br>
        Mật khẩu:<br>
        <input type="password" name="matKhau"><br>
        <input type="submit" value="Đăng nhập">
        <a href="<?php echo base_url();?>index.php/taiKhoan/layMatKhau">Lấy lại mật khẩu</a><br><br>
        <?php echo form_close() ?>
    </body>
</html>
