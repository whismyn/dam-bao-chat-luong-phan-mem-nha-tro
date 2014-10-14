<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $this->table->set_heading('Mã loại tài khoản', 'Tên loại tài khoản', 'Ghi chú', 'Tùy chọn');
        foreach ($loaiTks as $loaiTk) {
            $this->table->add_row($loaiTk->MA_LTK, anchor('taiKhoan/xemtaikhoantheoloaitaikhoan/'.$loaiTk->MA_LTK, $loaiTk->TEN_LTK), $loaiTk->GHI_CHU_LTK, anchor('loaiTk/capnhat/' . $loaiTk->MA_LTK, 'Cap nhat'));
        }
        echo $this->table->generate();
        ?>
        <a href="<?php echo base_url();?>">Đến trang chủ</a><br>
        <a href="<?php echo base_url();?>index.php/taiKhoan/trangquantri">Đến trang admin</a>
    </body>
</html>