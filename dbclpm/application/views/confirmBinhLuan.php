<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $this->table->set_heading(
                'Mã bình luận', 'Mã tài khoản', 'Nội dung', 'Số lần bị báo vi phạm',
                'Thời gian bình luận', 'TUY CHON');
        foreach ($binhLuans as $binhLuan) {
            $this->table->add_row(
                    $binhLuan->MA_BL, $binhLuan->MA_TK, $binhLuan->NOI_DUNG,
                    $binhLuan->BAO_VP, $binhLuan->TG_BL,
                    anchor('binhLuan/xoa/' . $binhLuan->MA_BL, 'Xóa'));
        }
        echo $this->table->generate();
        ?>
        <a href="<?php echo base_url(); ?>">Quay lại</a>
    </body>
</html>
