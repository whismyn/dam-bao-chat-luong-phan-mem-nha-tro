<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $this->table->set_heading(
                'Số nhà', 'Diện tích', 'Còn phòng', 'Giá', 'Người liên hệ', 
                'Số điện thoại liên hệ', 'Email liên hệ', 'Địa chỉ liên hệ',
                'Tiêu đề', 'Giới thiệu', 'Thao tác');
        foreach ($nhaTros as $nhaTro) {
            $this->table->add_row(
                    $nhaTro->SO_NHA, $nhaTro->DIEN_TICH, $nhaTro->CON_PHONG, 
                    $nhaTro->GIA, $nhaTro->NGUOI_LH, $nhaTro->SDT_LH,
                    $nhaTro->EMAIL_LH, $nhaTro->DIA_CHI_LH, $nhaTro->TIEU_DE,
                    $nhaTro->GIOI_THIEU, anchor("nhaTro/xemNhaTro/".$nhaTro->MA_NT,"Xem chi tiết"));
        }
        echo $this->table->generate();
        ?>
    </body>
</html>
