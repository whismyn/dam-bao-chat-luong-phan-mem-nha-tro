<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $this->table->set_heading('Mã Tài Khoản', 'Tên Tài Khoản', 'Mật Khẩu',
                'Giới tính', 'Email', 'Số điện thoại', 'Địa chỉ', 'Năm sinh',
                'Thời gian tao tài khoản', 'Tùy chọn');
        foreach ($taiKhoans as $taiKhoan) {
            $this->table->add_row($taiKhoan->MA_TK, $taiKhoan->TEN_TK,
                    md5($taiKhoan->MAT_KHAU), $taiKhoan->GIOI_TINH, $taiKhoan->EMAIL, 
                    $taiKhoan->SDT, $taiKhoan->DIA_CHI, $taiKhoan->NAM_SINH, 
                    $taiKhoan->TG_TAO_TK, anchor('taiKhoan/trangquanlynhatro/' . $taiKhoan->MA_TK, 'Danh sách nhà trọ'));
        }
        echo $this->table->generate();
        ?>
        <a href="<?php echo base_url();?>">Quay lại trang chủ</a>
    </body>
</html>
