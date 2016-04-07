<?php

class Paciente extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Paciente_model');
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
        $result=$this->Paciente_model->list_all();
        $data['paciente']=$result->result_object();
        $this->load->view('secretaria/paciente/paciente_index',$data);
    }
    public function nuevo(){
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $this->load->view('secretaria/paciente/paciente_new',$data);
    }
    public function guardar(){
        $rut=$this->input->post('rut');
        $nombre=$this->input->post('nombre');
        $apepat=$this->input->post('apepat');
        $apemat=$this->input->post('apemat');
        $telefono=$this->input->post('telefono');
        $celular=$this->input->post('celular');
        $direccion=$this->input->post('direccion');
        $estado='activo';
        $this->Paciente_model->save($rut,$nombre,$apepat,$apemat,$telefono,$celular,$direccion,$estado);
        redirect(base_url() . 'index.php/secretaria/paciente');
        
    }
    
    public function editar(){
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $this->load->view('secretaria/paciente/paciente_edit',$data);
    }
    public function ver(){
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $this->load->view('secretaria/paciente/paciente_view',$data);
    }
}

