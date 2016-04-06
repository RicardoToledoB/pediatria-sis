<?php

class Cita extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Cita_model');
        $this->load->library('session');
        if ($this->session->userdata('logueado')) {
            if($this->session->userdata('tipo')=='secretaria'){
                
            }else{
                redirect(base_url().'index.php/error403');
            }
        } else {
            redirect(base_url() . 'index.php/login');
        }
        
    }
    public function index(){
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $result=$this->Cita_model->list_all();
        $data['cita']=$result->result_object();
        $this->load->view('secretaria/cita/cita_index',$data);
    }
    public function nuevo(){
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $this->load->view('secretaria/cita/cita_new',$data);
    }
    public function editar(){
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $this->load->view('secretaria/cita/cita_edit',$data);
    }
    public function ver(){
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $this->load->view('secretaria/cita/cita_view',$data);
    }
}
