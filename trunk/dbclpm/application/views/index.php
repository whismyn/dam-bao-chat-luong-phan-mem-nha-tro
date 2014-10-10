<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>

        
        <h1>Các nhà trọ trong hệ thống</h1><br>
        <?php 
            $maTaiKhoan = $this->session->userdata('maTaiKhoan');
            $tenTaiKhoan = $this->session->userdata('tenTaiKhoan');
            $maLoaiTaiKhoan = $this->session->userdata('maLoaiTaiKhoan');
            $url = base_url();
            if($tenTaiKhoan == null){
                echo "<h3>Bạn chưa đăng nhập</h3>";
                echo "<a href='".$url."index.php/taiKhoan/dangNhap'>Đăng nhập</a><br><br>";
            } else{
                echo "<h3>Xin chào ".$tenTaiKhoan."</h3>";
                echo "<h4>Mã tài khoản của bạn là ".$maTaiKhoan."</h4>";
                echo "<h4>Mã loại tài khoản của bạn là ".$maLoaiTaiKhoan."</h4>";
                echo "<a href='".$url."index.php/taiKhoan/dangXuat'>Đăng xuất</a><br><br>";
                echo "<a href='".$url."index.php/taiKhoan/thayDoi/".$maTaiKhoan."'>Thay đổi thông tin tài khoản</a><br><br>";
            }
            if($maLoaiTaiKhoan == 1){
                echo "<a href='".$url."index.php/taiKhoan/trangquantri'>Đến trang quản trị hệ thống</a><br><br>";
            } else if($maLoaiTaiKhoan == 2){
                echo "<a href='".$url."index.php/taiKhoan/trangquanlynhatro/".$maTaiKhoan."'>Đến trang quản trị nhà trọ</a><br><br>";
            }
        ?>
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
