<?php

class Usuario extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Usuario_model');
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
        $result = $this->Usuario_model->list_all();
        $data['usuario'] = $result->result_object();
        $this->load->view('administrador/usuario/usuario_index', $data);
    }

    public function nuevo() {
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $this->load->view('administrador/usuario/usuario_new',$data);
    }
    
    public function guardar(){
        $nombre=$this->input->post('nombre');
        $apepat=$this->input->post('apepat');
        $apemat=$this->input->post('apemat');
        $rol_id=$this->input->post('rol_id');
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $telefono=$this->input->post('telefono');
        $celular=$this->input->post('celular');
        $correo=$this->input->post('correo');
        //$estado=$this->estado->post('estado');
        $this->Usuario_model->save($nombre,$apepat,$apemat,$rol_id,$username,$password,$telefono,$celular,$correo,'activo');
        redirect(base_url() . 'index.php/administrador/usuario');
    }

    public function editar() {
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $this->load->view('administrador/usuario/usuario_edit',$data);
    }

    public function ver() {
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $this->load->view('administrador/usuario/usuario_view',$data);
    }

}
