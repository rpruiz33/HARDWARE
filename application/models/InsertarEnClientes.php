<?php

class InsertarEnClientes extends CI_Model {

 

    function __construct() { 
        parent::__construct();
    }

// La funcion guarda nombre y apellido en la tabla clientes
function gurdarCliente($id,$nombre,$apellido,$dni,$email,$clave){   

		if($id > 0){
			$data = array(
			'nombre' => $nombre,
			'apellido' => $apellido,
			'dni' => $dni,
			'email' => $email,
			'clave'=>$clave	);
		
			$this->db->where ('id' ,  $id);
			$this->db->insert('clientes' ,  $data);
		}else{
			$consulta = $this->db->query("INSERT INTO clientes (nombre,apellido,dni,email,clave)   VALUES ('$nombre', '$apellido','$dni','$email','$clave')");
		}
        
       
}

function gurdarCliente2($id,$nombre,$apellido,$email,$dni,$clave){   

	if($id > 0){
		$data = array(
		'nombre' => $nombre,
		'apellido' => $apellido,
		'dni' => $dni,
		'email' => $email,
		'clave'=>$clave	);
	
		$this->db->where ('id' ,  $id);
		$this->db->update('clientes' ,  $data);
		
	}else{
		$consulta = $this->db->query("INSERT INTO clientes (nombre,apellido,dni,email,clave)   VALUES ('$nombre', '$apellido','$dni','$email','$clave')");
	}

		}
    
}
