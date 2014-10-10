<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo form_open("loaiTk/xulythem") ?>
        Ten loai tai khoan <input type="text" name="tenLoaiTk"><br>
        Ghi chu loai tai khoan <input type="text" name="ghiChuLoaiTk"><br>
        <input type="submit" value="Save">
        <?php echo form_close() ?>
    </body>
</html>
