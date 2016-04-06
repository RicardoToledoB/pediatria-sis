<?php

class Cita_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
        
    }
    public function list_all(){
        $result=$this->db->query("select cita.cita_id,cita.fecha,cita.hora,cita.estado,paciente.rut,usuario.nombre from cita,usuario,paciente where cita.usuario_id=usuario.usuario_id and cita.paciente_id=paciente.paciente_id");
        $this->db->close();
        return $result;
    }
    
}

