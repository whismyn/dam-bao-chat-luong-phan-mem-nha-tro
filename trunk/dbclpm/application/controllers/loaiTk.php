<?php

class loaiTk extends CI_Controller{
    
    public function index(){
        $data['loaiTks'] = $this->modelLoaiTk->findAll();
        $this->load->view('viewLoaiTk', $data);      
    }
    
    public function xoa($maLoaiTK){
        $this->modelLoaiTk->delete($maLoaiTK);
        redirect('loaiTk/index');
    }
    
    public function them(){
        $this->load->view("addLoaiTk");
    }
    
    public function xulythem(){
        $loaiTk = array(
            "TEN_LTK" => $this->input->post("tenLoaiTk"),
            "GHI_CHU_LTK" => $this->input->post("ghiChuLoaiTk")
        );
        $this->modelLoaiTk->insert($loaiTk);
        redirect('loaiTk/index');
    }
    
    public function capnhat($maLoaiTk){
        $data['loaiTk'] = $this->modelLoaiTk->find($maLoaiTk);
        $this->load->view('updateLoaiTk', $data);
    }
    
    public function xulycapnhat(){
        $maLoaiTk = $this->input->post('maLoaiTk');
        $loaiTk = array(
            "TEN_LTK" => $this->input->post("tenLoaiTk"),
            "GHI_CHU_LTK" => $this->input->post("ghiChuLoaiTk")        
        );
        $this->modelLoaiTk->update($maLoaiTk, $loaiTk);
        redirect('loaiTk/index');
    }
}

?>
