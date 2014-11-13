<?php

class chuDe extends CI_Controller{
    
    public function __construct() {
        parent::__construct();
        $this->load->library("session");
    }
    
    public function index(){
        $maTaiKhoan = $this->session->userdata("maTaiKhoan");
        if($maTaiKhoan == NULL){
            redirect("taiKhoan/dangNhap");
        }
        $this->db->select("*");
        $this->db->from('chude');
        $this->db->where('chude.MA_CHU_DE_CHA', NULL);
        $query = $this->db->get();
        $data['chuDes'] = $query->result();  
        $this->load->view('viewDienDan', $data);      
    }
    
    public function themChuDe(){
        $this->load->view("addChuDe");
    }
    
    public function themChuDeChinh(){
        $this->load->view("addChuDeChinh");
    }
    
    public function xulythem(){
        $date = date('Y/m/d h:i:s', time());
        $maTaiKhoan = $this->session->userdata("maTaiKhoan");
        $maChuDeCha = $this->session->userdata("maChuDe");
        $chuDe = array(
            "MA_TK" => $maTaiKhoan,
            "TIEU_DE" => $this->input->post("tieuDe"),
            "NOI_DUNG" => $this->input->post("noiDung"),
            "TG_TAO_CHU_DE" => $date,
            "MA_CHU_DE_CHA" => $maChuDeCha
        );
        $this->modelChuDe->insert($chuDe);
        redirect('chuDe/index');
    }
    
    public function xulythemChuDeChinh(){
        $date = date('Y/m/d h:i:s', time());
        $maTaiKhoan = $this->session->userdata("maTaiKhoan");
        $maChuDeCha = NULL;
        $chuDe = array(
            "MA_TK" => $maTaiKhoan,
            "TIEU_DE" => $this->input->post("tieuDe"),
            "NOI_DUNG" => $this->input->post("noiDung"),
            "TG_TAO_CHU_DE" => $date,
            "MA_CHU_DE_CHA" => $maChuDeCha
        );
        $this->modelChuDe->insert($chuDe);
        redirect('chuDe/index');
    }
    
    public function xemChuDe($maChuDe){
        $this->session->set_userdata('maChuDe', $maChuDe);
        $this->db->select("*");
        $this->db->from('chude');
        $this->db->where('chude.MA_CHU_DE_CHA', $maChuDe);
        $query = $this->db->get();

        $chuDe = $this->modelChuDe -> find($maChuDe);
        $data['tenchude'] = $chuDe->TIEU_DE;
        $data['chuDeCons'] = $query->result();


        $this->load->view("viewChuDeCon",$data);
    }
    
    public function xemChiTiet($maChuDe){
        $this->session->set_userdata('maChuDe', $maChuDe);
        $this->db->select("chude.*,tai_khoan.TEN_TK as TEN_TK");
        $this->db->from('chude', 'tai_khoan');
        $this->db->join('tai_khoan','tai_khoan.MA_TK = chuDe.MA_TK');
        $this->db->where('chude.MA_CHU_DE', $maChuDe);
        $this->db->limit("1");
        $query = $this->db->get();
        $data['chuDe'] = $query->result();
        $this->load->view("viewChuDe",$data);
    }
    
    public function dienDan(){
        $this->db->select("chude.*, tai_khoan.TEN_TK");
        $this->db->from('chude');
        $this->db->join('tai_khoan', 'tai_khoan.MA_TK = chude.MA_TK');
        $query = $this->db->get();
        $data['chuDes'] = $query->result();
        $this->load->view('quanlychude', $data);
    }
    
    public function xoa($maChuDe){
        $this->db->where('MA_CHU_DE', $maChuDe);
        $this->db->or_where('MA_CHU_DE_CHA', $maChuDe);
        $this->db->delete('chude');
        $this->db->select("chude.*, tai_khoan.TEN_TK");
        $this->db->from('chude');
        $this->db->join('tai_khoan', 'tai_khoan.MA_TK = chude.MA_TK');
        $query = $this->db->get();
        $data['chuDes'] = $query->result();
        $this->load->view('quanlychude', $data);
    }
    
    public function capnhat($maChuDe){
        $chuDe = $this->modelChuDe->find($maChuDe);
        $this->session->set_userdata('chuDe', $chuDe);
        $this->load->view('updateChuDe');
    }
    
    public function xulycapnhat(){
        $maTaiKhoan = $this->session->userdata("maTaiKhoan");
        $maChuDe = $this->input->post('maChuDe');
        $date = date('Y/m/d h:i:s', time());
        $chuDe = array(
            "MA_CHU_DE" => $maChuDe,
            "MA_CHU_DE_CHA" => $this->input->post('maXa'),
            "NOI_DUNG" => $this->input->post('noiDung'),
            "MA_TK" => $maTaiKhoan,
            "TIEU_DE" => $this->input->post("tieuDe"),
            "TG_TAO_CHU_DE" => $date,
        );
        $this->modelChuDe->update($maChuDe, $chuDe);
    }
}
