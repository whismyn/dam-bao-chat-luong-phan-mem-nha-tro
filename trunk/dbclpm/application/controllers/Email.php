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
        
        $this->email->from('nguyenchitam1993@gmail.com', 'Nguyen Chi Tam');
        $this->email->to($diaChi);    
        $this->email->subject('Email Test');
        $this->email->message('mat khau cua ban la'.$matKhau);    
        $url = base_url();
        if($this->email->send()){
        echo "Done!!!<br>";
        echo "<a href='".$url."'>Quay lại</a>";
        }
        else
        {
            show_error($this->email->print_debugger());
        }
    }
    
    function gui($address, $content){
        $this->load->library('encrypt');
        $config = array(
                'protocol' => 'smtp',
                'smtp_host' => 'ssl://smtp.googlemail.com',
                'smtp_port' => '465',
                'smtp_user' => 'nguyenchitam1993@gmail.com',
                'smtp_pass' => 'bachmahoangtu'//Nhớ đánh đúng user và pass nhé
        );
        $this->load->library('email',$config);
        $this->email->set_newline("\r\n");
        
        $this->email->from('nguyenchitam1993@gmail.com', 'Nguyen Chi Tam');
        $this->email->to($this->encrypt->decode($address));    
        $this->email->subject('Lay lai mat khau');
        $this->email->message('mat khau cua ban la '.$content);    
        $url = base_url();
        if($this->email->send()){
        echo "Done!!!<br>";
        echo "<a href='".$url."'>Quay lại</a>";
        }
        else
        {
            show_error($this->email->print_debugger());
        }
    }
}
?>