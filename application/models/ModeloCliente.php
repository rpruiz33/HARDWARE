<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModeloCliente extends CI_Model {
    function __construct() { 
        parent::__construct();
    }
  

    function actualizarDatosCliente($id, $nombre, $apellido,$email,$dni,$clave) {
      
        $datos = array(
            'nombre' => $nombre,
            'apellido' => $apellido,
            'email'=>$email,
            'dni'=>$dni,
            'clave'=>$clave);

        $this->db->where('id', $id);
        $this->db->update('clientes', $datos);
    }



    function getCliente($id){
        $this->db->where('id',$id);
        $query=$this->db->get('clientes');
        return $query->row();
    
    }
    
    
    function bajaCliente( $id){
        $this->db->where('id', $id);  
        $this->db->delete('clientes');  
    }
    


function updateCliente($data,$id){
    $this->db->where('id',$id);
    $this->db->update('clientes',$data);

}


}
