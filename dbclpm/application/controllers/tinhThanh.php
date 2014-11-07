<?php
class tinhThanh extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->library("session");
    }

    public function index() {
        $data['tinhThanhs'] = $this->modelTinhThanh->findAll();
        $this->load->view('viewTinhThanh', $data);
    }

    public function xoa($maTinh) {
        $this->modelTinhThanh->delete($maTinh);
        redirect('tinhThanh/index');
    }

    public function them() {
        $this->load->view("addTinhThanh");
    }

    public function xulythem() {
        $tinhThanh = array(
            "TEN_TINH" => $this->input->post("tenTinh")
        );
        $this->modelTinhThanh->insert($tinhThanh);
        redirect('tinhThanh/them');
    }

    public function capnhat($maTinh) {
        $data['tinhThanh'] = $this->modelTinhThanh->find($maTinh);
        $this->load->view('updateTinhThanh', $data);
    }
    
    public function xulycapnhat() {
        $maTinh = $this->input->post('maTinh');
        $tinhThanh = array(
            "TEN_TINH" => $this->input->post('tenTinh')
        );
        $this->modelTinhThanh->update($maTinh, $tinhThanh);
        redirect('tinhThanh/index');
    }
    public function xemNhaTroTheoTinhThanh($maTinhThanh){
        $this->db->select("*");
        $this->db->from("nha_tro");
        $this->db->join("phuong_xa", "phuong_xa.MA_XA = nha_tro.MA_XA");
        $this->db->join("quan_huyen", "quan_huyen.MA_HUYEN = phuong_xa.MA_HUYEN");
        $this->db->join("tinh_thanh", "tinh_thanh.MA_TINH = quan_huyen.MA_TINH");
        $this->db->where("tinh_thanh.MA_TINH", $maTinhThanh);
        $query = $this->db->get();
        $data["nhaTros"] = $query->result();
        $this->load->view("ketquatimkiem", $data);
    }
}

?>
