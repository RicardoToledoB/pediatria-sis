<?php

class Rol extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Rol_model');
        $this->load->library('session');
        if ($this->session->userdata('logueado')) {
            if ($this->session->userdata('tipo') == 'administrador') {
                
            } else {
                redirect(base_url() . 'index.php/error403');
            }
        } else {
            redirect(base_url() . 'index.php/login');
        }
    }

    public function index() {
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $query = $this->Rol_model->list_all();
        $data['rol'] = $query->result_object();
        $this->load->view('administrador/rol/rol_index', $data);
    }

    public function nuevo() {
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $this->load->view('administrador/rol/rol_new',$data);
    }
    
    public function guardar(){
        $tipo=$this->input->post('tipo');
        $this->Rol_model->save($tipo);
        redirect(base_url() . 'index.php/administrador/rol');
        
    }

    public function editar() {
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $this->load->view('administrador/rol/rol_edit',$data);
    }

    public function ver() {
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $this->load->view('administrador/rol/rol_view',$data);
    }

}
