<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo form_open("taiKhoan/xulycapnhat") ?>
        Loai tai khoan<br>
        <select name="maLoaiTk">
            <option value="3" <?php if ($taiKhoan->MA_LTK == '3') echo "selected" ?>>Thanh vien</option>
            <option value="2" <?php if ($taiKhoan->MA_LTK == '2') echo "selected" ?>>Chu nha tro</option>
        </select><br>
        Ten tai khoan <br>
        <input type="text" name="tenTaiKhoan" value="<?php echo $taiKhoan->TEN_TK ?>"><br>
        Mat khau <br>
        <input type="password" name="matKhau" value="<?php echo $taiKhoan->MAT_KHAU ?>"><br>
        Gioi tinh <br>
        <select name="gioiTinh">
            <option value="1" <?php if ($taiKhoan->GIOI_TINH == '1') echo "selected" ?>>Nam</option>
            <option value="0" <?php if ($taiKhoan->GIOI_TINH == '0') echo "selected" ?>>Nu</option>
        </select><br>
        Email <br>
        <input type="text" name="email" value="<?php echo $taiKhoan->EMAIL ?>"><br>
        So dien thoai <br>
        <input type="text" name="soDienThoai" value="<?php echo $taiKhoan->SDT ?>"><br>
        Dia chi <br>
        <input type="text" name="diaChi" value="<?php echo $taiKhoan->DIA_CHI ?>"><br>
        Nam sinh <br>
        <input type="number" name="namSinh" value="<?php echo $taiKhoan->NAM_SINH ?>"><br>
        <input type="submit" value="Save">
        <input type="hidden" name="maTaiKhoan" value="<?php echo $taiKhoan->MA_TK; ?>">
        <?php echo form_close() ?>
    </body>
</html>