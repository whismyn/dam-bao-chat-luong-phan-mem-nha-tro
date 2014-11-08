<?php

class modelChuDe extends CI_Model{

    public function findAll() {
        return $this->db->get('chude')->result();
    }

    public function find($maChuDe) {
        $this->db->where('MA_CHU_DE', $maChuDe);
        return $this->db->get('chude')->row();
    }

  
    
    public function insert($chuDe = array()) {
        $this->db->insert('chude', $chuDe);
    }

    public function delete($maChuDe) {
        $this->db->where('MA_CHU_DE', $maChuDe);
        $this->db->delete('chude');
    }

    public function update($maChuDe, $chuDe = array()) {
        $this->db->where('MA_CHU_DE', $maChuDe);
        $this->db->update('chude', $chuDe);
    }

    

}

?>

