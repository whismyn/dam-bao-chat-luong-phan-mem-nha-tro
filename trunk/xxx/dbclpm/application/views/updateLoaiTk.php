<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo form_open("loaiTk/xulycapnhat") ?>
        Ma loai tai khoan <?php echo $loaiTk->MA_LTK; ?><br>
        Ten loai tai khoan <input type="text" name="tenLoaiTk" value="<?php echo $loaiTk->TEN_LTK; ?>"><br>
        Ghi chu loai tai khoan <input type="text" name="ghiChuLoaiTk" value="<?php echo $loaiTk->GHI_CHU_LTK; ?>"><br>
        <input type="submit" value="Save">
        <input type="hidden" name="maLoaiTk" value="<?php echo $loaiTk->MA_LTK; ?>">
        <?php echo form_close() ?>
    </body>
</html>