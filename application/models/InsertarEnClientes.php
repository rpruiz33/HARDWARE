<?php

class InsertarEnClientes extends CI_Model {

 

    function __construct() { 
        parent::__construct();
    }


function gurdarCliente($id,$nombre,$apellido,$email,$dni){   

		if($id > 0){
			$data = array(
			'nombre' => $nombre,
			'apellido' => $apellido,
			'dni' => $dni,
			'email' => $email,
				);
		
			$this->db->where ('id' ,  $id);
			$this->db->insert('clientes' ,  $data);
		}else{
			$consulta = $this->db->query("INSERT INTO clientes (nombre,apellido,email,dni)   VALUES ('$nombre', '$apellido','$email','$dni')");
		}
        
       
}

function gurdarCliente2($id,$nombre,$apellido,$email,$dni){   

	if($id > 0){
		$data = array(
		'nombre' => $nombre,
		'apellido' => $apellido,
		'dni' => $dni,
		'email' => $email,);
	
		$this->db->where ('id' ,  $id);
		$this->db->update('clientes' ,  $data);
		
	}else{
		$consulta = $this->db->query("INSERT INTO clientes (nombre,apellido,email,dni)   VALUES ('$nombre', '$apellido','$email','$dni')");
	}

		}
		public function repetido($dni){
			$this->db->where('dni', $dni);
			$query = $this->db->get('clientes'); 
		
			if ($query->num_rows() > 0) {
				
				return true;
			} else {
				
				return false;
			}
		}
		
}
