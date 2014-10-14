<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo anchor("tinhThanh/them", "Thêm tỉnh thành") ?><br>
        <?php
        $this->table->set_heading('Mã tỉnh', 'Tên tỉnh', 'TUY CHON');
        foreach ($tinhThanhs as $tinhThanh) {
            $this->table->add_row($tinhThanh->MA_TINH, anchor('quanHuyen/xemquanhuyentheotinh/'.$tinhThanh->MA_TINH, $tinhThanh->TEN_TINH), anchor('tinhThanh/xoa/' . $tinhThanh->MA_TINH, 'Xoa') . ' | ' . anchor('tinhThanh/capnhat/' . $tinhThanh->MA_TINH, 'Cap nhat'));
        }
        echo $this->table->generate();
        ?>
         <a href="<?php echo base_url();?>">Quay lại trang chủ</a>
    </body>
</html>