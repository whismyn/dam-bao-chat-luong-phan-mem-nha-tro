<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
		$data['tinhThanhs'] = $this->modelTinhThanh->findAll();
        $data['quanHuyens'] = $this->modelQuanHuyen->findAll();
        $data['phuongXas'] = $this->modelPhuongXa->findAll();
		
		$this->db->select("*");
		$this->db->from("nha_tro");
		$this->db->where("DUYET", 1);
		$this->db->order_by("TG_TAO_NT","desc");
		$query = $this->db->get();
        $data["nhaTros"] = $query->result();
        $this->load->view('index', $data);
    }
}
