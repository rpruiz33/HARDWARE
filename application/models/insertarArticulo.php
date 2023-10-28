<?php

class InsertarArticulo extends CI_Model {

 

    function __construct() { 
        parent::__construct();
	}


    public function guardarArticulo($nombre, $descripcion, $precio, $imagen) {
      
        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'precio' => $precio,
            'imagen' => $imagen  
        );

        $this->db->insert('articulos', $data);
    }

    public function modificarArt($nombre, $descripcion, $precio, $imagen) {
      
        $data = array(
            'nombre' => $nombre,
            'descripcion' => $descripcion,
            'precio' => $precio,
            'imagen' => $imagen  
        );
        $this->db->where('id',$id);
       $query= $this->db->update('articulos', $data);
    }


function getArticulo($id){
    $this->db->where('id',$id);
    $query=$this->db->get('articulos');
    return $query->row();

}

function updateArticulo($data,$id)
{
    $this->db->where('id',$id);
    $this->db->update('articulos',$data);

}



 function Eliminar( $id){
         $this->db->where('id', $id);  
         $this->db->delete('articulos');  
}


}










 
