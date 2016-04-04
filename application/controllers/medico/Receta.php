<?php

class Receta extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }
    public function index(){
        $this->load->view('medico/receta/receta_index');
    }
    public function nuevo(){
        $this->load->view('medico/receta/receta_new');
    }
    public function editar(){
        $this->load->view('medico/receta/receta_edit');
    }
    public function ver(){
        $this->load->view('medico/receta/receta_view');
    }
}
