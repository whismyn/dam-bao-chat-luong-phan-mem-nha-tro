<?php
class Email extends CI_Controller{
    

     function index(){
        $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => '465',
                'smtp_user' => 'dbclpm@gmail.com',
                'smtp_pass' => 'dbclpmdbclpm'
        );
        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        $diaChi = $this->session->userdata('diachi');
        $matKhau = $this->session->userdata('matkhau');
        
        $this->email->from('dbclpm@gmail.com', 'He thong');
        $this->email->to($diaChi);    
        $this->email->subject('Email phuc hoi mat khau');
        $this->email->message('mat khau cua ban la '.$matKhau);    
        $url = base_url();
        if($this->email->send()){
        echo "Done!!!<br>";
        echo "<a href='".$url."'>Quay lai</a>";
        }
        else
        {
            show_error($this->email->print_debugger());
        }
    }
}
?>