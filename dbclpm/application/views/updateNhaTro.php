<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo form_open("nhaTro/xulycapnhat") ?>
        Mã xã<br>
        <input type="text" name="maXa" value="<?php echo $nhaTro->MA_XA; ?>"><br>
        Số nhà<br>
        <input type="text" name="soNha" value="<?php echo $nhaTro->SO_NHA; ?>"><br>
        Diện tích<br>
        <input type="text" name="dienTich" value="<?php echo $nhaTro->DIEN_TICH; ?>"><br>
        Còn phòng<br>
        <input type="text" name="conPhong" value="<?php echo $nhaTro->CON_PHONG; ?>"><br>
        Giá<br>
        <input type="number" name="gia" value="<?php echo $nhaTro->GIA; ?>"><br>
        Người liên hệ<br>
        <input type="text" name="nguoiLienHe" value="<?php echo $nhaTro->NGUOI_LH; ?>"><br>
        Số điện thoại liên hệ<br>
        <input type="text" name="sdtLienHe" value="<?php echo $nhaTro->SDT_LH; ?>"><br>
        Email liên hệ<br>
        <input type="text" name="emailLienHe" value="<?php echo $nhaTro->EMAIL_LH; ?>"><br>
        Địa chỉ liên hệ<br>
        <input type="text" name="diaChiLienHe" value="<?php echo $nhaTro->DIA_CHI_LH; ?>"><br>
        Tiêu đề<br>
        <input type="text" name="tieuDe" value="<?php echo $nhaTro->TIEU_DE; ?>"><br>
        Giới thiệu<br>
        <input type="text" name="gioiThieu" value="<?php echo $nhaTro->GIOI_THIEU; ?>"><br>
        <input type="submit" value="Save">
        <input type="hidden" name="maNhaTro" value="<?php echo $nhaTro->MA_NT; ?>">
        <?php echo form_close() ?>
    </body>
</html>
