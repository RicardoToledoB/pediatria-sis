<?php

class Usuario_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
        
    }
    public function list_all(){
        $query=$this->db->query("select * from Usuario where estado='activo'");
        $this->db->close();
        return $query;
    }
    public function save($nombre,$apepat,$apemat,$rol_id,$username,$password,$telefono,$ceular,$correo,$estado){
        $this->db->query("insert into Usuario(nombre,apepat,apemat,rol_id,username,password,telefono,celular,correo,estado) values('".$nombre."','".$apepat."','".$apemat."','".$rol_id."','".$username."','".$password."','".$telefono."','".$ceular."','".$correo."','".$estado."')");
        $this->db->close();
    }
}

