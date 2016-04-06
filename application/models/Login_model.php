<?php

class Login_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function validar($username, $password) {
        $query = $this->db->query("select usuario.usuario_id,usuario.username,usuario.password,rol.tipo,usuario.estado from usuario,rol  where usuario.rol_id=rol.rol_id and usuario.username='" . $username . "' and usuario.estado='activo'");
        $result = $query->result_object();
        $this->db->close();
        foreach ($result as $row) {
            if ($row->password == $password) {
                return $result;
            } else {
                return false;
            }
        }
    }
}