<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo form_open("taiKhoan/xulythem") ?>
        Loai tai khoan<br>
        <select name="maLoaiTk">
            <option value="3">Thanh vien</option>
            <option value="2">Chu nha tro</option>
            <option value="1">Quan tri he thong</option>
        </select><br>
        Ten tai khoan <br>
        <input type="text" name="tenTaiKhoan"><br>
        Mat khau <br>
        <input type="password" name="matKhau"><br>
        Gioi tinh <br>
        <select name="gioiTinh">
            <option value="1">Nam</option>
            <option value="0">Nu</option>
        </select><br>
        Email <br>
        <input type="text" name="email"><br>
        So dien thoai <br>
        <input type="text" name="soDienThoai"><br>
        Dia chi <br>
        <input type="text" name="diaChi"><br>
        Nam sinh <br>
        <input type="number" name="namSinh"><br>
        <input type="submit" value="Save">
        <?php echo form_close() ?>
    </body>
</html>