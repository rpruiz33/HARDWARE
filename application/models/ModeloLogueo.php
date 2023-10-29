<?php

class ModeloLogueo extends CI_Model {

 

    function __construct() { 
        parent::__construct();
    }



    function valIngreso($usuario, $pass, $tipo_cliente) {
      
     
        $consulta = $this->db->query("SELECT usuario, pass, tipo_cliente FROM user WHERE usuario = '" . $usuario . "' AND pass = '" . $pass . "' AND tipo_cliente = '" . $tipo_cliente . "'");
        if ($consulta->num_rows() == 1) {
            return $consulta->row();
        } else {
            return false;
        }
    }

    function valLogin($nombre, $dni) {
 
        $consulta = $this->db->query("SELECT nombre,dni FROM clientes  WHERE nombre = '" . $nombre. "' and dni='" . $dni."'");

        $this->session->set_userdata('nombre', $nombre);
        if ($consulta->num_rows() == 1) {
            return $consulta->row();
        } else {
            return false;
        }
    }

    function  modificarDatos($idcliente,$nombre,$apellido){
        $data = array(
        'nombre' => $nombre,
        'apellido' => $apellido,

        'id'=>$idcliente);
        $this->db->where ('idcliente' ,  $idcliente);
        $this->db->update('clientes' ,  $data);
    }

    function  datos_cliente($idcliente){
        $consulta = $this->db->query("SELECT * FROM clientes WHERE id = '" . $idcliente ."'");
        if ($consulta->num_rows() == 1) {
            return $consulta->row();
        } else {
            return false;
      }
}
	
    
}


