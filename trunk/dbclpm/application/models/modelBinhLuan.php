<?php
class modelBinhLuan extends CI_Model
{
     public function findAll(){
        return $this->db->get('binh_luan')->result();
    }
    
    public function find($maBL){
        $this->db->where('MA_BL',$maBL);
        return $this->db->get('binh_luan')->row();        
    }
    
    public function insert($binhLuan = array()){
        $this->db->insert('binh_luan', $binhLuan);
    }
    
    public function delete($maBL){
        $this->db->where('MA_BL',$maBL);
        $this->db->delete('binh_luan');
    }
    public function update($maBL, $binhLuan = array()) {
        $this->db->where('MA_BL', $maBL);
        $this->db->update('binh_luan', $binhLuan);
    }
   
    
}

?>
