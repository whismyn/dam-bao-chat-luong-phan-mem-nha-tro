<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
         <?php echo form_open("phuongXa/xulythem") ?>
        Huyện:<br>
        <select name="maHuyen">
            <?php
            foreach ($quanHuyens as $quanHuyen) {
               echo "<option value='".$quanHuyen->MA_HUYEN."'>".$quanHuyen->TEN_HUYEN."</option>";
            }
            ?>
        </select><br>
        Tên phường xã<br>
        <input type="text" name="tenXa"><br>
        <input type="submit" value="Save">
        <?php echo form_close() ?>
    </body>
</html>
