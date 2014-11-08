<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo form_open("quanHuyen/xulycapnhat") ?>
        Mã huyện <?php echo $quanHuyen->MA_HUYEN; ?><br>
        Tỉnh<br>
        <select name="maTinh">
            <?php
            foreach ($tinhThanhs as $tinhThanh) {
               echo "<option value='".$tinhThanh->MA_TINH."' <?php if($quanHuyen->MA_TINH == $tinhThanh->MA_TINH) echo 'selected';?>".$tinhThanh->TEN_TINH."</option>";
            }
            ?>
        </select><br>
        Tên huyện<br>
        <input type="text" name="tenHuyen" value="<?php echo $quanHuyen->TEN_HUYEN; ?>"><br>
        
        <input type="submit" value="Save">
        <input type="hidden" name="maHuyen" value="<?php echo $quanHuyen->MA_HUYEN; ?>">
        <?php echo form_close() ?>
    </body>
</html>
