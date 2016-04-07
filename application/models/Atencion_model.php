<?php
class Atencion_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
        
    }
    public function list_all(){
        $result=$this->db->query("select * from atencion");
        $this->db->close();
        return $result;
    }
    
    public function save($indicacion,$estado,$cita_id,$usuario_id){
        $this->db->query("insert into Atencion(indicacion,estado,cita_id,usuario_id) values('".$indicacion."','".$estado."','".$cita_id."','".$usuario_id."')");
        $this->db->close();
        
    }
}
