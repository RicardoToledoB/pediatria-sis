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
    
}

