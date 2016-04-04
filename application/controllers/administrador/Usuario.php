<?php

class Usuario extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index(){
        $this->load->view('administrador/usuario/usuario_index');
    }
    public function nuevo(){
        $this->load->view('administrador/usuario/usuario_new');
    }
    public function editar(){
        $this->load->view('administrador/usuario/usuario_edit');
    }
    public function ver(){
        $this->load->view('administrador/usuario/usuario_view');
    }
}
