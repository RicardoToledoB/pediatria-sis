<?php

class Paciente_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
        
    }
    public function list_all(){
        $result=$this->db->query("select * from paciente where estado='activo'");
        $this->db->close();
        return $result;
        
    }
    
}

