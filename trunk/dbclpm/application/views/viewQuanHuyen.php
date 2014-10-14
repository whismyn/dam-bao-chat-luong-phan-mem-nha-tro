<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo anchor("quanHuyen/them", "Thêm quận huyện") ?><br>
        <?php
        $this->table->set_heading('Mã huyện', 'Tên huyện', 'Mã tỉnh', 'Tùy chọn');
        foreach ($quanHuyens as $quanHuyen) {
            $this->table->add_row($quanHuyen->MA_HUYEN, anchor('phuongXa/xemphuongxatheoquanhuyen/'.$quanHuyen->MA_HUYEN, $quanHuyen->TEN_HUYEN), $quanHuyen->MA_TINH, anchor('quanHuyen/xoa/' . $quanHuyen->MA_HUYEN, 'Xoa') . ' | ' . anchor('quanHuyen/capnhat/' . $quanHuyen->MA_HUYEN, 'Cap nhat'));
        }
        echo $this->table->generate();
        ?>
        <a href="<?php echo base_url();?>">Đến trang chủ</a><br>
        <a href="<?php echo base_url();?>index.php/taiKhoan/trangquantri">Đến trang admin</a><br>
        <a href="<?php echo base_url();?>index.php/tinhThanh">Đến trang quản lý tỉnh thành</a>
    </body>
</html>