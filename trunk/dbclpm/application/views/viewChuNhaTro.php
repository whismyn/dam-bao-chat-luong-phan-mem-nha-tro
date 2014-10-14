<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <body>
        <?php echo anchor("nhaTro/them", "Thêm nhà trọ") ?><br>
        <?php
        $this->table->set_heading(
                'Mã Nhà Trọ', 'Mã tài khoản', 'Mã xã', 'Số nhà', 'Diện tích', 
                'Còn phòng', 'Giá', 'Người liên hệ', 'Số điện thoại liên hệ', 
                'Email liên hệ', 'Địa chỉ liên hệ', 'Tiêu đề', 'Giới thiệu',
                'Thời gian tạo', 'Duyệt', 'Tùy chọn');
        foreach ($nhaTros as $nhaTro) {
            $this->table->add_row(
                    $nhaTro->MA_NT, $nhaTro->MA_TK, $nhaTro->MA_XA,
                    $nhaTro->SO_NHA, $nhaTro->DIEN_TICH, $nhaTro->CON_PHONG, 
                    $nhaTro->GIA, $nhaTro->NGUOI_LH, $nhaTro->SDT_LH,
                    $nhaTro->EMAIL_LH, $nhaTro->DIA_CHI_LH, $nhaTro->TIEU_DE,
                    $nhaTro->GIOI_THIEU, $nhaTro->TG_TAO_NT, $nhaTro->DUYET,
                    anchor('nhaTro/xoa/' . $nhaTro->MA_NT, 'Xoa') . ' | ' .
                    anchor('nhaTro/capnhat/' . $nhaTro->MA_NT, 'Cap nhat'));
        }
        echo $this->table->generate();
        ?>
        <a href="<?php echo base_url(); ?>">Quay lại trang chủ</a>>
    </body>
</html>
