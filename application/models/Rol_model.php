<?php

class Rol_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
        
    }
    public function list_all(){
        $query=$this->db->query("select * from Rol ");
        $this->db->close();
        return $query;
        
    }
    public function save($tipo){
        $this->db->query("insert into Rol(tipo) values('".$tipo."')");
        $this->db->close();
    }
}
