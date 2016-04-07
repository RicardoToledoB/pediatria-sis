<?php

class Atencion extends CI_Controller{
    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Atencion_model');
         $this->load->library('session');
        if ($this->session->userdata('logueado')) {
            if($this->session->userdata('tipo')=='medico'){
                
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
        $result=$this->Atencion_model->list_all();
        $data['atencion']=$result->result_object();
        $this->load->view('medico/atencion/atencion_index',$data);
    }
    public function nuevo(){
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $this->load->view('medico/atencion/atencion_new',$data);
    }
    public function guardar(){
        $indicacion=$this->input->post('indicacion');
        $cita_id=$this->input->post('cita_id');
        //OBTENGO EL ID DE LA SESION
        $usuario_id=$this->session->userdata('id');
        $this->Usuario_model->save($indicacion,'activo',$cita_id,$usuario_id);
        redirect(base_url() . 'index.php/medico/atencion');
    }
    
    public function editar(){
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $this->load->view('medico/atencion/atencion_edit',$data);
    }
    public function ver(){
        $data['id'] = $this->session->userdata('id');
        $data['nombre'] = $this->session->userdata('nombre');
        $data['tipo']=$this->session->userdata('tipo');
        $this->load->view('medico/atencion/atencion_view',$data);
    }
}
