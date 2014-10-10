<?php
class modelPhuongXa extends CI_Model
{
    public function findAll(){
        return $this->db->get('phuong_xa')->result();
    }
    
    public function find($maXa){
        $this->db->where('MA_XA',$maXa);
        return $this->db->get('phuong_xa')->row();        
    }
    
    public function insert($phuongXa = array()){
        $this->db->insert('phuong_xa', $phuongXa);
    }
    
    public function delete($maXa){
        $this->db->where('MA_XA',$maXa);
        $this->db->delete('phuong_xa');
    }
    public function update($maXa, $phuongXa = array()) {
        $this->db->where('MA_XA', $maXa);
        $this->db->update('phuong_xa', $phuongXa);
    }
}

?>
