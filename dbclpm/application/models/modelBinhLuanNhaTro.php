<?php
class modelBinhLuanNhaTro extends CI_Model{
     public function findAll(){
        return $this->db->get('bl_nt')->result();
    }
    
    public function find($maBL){
        $this->db->where('MA_BL',$maBL);
        return $this->db->get('bl_nt')->row();        
    }
    
    public function insert($binhLuan = array()){
        $this->db->insert('bl_nt', $binhLuan);
    }
    
    public function delete($maBL){
        $this->db->where('MA_BL',$maBL);
        $this->db->delete('bl_nt');
    }
    public function update($maBL, $binhLuan = array()) {
        $this->db->where('MA_BL', $maBL);
        $this->db->update('bl_nt', $binhLuan);
    }
}

?>
