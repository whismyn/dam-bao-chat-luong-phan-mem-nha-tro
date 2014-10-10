<?php

class modelLoaiTk extends CI_Model{
    
    public function findAll(){
        return $this->db->get('loai_tk')->result();
    }
    
    public function find($maLoaiTk){
        $this->db->where('MA_LTK',$maLoaiTk);
        return $this->db->get('loai_tk')->row();        
    }
    
    public function insert($loaiTk = array()){
        $this->db->insert('loai_tk', $loaiTk);
    }
    
    public function delete($maLoaiTk){
        $this->db->where('MA_LTK',$maLoaiTk);
        $this->db->delete('loai_tk');
    }
    public function update($maLoaiTk, $loaiTk = array()) {
        $this->db->where('MA_LTK', $maLoaiTk);
        $this->db->update('loai_tk', $loaiTk);
    }
   
}

?>
