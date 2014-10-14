<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo anchor("phuongXa/them", "Thêm phường xã") ?><br>
        <?php
        $this->table->set_heading('Mã phường xã', 'Tên phường xã', 'Mã huyện', 'Tùy chọn');
        foreach ($phuongXas as $phuongXa) {
            $this->table->add_row($phuongXa->MA_XA, $phuongXa->TEN_XA, $phuongXa->MA_HUYEN, anchor('phuongXa/xoa/' . $phuongXa->MA_XA, 'Xoa') . ' | ' . anchor('phuongXa/capnhat/' . $phuongXa->MA_XA, 'Cap nhat'));
        }
        echo $this->table->generate();
        ?>
        <a href="<?php echo base_url();?>">Đến trang chủ</a><br>
        <a href="<?php echo base_url();?>index.php/taiKhoan/trangquantri">Đến trang admin</a><br>
        <a href="<?php echo base_url();?>index.php/quanHuyen">Đến trang quản lý quận huyện</a><br>
        <a href="<?php echo base_url();?>index.php/tinhThanh">Đến trang quản lý tỉnh thành</a>
    </body>
</html>