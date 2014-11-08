<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
         <?php echo form_open("tinhThanh/xulythem") ?>
        Tên tỉnh thành <input type="text" name="tenTinh"><br>
        <input type="submit" value="Save">
        <?php echo form_close() ?>
        <a href="<?php echo base_url();?>index.php/tinhThanh">Quay về trang quản lý tỉnh thành</a><br><br>
    </body>
</html>
