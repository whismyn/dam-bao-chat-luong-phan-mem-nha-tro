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
            $maHuyen = $this->session->userdata('maHuyen');
            foreach ($quanHuyens as $quanHuyen) {
               echo "<option value='".$quanHuyen->MA_HUYEN."'>".$quanHuyen->TEN_HUYEN."</option>";
               echo "<option ";
               echo "value='".$quanHuyen->MA_HUYEN."'";
               if ($quanHuyen->MA_HUYEN == $maHuyen) echo "selected";
               echo ">";
               echo $quanHuyen->TEN_HUYEN;   
               echo "</option>";
            }
            ?>
        </select><br>
        Tên phường xã<br>
        <input type="text" name="tenXa"><br>
        <input type="submit" value="Save">
        <?php echo form_close() ?>
        <a href="<?php echo base_url();?>">Đến trang chủ</a><br>
        <a href="<?php echo base_url();?>index.php/taiKhoan/trangquantri">Đến trang admin</a><br>
        <a href="<?php echo base_url();?>index.php/phuongXa">Đến trang quản lý phường xã</a><br>
    </body>
</html>
