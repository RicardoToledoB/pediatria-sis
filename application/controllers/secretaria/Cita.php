<?php

class Cita extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        
    }
    public function index(){
        $this->load->view('secretaria/cita/cita_index');
    }
    public function nuevo(){
        $this->load->view('secretaria/cita/cita_new');
    }
    public function editar(){
        $this->load->view('secretaria/cita/cita_edit');
    }
    public function ver(){
        $this->load->view('secretaria/cita/cita_view');
    }
}
