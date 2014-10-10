<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php    
        $maTaiKhoan = $this->session->userdata("maTaiKhoan");
        $tenTaiKhoan = $this->session->userdata("tenTaiKhoan");
        $maLoaiTaiKhoan = $this->session->userdata("maLoaiTaiKhoan");
        echo $maTaiKhoan." <br>";
        echo $maLoaiTaiKhoan."<br>";
        echo $tenTaiKhoan."<br>";
        ?>
        <a href="<?php echo base_url();?>">Quay lại</a>
    </body>
</html>
