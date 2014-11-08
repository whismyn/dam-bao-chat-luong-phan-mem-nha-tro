<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Them chu de</title>
        <script type="text/javascript" src="http://localhost/dbclpm/media/js/tinymce/tinymce.min.js"></script>
        <script type="text/javascript">
            tinymce.init({
                selector: "textarea"
            });
        </script>
    </head>
    <body>
        <?php echo form_open("chuDe/xulycapnhat") ?>
        <?php $chuDe = $this->session->userdata('chuDe');
            print_r($chuDe);
        ?>
        
        <input type="hidden" name="maChuDe" value="<?php ?>">
        <input type="hidden" name="maChuDeCha" value="<?php  ?>">
        Tieu de <input type="text" name="tieuDe" value="<?php  ?>"><br>
        Noi dung <textarea name="noiDung" value="<?php  ?>"></textarea><br>
        <input type="submit" value="Save">
        <?php echo form_close() ?>
    </body>
</html>
