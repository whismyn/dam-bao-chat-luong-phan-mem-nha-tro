<?php

class binhLuan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library("session");
         $this->load->model('modelBinhLuanNhaTro'); 
    }

    public function index() {
        $data['binhLuans'] = $this->modelBinhLuan->findAll();
        $this->load->view('viewBinhLuan', $data);
    }

    public function xoa($maBL) {
        $this->modelBinhLuanNhaTro->delete($maBL);
        $this->modelBinhLuan->delete($maBL);
        redirect('binhLuan/quanLyBinhLuan');
    }

    public function them() {
        $this->load->view("addBinhLuan");
    }

    public function xulythem() {
        $date = date('Y/m/d h:i:s', time());
        $maTaiKhoan = $this->session->userdata('maTaiKhoan');
        $binhLuan = array(
            "MA_TK" => $maTaiKhoan,
            "NOI_DUNG" => $this->input->post('noiDung'),
            "BAO_VP" => '0',
            "TG_BL" => $date
        );
        $this->modelBinhLuan->insert($binhLuan);
        redirect('binhLuan/index');
    }

    public function capnhat($maBL) {
        $data['binhLuan'] = $this->modelBinhLuan->find($maBL);
        $this->load->view('updateBinhLuan', $data);
    }

    public function xulycapnhat() {
        $maTaiKhoan = $this->session->userdata('maTaiKhoan');
        $maBL = $this->input->post('maBinhLuan');
        $binhLuan = array(
            "MA_TK" => $maTaiKhoan,
            "NOI_DUNG" => $this->input->post('noiDung'),
            "BAO_VP" => '0',
            "TG_BL" => $date
        );
        $this->modelBinhLuan->update($maBL, $binhLuan);
        redirect('binhLuan/index');
    }

    public function quanLyBinhLuan(){
        $data['binhLuans'] = $this->modelBinhLuan->findAll();
        $this->load->view('confirmBinhLuan', $data);
    }
}

?>
