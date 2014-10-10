<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        $data["nhaTros"] = $this->modelNhaTro->findAll();
        $this->load->view('index', $data);
    }
}
