<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo anchor("taiKhoan/them", "Thêm tài khoản") ?><br>
        <?php
        $this->table->set_heading('Mã Tài Khoản', 'Tên Tài Khoản', 'Mật Khẩu', 'Giới Tính', 'EMAIL', 'Số Điện Thoại', 'Địa Chỉ', 'Năm sinh', 'Thời gian tạo', 'Tùy chọn');
        foreach ($taiKhoans as $taiKhoan) {
            $this->table->add_row($taiKhoan->MA_TK, $taiKhoan->TEN_TK, $taiKhoan->MAT_KHAU, $taiKhoan->GIOI_TINH, $taiKhoan->EMAIL, $taiKhoan->SDT, $taiKhoan->DIA_CHI, $taiKhoan->NAM_SINH, $taiKhoan->TG_TAO_TK, anchor('taiKhoan/xoa/' . $taiKhoan->MA_TK, 'Xoa') . ' | ' . anchor('taiKhoan/capnhat/' . $taiKhoan->MA_TK, 'Cap nhat'));
        }
        echo $this->table->generate();
        ?>
        <a href="<?php echo base_url();?>">Đến trang chủ</a><br>
        <a href="<?php echo base_url();?>index.php/taiKhoan/trangquantri">Đến trang admin</a><br>
        <a href="<?php echo base_url();?>index.php/loaiTk">Đến trang quản lý loại tài khoản</a>
    </body>
</html>