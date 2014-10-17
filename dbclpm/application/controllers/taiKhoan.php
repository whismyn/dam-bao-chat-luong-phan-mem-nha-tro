<?php

class taiKhoan extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library("session");
        $this->load->library('../controllers/Email');
    }

    public function index() {
        $data['taiKhoans'] = $this->modelTaiKhoan->findAll();
        $this->load->view('viewTaiKhoan', $data);
    }

    public function xoa($maTaiKhoan) {
        $this->modelTaiKhoan->delete($maTaiKhoan);
        redirect('taiKhoan/index');
    }

    public function them() {
        $this->load->view("addTaiKhoan");
    }

    public function dangky() {
        $this->load->view("signupTaiKhoan");
    }

    public function xulythem() {
        $date = date('Y/m/d h:i:s', time());
        $taiKhoan = array(
            "MA_LTK" => $this->input->post("maLoaiTk"),
            "TEN_TK" => $this->input->post("tenTaiKhoan"),
            "MAT_KHAU" => $this->input->post("matKhau"),
            "GIOI_TINH" => $this->input->post("gioiTinh"),
            "EMAIL" => $this->input->post("email"),
            "SDT" => $this->input->post("soDienThoai"),
            "DIA_CHI" => $this->input->post("diaChi"),
            "NAM_SINH" => $this->input->post("namSinh"),
            "TG_TAO_TK" => $date
        );
        $this->modelTaiKhoan->insert($taiKhoan);
        redirect('taiKhoan/index');
    }

    public function xulydangky() {
        $date = date('Y/m/d h:i:s', time());
        if ($this->input->post("maLoaiTk") == 2) {
            $taiKhoan = array(
                "KHOA" => TRUE,
                "MA_LTK" => $this->input->post("maLoaiTk"),
                "TEN_TK" => $this->input->post("tenTaiKhoan"),
                "MAT_KHAU" => $this->input->post("matKhau"),
                "GIOI_TINH" => $this->input->post("gioiTinh"),
                "EMAIL" => $this->input->post("email"),
                "SDT" => $this->input->post("soDienThoai"),
                "DIA_CHI" => $this->input->post("diaChi"),
                "NAM_SINH" => $this->input->post("namSinh"),
                "TG_TAO_TK" => $date);
            $data['thongbao'] = array("Bạn hãy liên hệ với Ban Quản Trị để có thể kích hoạt tài khoản");
        } else {
            $taiKhoan = array(
                "KHOA" => FALSE,
                "MA_LTK" => $this->input->post("maLoaiTk"),
                "TEN_TK" => $this->input->post("tenTaiKhoan"),
                "MAT_KHAU" => $this->input->post("matKhau"),
                "GIOI_TINH" => $this->input->post("gioiTinh"),
                "EMAIL" => $this->input->post("email"),
                "SDT" => $this->input->post("soDienThoai"),
                "DIA_CHI" => $this->input->post("diaChi"),
                "NAM_SINH" => $this->input->post("namSinh"),
                "TG_TAO_TK" => $date);
            $data['thongbao'] = array("Bạn có thể sử dụng tài khoản ngay bây giờ! Xin hãy đăng nhập");
        }
        $this->modelTaiKhoan->insert($taiKhoan);
        redirect("welcome");
    }

    public function capnhat($maTaiKhoan) {
        $data['taiKhoan'] = $this->modelTaiKhoan->find($maTaiKhoan);
        $this->load->view('updateTaiKhoan', $data);
    }

    public function xulycapnhat() {
        $maTaiKhoan = $this->input->post('maTaiKhoan');
        $taiKhoan = array(
            "MA_LTK" => $this->input->post("maLoaiTk"),
            "TEN_TK" => $this->input->post("tenTaiKhoan"),
            "MAT_KHAU" => $this->input->post("matKhau"),
            "GIOI_TINH" => $this->input->post("gioiTinh"),
            "EMAIL" => $this->input->post("email"),
            "SDT" => $this->input->post("soDienThoai"),
            "DIA_CHI" => $this->input->post("diaChi"),
            "NAM_SINH" => $this->input->post("namSinh")
        );
        $this->modelTaiKhoan->update($maTaiKhoan, $taiKhoan);
        redirect('taiKhoan/index');
    }

    public function dangNhap() {
        $this->load->view("dangNhap");
    }

    function xulydangnhap() {
        $username = $this->input->post('tenTaiKhoan');
        $password = $this->input->post('matKhau');
        $this->db->select('MA_TK, TEN_TK, MAT_KHAU, MA_LTK');
        $this->db->from('tai_khoan');
        $this->db->where('TEN_TK', $username);
        $this->db->where('MAT_KHAU', $password);
        $this->db->limit(1);
        $query = $this->db->get();
        $result = $query->result();
        if ($query->num_rows() == 1) {
            $maTaiKhoan = array();
            $maLoaiTaiKhoan = array();
            $tenTaiKhoan = array();
            foreach ($result as $row) {
                $maTaiKhoan = $row->MA_TK;
                $maLoaiTaiKhoan = $row->MA_LTK;
                $tenTaiKhoan = $row->TEN_TK;                   
                $this->session->set_userdata('maTaiKhoan', $maTaiKhoan);
                $this->session->set_userdata('maLoaiTaiKhoan', $maLoaiTaiKhoan);
                $this->session->set_userdata('tenTaiKhoan', $tenTaiKhoan);
            }
            redirect();
        } else {
            $this->load->view('dangNhap');
        }
    }

    public function dangXuat() {
        $this->session->sess_destroy();
        redirect();
    }

    public function trangquantri(){
        $data['loaiTks'] = $this->modelLoaiTk->findAll();
        $this->load->view('viewAdmin',$data);
    }
    
    public function trangquanlynhatro($maTaiKhoan){
        $this->db->select("*");
        $this->db->from('nha_tro');
        $this->db->where('MA_TK', $maTaiKhoan);
        $query = $this->db->get();
        $data['nhaTros'] = $query->result();
        $this->load->view('viewChuNhaTro', $data);
    }
    
    public function thayDoi($maTaiKhoan){
        $data['taiKhoan'] = $this->modelTaiKhoan->find($maTaiKhoan);
        $this->load->view('changeTaiKhoan', $data);
    }
    
    public function xulythaydoi() {
        $maTaiKhoan = $this->input->post('maTaiKhoan');
        $taiKhoan = array(
            "MA_LTK" => $this->input->post("maLoaiTk"),
            "TEN_TK" => $this->input->post("tenTaiKhoan"),
            "MAT_KHAU" => $this->input->post("matKhau"),
            "GIOI_TINH" => $this->input->post("gioiTinh"),
            "EMAIL" => $this->input->post("email"),
            "SDT" => $this->input->post("soDienThoai"),
            "DIA_CHI" => $this->input->post("diaChi"),
            "NAM_SINH" => $this->input->post("namSinh")
        );
        $this->modelTaiKhoan->update($maTaiKhoan, $taiKhoan);
        redirect();
    }
    
    public function quanLyChuNhaTro(){
        $this->db->select("*");
        $this->db->from('tai_khoan');
        $this->db->where('MA_LTK', '2');
        $query = $this->db->get();
        $data['taiKhoans'] = $query->result();
        $this->load->view('viewChuNhaTros', $data);
    }
    
    public function layMatKhau() {
        $this->load->view("getMatKhau");
    }
    
    public function xuLyLayMatKhau() {
        
        $diaChiEmail = $this->input->post('email');
        $this->db->select('MAT_KHAU');
        $this->db->from('tai_khoan');
        $this->db->where('EMAIL', $diaChiEmail);
        $this->db->limit(1);
        $query = $this->db->get();
        $content = $query->row('MAT_KHAU');
        $this->session->set_userdata('diachi', $diaChiEmail);
        $this->session->set_userdata('matkhau', $content);
        //$content = $query->result();
        //print_r($content);
        //$data['content'] = $query->result();
        //redirect("Email/gui/".md5($diaChiEmail)."/".$content);
        redirect("Email");
        //$this->load->view("viewMatKhau", $data);
    }
    
    public function xemtaikhoantheoloaitaikhoan($maLoaiTk){
        $this->db->select("*");
        $this->db->from('tai_khoan');
        $this->db->where('MA_LTK', $maLoaiTk);
        $query = $this->db->get();
        $data['taiKhoans'] = $query->result();
       $this->load->view('viewTaiKhoan', $data);
    }
    
}

?>
