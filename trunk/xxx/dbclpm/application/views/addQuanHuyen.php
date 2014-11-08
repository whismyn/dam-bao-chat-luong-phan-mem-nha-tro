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
            $maTinh = $this->session->userdata('maTinh');
            foreach ($tinhThanhs as $tinhThanh) {
               echo "<option ";
               echo "value='".$tinhThanh->MA_TINH."'";
               if ($tinhThanh->MA_TINH == $maTinh) echo "selected";
               echo ">";
               echo $tinhThanh->TEN_TINH;   
               echo "</option>";
            }
            ?>
        </select><br>
        Tên quận huyện<br>
        <input type="text" name="tenHuyen"><br>
        <input type="submit" value="Save">
        <?php echo form_close() ?>
        <a href="<?php echo base_url();?>index.php/quanHuyen">Trở về trang quản lý quận huyện</a><br><br>
    </body>
</html>
