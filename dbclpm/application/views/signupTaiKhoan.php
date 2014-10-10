<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo form_open("taiKhoan/xulydangky") ?>
        Loại tài khoản<br>
        <select name="maLoaiTk">
            <option value="3">Thành viên</option>
            <option value="2">Chủ nhà trọ</option>
        </select><br>
        Tên tài khoản<br>
        <input type="text" name="tenTaiKhoan"><br>
        Mật khẩu <br>
        <input type="password" name="matKhau"><br>
        Giới tính <br>
        <select name="gioiTinh">
            <option value="1">Nam</option>
            <option value="0">Nu</option>
        </select><br>
        Email <br>
        <input type="text" name="email"><br>
        Số điện thoại <br>
        <input type="text" name="soDienThoai"><br>
        Địa chỉ <br>
        <input type="text" name="diaChi"><br>
        Năm sinh <br>
        <input type="number" name="namSinh"><br>
        <input type="submit" value="Save">
        <?php echo form_close() ?>
    </body>
</html>