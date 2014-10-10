<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
         <?php echo form_open("quanHuyen/xulythem") ?>
        Tỉnh:<br>
        <select name="maTinh">
            <?php
            foreach ($tinhThanhs as $tinhThanh) {
               echo "<option value='".$tinhThanh->MA_TINH."'>".$tinhThanh->TEN_TINH."</option>";
            }
            ?>
        </select><br>
        Tên quận huyện<br>
        <input type="text" name="tenHuyen"><br>
        <input type="submit" value="Save">
        <?php echo form_close() ?>
    </body>
</html>
