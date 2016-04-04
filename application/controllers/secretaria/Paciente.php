<?php

class Paciente extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index(){
        $this->load->view('secretaria/paciente/paciente_index');
    }
    public function nuevo(){
        $this->load->view('secretaria/paciente/paciente_new');
    }
    public function editar(){
        $this->load->view('secretaria/paciente/paciente_edit');
    }
    public function ver(){
        $this->load->view('secretaria/paciente/paciente_view');
    }
}

