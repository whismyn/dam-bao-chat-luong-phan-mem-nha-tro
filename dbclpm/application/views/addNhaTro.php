<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="../../media/js/jquery.chained.min.js"></script>
        <script>
            $(function() {
                $("#series").chained("#mark");
                $("#model").chained("#series");
            });

        </script>
        <title></title>
    </head>
    <body>
        <?php echo form_open("nhaTro/xulythem") ?>
        Tỉnh/Thành phố<br>
        <select id="mark"> 
            <option value="">----</option>
            <?php
            foreach ($tinhThanhs as $tinhThanh) {
                echo "<option value=" . $tinhThanh->MA_TINH . " class=".$tinhThanh->MA_TINH.">";
                echo $tinhThanh->TEN_TINH;
                echo "</option>";
            }
            ?>
        </select><br>
        Quận/Huyện<br>
        <select id="series">
            <option value="">--</option>
            <?php
            foreach ($quanHuyens as $quanHuyen) {
                echo "<option value=" . $quanHuyen->MA_HUYEN . " class=".$quanHuyen->MA_TINH.">";
                echo $quanHuyen->TEN_HUYEN;
                echo "</option>";
            }
            ?>
        </select><br>
        Xã<br>
        <select name="maXa"  id="model">
            <option value="">--</option>
            <?php
            foreach ($phuongXas as $phuongXa) {
                echo "<option value=" . $phuongXa->MA_XA . " class=".$phuongXa->MA_HUYEN.">";
                echo $phuongXa->TEN_XA;
                echo "</option>";
            }
            ?>
        </select><br>

        Số nhà<br>
        <input type="text" name="soNha"><br>
        Diện tích<br>
        <input type="text" name="dienTich"><br>
        Còn phòng<br>
        <input type="text" name="conPhong"><br>
        Giá<br>
        <input type="number" name="gia"><br>
        Người liên hệ<br>
        <input type="text" name="nguoiLienHe"><br>
        Số điện thoại liên hệ<br>
        <input type="text" name="sdtLienHe"><br>
        Email liên hệ<br>
        <input type="text" name="emailLienHe"><br>
        Địa chỉ liên hệ<br>
        <input type="text" name="diaChiLienHe"><br>
        Tiêu đề<br>
        <input type="text" name="tieuDe"><br>
        Giới thiệu<br>
        <input type="text" name="gioiThieu"><br>
        <input type="submit" value="Save">
        <?php echo form_close() ?>
        <a href="<?php echo base_url();?>">Đến trang chủ</a><br>
        <a href="<?php echo base_url();?>index.php/taiKhoan/trangquantri">Đến trang admin</a><br>
        <a href="<?php echo base_url();?>index.php/nhaTro">Đến trang quản lý nhà trọ</a><br>
    </body>
</html>
