<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo anchor("taiKhoan/them", "Them tai khoan") ?><br>
        <?php
        $this->table->set_heading('Ma Tai Khoan', 'Ten Tai Khoan', 'MAT KHAU', 'GIOI TINH', 'EMAIL', 'SO DIEN THOAI', 'DIA CHI', 'NAM SINH', 'THOI GIAN TAO', 'TUY CHON');
        foreach ($taiKhoans as $taiKhoan) {
            $this->table->add_row($taiKhoan->MA_TK, $taiKhoan->TEN_TK, $taiKhoan->MAT_KHAU, $taiKhoan->GIOI_TINH, $taiKhoan->EMAIL, $taiKhoan->SDT, $taiKhoan->DIA_CHI, $taiKhoan->NAM_SINH, $taiKhoan->TG_TAO_TK, anchor('taiKhoan/xoa/' . $taiKhoan->MA_TK, 'Xoa') . ' | ' . anchor('taiKhoan/capnhat/' . $taiKhoan->MA_TK, 'Cap nhat'));
        }
        echo $this->table->generate();
        ?>
        <a href="<?php echo base_url();?>">Quay lại</a>
    </body>
</html>