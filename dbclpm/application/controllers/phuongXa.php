<?php

class phuongXa extends CI_Controller {

    public function index() {
        $data['phuongXas'] = $this->modelPhuongXa->findAll();
        $this->load->view('viewPhuongXa', $data);
    }

    public function xoa($maXa) {
        $this->modelPhuongXa->delete($maXa);
        redirect('phuongXa/index');
    }

    public function them() {
        $data['quanHuyens'] = $this->modelQuanHuyen->findAll();
        $this->load->view("addPhuongXa", $data);
    }

    public function xulythem() {
        $phuongXa = array(
            "MA_HUYEN" => $this->input->post("maHuyen"),
            "TEN_XA" => $this->input->post("tenXa")
        );
        $this->modelPhuongXa->insert($phuongXa);
        redirect('phuongXa/index');
    }

    public function capnhat($maXa) {
        $data['phuongXa'] = $this->modelPhuongXa->find($maXa);
        $data['quanHuyens'] = $this->modelQuanHuyen->findAll();
        $this->load->view('updatePhuongXa', $data);
    }

    public function xulycapnhat() {
        $maXa = $this->input->post('maXa');
        $phuongXa = array(
            "MA_HUYEN" => $this->input->post('maHuyen'),
            "TEN_XA" => $this->input->post('tenXa')
        );
        $this->modelPhuongXa->update($maXa, $phuongXa);
        redirect('phuongXa/index');
    }

}

?>
