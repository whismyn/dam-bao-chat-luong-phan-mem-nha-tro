<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo form_open("phuongXa/xulycapnhat") ?>
        Mã phường xã <?php echo $phuongXa->MA_XA; ?><br>
        Tỉnh<br>
        <select name="maHuyen">
            <?php
            foreach ($quanHuyens as $quanHuyen) {
               echo "<option value='".$quanHuyen->MA_HUYEN."' <?php if($phuongXa->MA_XA == $quanHuyen->MA_HUYEN) echo 'selected';?>".$quanHuyen->TEN_HUYEN."</option>";
            }
            ?>
        </select><br>
        Tên xã<br>
        <input type="text" name="tenXa" value="<?php echo $phuongXa->TEN_XA; ?>"><br>
        
        <input type="submit" value="Save">
        <input type="hidden" name="maXa" value="<?php echo $phuongXa->MA_XA; ?>">
        <?php echo form_close() ?>
    </body>
</html>
