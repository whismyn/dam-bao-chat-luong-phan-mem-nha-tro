<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script type="text/javascript" src="../../media/js/jquery.chained.min.js"></script>
        <script>
            $(function() {
                $("#series").chained("#mark");
                $("#model").chained("#series");
            });
        </script>
    </head>
    <body>
        <?php echo form_open("nhaTro/xulycapnhat") ?>
        <?php
            //print_r($diachi);
            foreach ($diachi as $diachi) {
                $maTinh = $diachi->MA_TINH;
                $maHuyen = $diachi->MA_HUYEN;
                $maXa = $diachi->MA_XA;
            }
        ?>
        Tỉnh/Thành phố<br>
        <select id="mark"> 
            <option value="">----</option>
            <?php
            foreach ($tinhThanhs as $tinhThanh) {
                echo "<option value=" . $tinhThanh->MA_TINH . " class=".$tinhThanh->MA_TINH." ";
                if($tinhThanh->MA_TINH == $maTinh) echo "selected";
                echo ">";
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
                echo "<option value=" . $quanHuyen->MA_HUYEN . " class=".$quanHuyen->MA_TINH." ";
                if($quanHuyen->MA_HUYEN == $maHuyen) echo "selected";
                echo ">";
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
                echo "<option value=" . $phuongXa->MA_XA . " class=".$phuongXa->MA_HUYEN." ";
                if($phuongXa->MA_XA == $maXa) echo "selected";
                echo ">";
                echo $phuongXa->TEN_XA;
                echo "</option>";
            }
            ?>
        </select><br>
        Số nhà<br>
        <input type="text" name="soNha" value="<?php echo $nhaTro->SO_NHA; ?>"><br>
        Diện tích<br>
        <input type="text" name="dienTich" value="<?php echo $nhaTro->DIEN_TICH; ?>"><br>
        Còn phòng<br>
        <input type="text" name="conPhong" value="<?php echo $nhaTro->CON_PHONG; ?>"><br>
        Giá<br>
        <input type="number" name="gia" value="<?php echo $nhaTro->GIA; ?>"><br>
        Người liên hệ<br>
        <input type="text" name="nguoiLienHe" value="<?php echo $nhaTro->NGUOI_LH; ?>"><br>
        Số điện thoại liên hệ<br>
        <input type="text" name="sdtLienHe" value="<?php echo $nhaTro->SDT_LH; ?>"><br>
        Email liên hệ<br>
        <input type="text" name="emailLienHe" value="<?php echo $nhaTro->EMAIL_LH; ?>"><br>
        Địa chỉ liên hệ<br>
        <input type="text" name="diaChiLienHe" value="<?php echo $nhaTro->DIA_CHI_LH; ?>"><br>
        Tiêu đề<br>
        <input type="text" name="tieuDe" value="<?php echo $nhaTro->TIEU_DE; ?>"><br>
        Giới thiệu<br>
        <input type="text" name="gioiThieu" value="<?php echo $nhaTro->GIOI_THIEU; ?>"><br>
        <input type="submit" value="Save">
        <input type="hidden" name="maNhaTro" value="<?php echo $nhaTro->MA_NT; ?>">
        <?php echo form_close() ?>
    </body>
</html>
