<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo form_open("tinhThanh/xulycapnhat") ?>
        Mã tỉnh <?php echo $tinhThanh->MA_TINH; ?><br>
        Tên tỉnh  <input type="text" name="tenTinh" value="<?php echo $tinhThanh->TEN_TINH; ?>"><br>
        <input type="submit" value="Save">
        <input type="hidden" name="maTinh" value="<?php echo $tinhThanh->MA_TINH; ?>">
        <?php echo form_close() ?>
    </body>
</html>
