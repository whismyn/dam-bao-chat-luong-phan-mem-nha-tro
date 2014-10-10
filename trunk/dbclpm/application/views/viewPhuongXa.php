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
        <a href="<?php echo base_url();?>">Quay lại</a>
    </body>
</html>