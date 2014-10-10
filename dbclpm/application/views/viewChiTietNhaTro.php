<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Mã nhà trọ <?php echo "<i>".$nhaTro->MA_NT."</i>"; ?></h3>
        <h3>Mã tài khoản <?php echo "<i>".$nhaTro->MA_TK."</i>"; ?></h3>
        <h3>Mã xã <?php echo "<i>".$nhaTro->MA_XA."</i>"; ?></h3>
        <h3>Số nhà <?php echo "<i>".$nhaTro->SO_NHA."</i>"; ?></h3>
        <h3>Diện tích <?php echo "<i>".$nhaTro->DIEN_TICH."</i>"; ?></h3>
        <h3>Còn phòng <?php echo "<i>".$nhaTro->CON_PHONG."</i>"; ?></h3>
        <h3>Giá <?php echo "<i>".$nhaTro->GIA."</i>"; ?></h3>
        <h3>Người liên hệ <?php echo "<i>".$nhaTro->NGUOI_LH."</i>"; ?></h3>
        <h3>Số điện thoại liên hệ <?php echo "<i>".$nhaTro->SDT_LH."</i>"; ?></h3>
        <h3>Email liên hệ <?php echo "<i>".$nhaTro->EMAIL_LH."</i>"; ?></h3>
        <h3>Địa chỉ liên hệ<?php echo "<i>".$nhaTro->DIA_CHI_LH."</i>"; ?></h3>
        <h3>Tiêu đề <?php echo "<i>".$nhaTro->TIEU_DE."</i>"; ?></h3>
        <h3>Giới thiệu <?php echo "<i>".$nhaTro->GIOI_THIEU."</i>"; ?></h3>
        <h3>Cập nhật lần cuối <?php echo "<i>".$nhaTro->CN_CUOI."</i>"; ?></h3>
        <h3>Ngày tạo <?php echo "<i>".$nhaTro->TG_TAO_NT."</i>"; ?></h3>
        <h3>Đã duyệt <?php echo "<i>".$nhaTro->DUYET."</i>"; ?></h3>
        
        <?php  //print_r($binhLuans) ;?>
        
        <?php
        $this->table->set_heading('Mã tài khoản', 'Nội dung', 'Báo vi phạm');
        foreach ($binhLuans as $binhLuan) {
            $this->table->add_row(
                    $binhLuan->MA_TK, $binhLuan->NOI_DUNG,
                    anchor('binhLuan/baoViPham/' . $binhLuan->MA_BL,
                            'Báo vi phạm'));
        }
        echo $this->table->generate();
        ?>
        
        <h1>Để lại bình luận của bạn</h1>
        <?php echo form_open("nhaTro/xulythemBinhLuan") ?>
        Nội dung <input type="text" name="noiDung"><br>
        <input type="submit" value="Save">
        <input type="hidden" name="maNhaTro" value="<?php echo $nhaTro->MA_NT; ?>">
        <?php echo form_close() ?>
    </body>
</html>
