<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php echo anchor("loaiTk/them", "Them loai tai khoan") ?><br>
        <?php
        $this->table->set_heading('Ma Loai Tk', 'Ten loai tk', 'Ghi chu', 'Tuy chon');
        foreach ($loaiTks as $loaiTk) {
            $this->table->add_row($loaiTk->MA_LTK, $loaiTk->TEN_LTK, $loaiTk->GHI_CHU_LTK, anchor('loaiTk/xoa/' . $loaiTk->MA_LTK, 'Xoa') . ' | ' . anchor('loaiTk/capnhat/' . $loaiTk->MA_LTK, 'Cap nhat'));
        }
        echo $this->table->generate();
        ?>
        <a href="<?php echo base_url();?>">Quay lại</a>
    </body>
</html>