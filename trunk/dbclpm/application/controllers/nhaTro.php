<?php

class nhaTro extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library("session");
    }

    public function index() {
        $data['nhaTros'] = $this->modelNhaTro->findAll();
        $this->load->view('viewNhaTro', $data);
    }

    public function xoa($maNhaTro) {
        $this->modelNhaTro->delete($maNhaTro);
        redirect('nhaTro/index');
    }

    public function them() {
        $data['tinhThanhs'] = $this->modelTinhThanh->findAll();
        $data['quanHuyens'] = $this->modelQuanHuyen->findAll();
        $data['phuongXas'] = $this->modelPhuongXa->findAll();
        $this->load->view("addNhaTro", $data);
    }

    public function xulythem() {
        $maTaiKhoan = $this->session->userdata("maTaiKhoan");
        $date = date('Y/m/d h:i:s', time());
        $nhaTro = array(
            "MA_TK" => $maTaiKhoan,
            "MA_XA" => $this->input->post('maXa'),
            "SO_NHA" => $this->input->post("soNha"),
            "DIEN_TICH" => $this->input->post("dienTich"),
            "CON_PHONG" => $this->input->post("conPhong"),
            "GIA" => $this->input->post("gia"),
            "NGUOI_LH" => $this->input->post("nguoiLienHe"),
            "SDT_LH" => $this->input->post("sdtLienHe"),
            "EMAIL_LH" => $this->input->post("emailLienHe"),
            "DIA_CHI_LH" => $this->input->post("diaChiLienHe"),
            "TIEU_DE" => $this->input->post("tieuDe"),
            "GIOI_THIEU" => $this->input->post("gioiThieu"),
            "TG_TAO_NT" => $date,
            "CN_CUOI" => $date,
            "DUYET" => false
        );
        $this->modelNhaTro->insert($nhaTro);
        redirect('nhaTro/them');
    }

    public function capnhat($maNhaTro) {
        $data['tinhThanhs'] = $this->modelTinhThanh->findAll();
        $data['quanHuyens'] = $this->modelQuanHuyen->findAll();
        $data['phuongXas'] = $this->modelPhuongXa->findAll();
        $data['nhaTro'] = $this->modelNhaTro->find($maNhaTro);
        $this->load->view('updateNhaTro', $data);
    }

    public function xulycapnhat() {
        $maTaiKhoan = $this->session->userdata("maTaiKhoan");
        $maNhaTro = $this->input->post('maNhaTro');
        $date = date('Y/m/d h:i:s', time());
        $nhaTro = array(
            "MA_TK" => $maTaiKhoan,
            "MA_XA" => $this->input->post('maXa'),
            "SO_NHA" => $this->input->post("soNha"),
            "DIEN_TICH" => $this->input->post("dienTich"),
            "CON_PHONG" => $this->input->post("conPhong"),
            "GIA" => $this->input->post("gia"),
            "NGUOI_LH" => $this->input->post("nguoiLienHe"),
            "SDT_LH" => $this->input->post("sdtLienHe"),
            "EMAIL_LH" => $this->input->post("emailLienHe"),
            "DIA_CHI_LH" => $this->input->post("diaChiLienHe"),
            "TIEU_DE" => $this->input->post("tieuDe"),
            "GIOI_THIEU" => $this->input->post("gioiThieu"),
            "CN_CUOI" => $date,
            "DUYET" => false
        );
        $this->modelNhaTro->update($maNhaTro, $nhaTro);
        redirect('nhaTro/index');
    }

    public function xemNhaTro($maNhaTro) {
        $this->session->set_userdata('maNhaTro', $maNhaTro);
        $this->db->select("*");
        $this->db->from('binh_luan');
        $this->db->join('bl_nt', 'bl_nt.MA_BL = binh_luan.MA_BL');
        $this->db->join('nha_tro', 'bl_nt.MA_NT = nha_tro.MA_NT');
        $this->db->where('nha_tro.MA_NT', $maNhaTro);
        $query = $this->db->get();
        $data['nhaTro'] = $this->modelNhaTro->find($maNhaTro);
        $data['binhLuans'] = $query->result();
        //$data['maBinhLuan'] = $this->db->count_all('binh_luan');
        $this->load->view("viewChiTietNhaTro", $data);
    }

    public function dangTin() {
        $this->db->select("*");
        $this->db->from('nha_tro');
        $this->db->where('DUYET', '0');
        $query = $this->db->get();
        $data['nhaTros'] = $query->result();
        $this->load->view("confirmTinDang", $data);
    }

    public function xacNhan($maNhaTro) {
        $nhaTroOld = $this->modelNhaTro->find($maNhaTro);
        $nhaTroNew = array(
            "MA_TK" => $nhaTroOld->MA_TK,
            "MA_XA" => $nhaTroOld->MA_XA,
            "SO_NHA" => $nhaTroOld->SO_NHA,
            "DIEN_TICH" => $nhaTroOld->DIEN_TICH,
            "CON_PHONG" => $nhaTroOld->CON_PHONG,
            "GIA" => $nhaTroOld->GIA,
            "NGUOI_LH" => $nhaTroOld->NGUOI_LH,
            "SDT_LH" => $nhaTroOld->SDT_LH,
            "EMAIL_LH" => $nhaTroOld->EMAIL_LH,
            "DIA_CHI_LH" => $nhaTroOld->DIA_CHI_LH,
            "TIEU_DE" => $nhaTroOld->TIEU_DE,
            "GIOI_THIEU" => $nhaTroOld->GIOI_THIEU,
            "TG_TAO_NT" => $nhaTroOld->TG_TAO_NT,
            "CN_CUOI" => $nhaTroOld->CN_CUOI,
            "DUYET" => true
        );
        $this->modelNhaTro->update($maNhaTro, $nhaTroNew);
        redirect("/nhaTro/dangTin");
    }

    public function xulythemBinhLuan() {
        $maNhaTro = $this->input->post('maNhaTro');
        log_message('error', $maNhaTro);
        $date = date('Y/m/d h:i:s', time());
        $maTaiKhoan = $this->session->userdata('maTaiKhoan');
        $binhLuan = array(
            "MA_TK" => $maTaiKhoan,
            "NOI_DUNG" => $this->input->post('noiDung'),
            "BAO_VP" => '0',
            "TG_BL" => $date
        );
        $this->modelBinhLuan->insert($binhLuan);
        $binhLuanNhaTro = array(
            "MA_BL" => $this->db->insert_id(),
            "MA_NT" => $maNhaTro
        );
        $this->modelBinhLuanNhaTro->insert($binhLuanNhaTro);
        redirect('nhaTro/xemNhaTro/' . $maNhaTro);
    }

    public function timNhaTro() {
        $tuKhoa = $this->input->post('tuKhoa');
        $data['nhaTros'] = $this->modelNhaTro->search($tuKhoa);
        $this->load->view('ketquatimkiem', $data);
    }

    public function timKiemNangCao() {
        $data['tinhThanhs'] = $this->modelTinhThanh->findAll();
        $data['quanHuyens'] = $this->modelQuanHuyen->findAll();
        $data['phuongXas'] = $this->modelPhuongXa->findAll();
        $this->load->view('timkiemnangcao', $data);
    }

    public function xulytimkiem() {
        $maTinh = $this->input->post('maTinh');
        $maHuyen = $this->input->post('maHuyen');
        $maXa = $this->input->post('maXa');
        $gia = $this->input->post('mucGia');
        $dienTich = $this->input->post('dienTich');
        if ($maXa != null) {
            $this->db->select("*");
            $this->db->from('nha_tro');
            $this->db->where('MA_XA', $maXa);
            $this->db->where('GIA <=', $gia);
            $this->db->where('DIEN_TICH <=', $dienTich);
            $query = $this->db->get();
            $data['nhaTros'] = $query->result();
            
            $this->load->view('ketquatimkiem', $data);
        } else if ($maXa == NULL && $maHuyen != NULL) {
            $this->db->select("*");
            $this->db->from('nha_tro');
            $this->db->join('phuong_xa', 'phuong_xa.MA_XA = nha_tro.MA_XA');
            $this->db->join('quan_huyen', 'quan_huyen.MA_HUYEN = phuong_xa.MA_HUYEN');
            $this->db->where('quan_huyen.MA_HUYEN', $maHuyen);
            $this->db->where('GIA <=', $gia);
            $this->db->where('DIEN_TICH <=', $dienTich);
            $query = $this->db->get();    
            $data['nhaTros'] = $query->result();
            
            $this->load->view('ketquatimkiem', $data);
        } else if ($maXa == NULL && $maHuyen == NULL && $maTinh != NULL) {
            $this->db->select("*");
            $this->db->from('nha_tro');
            $this->db->join('phuong_xa', 'phuong_xa.MA_XA = nha_tro.MA_XA');
            $this->db->join('quan_huyen', 'quan_huyen.MA_HUYEN = phuong_xa.MA_HUYEN');
            $this->db->join('tinh_thanh', 'tinh_thanh.MA_TINH = quan_huyen.MA_TINH');
            $this->db->where('tinh_thanh.MA_TINH', $maTinh);
            $this->db->where('GIA <=', $gia);
            $this->db->where('DIEN_TICH <=', $dienTich);
            $query = $this->db->get();    
            $data['nhaTros'] = $query->result();
            
            $this->load->view('ketquatimkiem', $data);
        }
    }

    public function maHuyenToMaXa($maHuyen) {
        $this->db->select("MA_XA");
        $this->db->from('phuong_xa');
        $this->db->where('MA_HUYEN', $maHuyen);
        $query = $this->db->get();
        $maXas = $query->result();
        return $maXas;
    }

}

?>
