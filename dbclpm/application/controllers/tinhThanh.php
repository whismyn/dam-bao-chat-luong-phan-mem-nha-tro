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
}

?>
