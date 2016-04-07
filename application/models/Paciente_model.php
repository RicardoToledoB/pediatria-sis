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
    
    public function save($rut,$nombre,$apepat,$apemat,$telefono,$celular,$direccion,$estado){
        $this->db->query("insert into Paciente(rut,nombre,apepat,apemat,telefono,celular,direccion,estado) values('".$rut."','".$nombre."','".$apepat."','".$apemat."','".$telefono."','".$celular."','".$direccion."','".$estado."')");
        $this->db->close();
        
    }
    
}

