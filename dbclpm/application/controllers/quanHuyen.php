<?php

class quanHuyen extends CI_Controller
{

    public function index() {
        $data['quanHuyens'] = $this->modelQuanHuyen->findAll();
        $this->load->view('viewQuanHuyen', $data);
    }

    public function xoa($maHuyen) {
        $this->modelQuanHuyen->delete($maHuyen);
        redirect('quanHuyen/index');
    }

    public function them() {
        $data['tinhThanhs'] = $this->modelTinhThanh->findAll();
        $this->load->view("addQuanHuyen", $data);
    }

    public function xulythem() {
        $quanHuyen = array(
            "MA_TINH" => $this->input->post("maTinh"),
            "TEN_HUYEN" => $this->input->post("tenHuyen")
        );
        $this->modelQuanHuyen->insert($quanHuyen);
        redirect('quanHuyen/index');
    }

    public function capnhat($maHuyen) {
        $data['quanHuyen'] = $this->modelQuanHuyen->find($maHuyen);
        $data['tinhThanhs'] = $this->modelTinhThanh->findAll();
        $this->load->view('updateQuanHuyen', $data);
    }

    public function xulycapnhat() {
        $maHuyen = $this->input->post('maHuyen');
        $quanHuyen = array(
            "MA_TINH" => $this->input->post('maTinh'),
            "TEN_HUYEN" => $this->input->post('tenHuyen')
        );
        $this->modelQuanHuyen->update($maHuyen, $quanHuyen);
        redirect('quanHuyen/index');
    }

}

?>
