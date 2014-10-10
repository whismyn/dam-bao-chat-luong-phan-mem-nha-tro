<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo form_open("nhaTro/xulythem") ?>
        Mã xã<br>
        <input type="text" name="maXa"><br>
        Số nhà<br>
        <input type="text" name="soNha"><br>
        Diện tích<br>
        <input type="text" name="dienTich"><br>
        Còn phòng<br>
        <input type="text" name="conPhong"><br>
        Giá<br>
        <input type="number" name="gia"><br>
        Người liên hệ<br>
        <input type="text" name="nguoiLienHe"><br>
        Số điện thoại liên hệ<br>
        <input type="text" name="sdtLienHe"><br>
        Email liên hệ<br>
        <input type="text" name="emailLienHe"><br>
        Địa chỉ liên hệ<br>
        <input type="text" name="diaChiLienHe"><br>
        Tiêu đề<br>
        <input type="text" name="tieuDe"><br>
        Giới thiệu<br>
        <input type="text" name="gioiThieu"><br>
        <input type="submit" value="Save">
        <?php echo form_close() ?>
    </body>
</html>
