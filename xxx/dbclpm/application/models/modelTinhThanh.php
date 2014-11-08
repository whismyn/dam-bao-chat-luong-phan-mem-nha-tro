<?php

class modelTinhThanh extends CI_Model
{
    public function findAll(){
        return $this->db->get('tinh_thanh')->result();
    }
    
    public function find($maTinh){
        $this->db->where('MA_TINH',$maTinh);
        return $this->db->get('tinh_thanh')->row();        
    }
    
    public function insert($tinhThanh = array()){
        $this->db->insert('tinh_thanh', $tinhThanh);
    }
    
    public function delete($maTinh){
        $this->db->where('MA_TINH',$maTinh);
        $this->db->delete('tinh_thanh');
    }
    public function update($maTinh, $tinhThanh = array()) {
        $this->db->where('MA_TINH', $maTinh);
        $this->db->update('tinh_thanh', $tinhThanh);
    }
}

?>
