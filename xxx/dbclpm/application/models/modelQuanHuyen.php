<?php

class modelQuanHuyen extends CI_Model {

    public function findAll() {
        return $this->db->get('quan_huyen')->result();
    }

    public function find($maHuyen) {
        $this->db->where('MA_HUYEN', $maHuyen);
        return $this->db->get('quan_huyen')->row();
    }

    public function insert($quanHuyen = array()) {
        $this->db->insert('quan_huyen', $quanHuyen);
    }

    public function delete($maHuyen) {
        $this->db->where('MA_HUYEN', $maHuyen);
        $this->db->delete('quan_huyen');
    }

    public function update($maHuyen, $quanHuyen = array()) {
        $this->db->where('MA_HUYEN', $maHuyen);
        $this->db->update('quan_huyen', $quanHuyen);
    }

}

?>
