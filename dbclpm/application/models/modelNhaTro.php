<?php

class modelNhaTro extends CI_Model{

    public function findAll(){
        return $this->db->get('nha_tro')->result();
    }
    
    public function find($maNhaTro){
        $this->db->where('MA_NT',$maNhaTro);
        return $this->db->get('nha_tro')->row();        
    }
    
    public function insert($nhaTro = array()){
        $this->db->insert('nha_tro', $nhaTro);
    }
    
    public function delete($maNhaTro){
        $this->db->where('MA_NT',$maNhaTro);
        $this->db->delete('nha_tro');
    }
    public function update($maNhaTro, $nhaTro = array()) {
        $this->db->where('MA_NT', $maNhaTro);
        $this->db->update('nha_tro', $nhaTro);
    }
}

?>
