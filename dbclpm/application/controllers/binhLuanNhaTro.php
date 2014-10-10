<?php

class binhLuanNhaTro extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->library("session");
    }
    
    public function index(){
        $data['binhLuans'] = $this->modelBinhLuanNhaTro->findAll();
        $this->load->view('viewBinhLuan', $data);      
    }
    
    public function xoa($maBL){
        $this->modelBinhLuanNhaTro->delete($maBL);
        redirect('binhLuan/index');
    }
    
    public function them(){
        $this->load->view("addBinhLuan");
    }
    
    public function xulythem(){
        $date = date('Y/m/d h:i:s', time());
        $maTaiKhoan = $this->session->userdata('maTaiKhoan');
        $binhLuan = array(
            "MA_TK" => $maTaiKhoan,
            "NOI_DUNG" => $this->input->post('noiDung'),
            "BAO_VP" => '0',
            "TG_BL" => $date
        );
        $this->modelBinhLuanNhaTro->insert($binhLuan);
        redirect('binhLuan/index');
    }
    
    public function capnhat($maBL){
        $data['binhLuan'] = $this->modelBinhLuanNhaTro->find($maBL);
        $this->load->view('updateBinhLuan', $data);
    }
    
    public function xulycapnhat(){
        $maTaiKhoan = $this->session->userdata('maTaiKhoan');
        $maBL = $this->input->post('maBinhLuan');
        $binhLuan = array(
            "MA_TK" => $maTaiKhoan,
            "NOI_DUNG" => $this->input->post('noiDung'),
            "BAO_VP" => '0',
            "TG_BL" => $date
        );
        $this->modelBinhLuanNhaTro->update($maBL, $binhLuan);
        redirect('binhLuan/index');
    }
}

?>
