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
        <?php echo form_open("nhaTro/xulytimkiem") ?>
        Tỉnh/Thành phố<br>
        <select id="mark" name="matinh"> 
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
        <select id="series" name="maHuyen">
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
        Mức giá <br>
        <select name="mucGia">
            <option value="500000">500 000 VNĐ</option>
            <option value="700000">700 000 VND</option>    
            <option value="900000">900 000 VND</option>    
            <option value="1000000">1 000 000 VND</option>
            <option value="1200000">1 200 000 VND</option>
            <option value="1400000">1 400 000 VND</option>
            <option value="10 000 000">trên 1 500 000 VND</option>
        </select><Br>
        Diện tích<br>
        <select name="dienTich">
            <option value="15">15 m²</option>
            <option value="20">20 m²</option>
            <option value="25">25 m²</option>
            <option value="30">30 m²</option>
            <option value="100">trên 30 m²</option>
        </select>
        <br>
        <input type="submit" value="Tìm">
        <?php echo form_close() ?>
    </body>
</html>
