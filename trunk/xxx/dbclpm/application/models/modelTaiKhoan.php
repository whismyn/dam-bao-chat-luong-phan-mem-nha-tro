<?php

class modelTaiKhoan extends CI_Model{
    
    public function findAll(){
        return $this->db->get('tai_khoan')->result();
    }
    
    public function find($maTk){
        $this->db->where('MA_TK',$maTk);
        return $this->db->get('tai_khoan')->row();        
    }
    
    public function insert($taiKhoan = array()){
        $this->db->insert('tai_khoan', $taiKhoan);
    }
    
    public function delete($maTk){
        $this->db->where('MA_TK',$maTk);
        $this->db->delete('tai_khoan');
    }
    public function update($maTk, $taiKhoan = array()) {
        $this->db->where('MA_TK', $maTk);
        $this->db->update('tai_khoan', $taiKhoan);
    }
}

?>
