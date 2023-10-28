<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OperarDatos extends CI_Controller {

        public function __construct() {
            parent::__construct();
          
    		$this->load->library('session');
            /*--------------------------*/
            $this->load->model('ModeloCliente');
        }
       
	        
        public function RecibirGrabar(){
            
            {
            $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS); 
            $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS); 
            $apellido = filter_input(INPUT_POST, 'apellido', FILTER_SANITIZE_SPECIAL_CHARS);
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
            $dni = filter_input(INPUT_POST, 'dni', FILTER_SANITIZE_SPECIAL_CHARS);
            $clave=filter_input(INPUT_POST, 'clave', FILTER_SANITIZE_SPECIAL_CHARS);
            //echo("nombre ".$nombre."<br> apellido ".$apellido);
           if($apellido==null){
            $this->load->view('principal/cabecera');
            $this->load->view('principal/nuevoCliente');
            $this->load->view('principal/footer');
           }else{
            $this->load->model('InsertarEnClientes');
            $valido=$this->InsertarEnClientes->gurdarCliente($id,$nombre,$apellido,$email,$dni);
            $this->load->view('principal/cabecera');
            $this->load->view('principal/nuevoCliente');
            $this->load->view('principal/footer');
            }
        
        }}
                public function RecibirGrabar2(){
            
            if ($this->session->userdata('tipo_cliente') == 1){
                $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS); 
                $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS); 
                $apellido = filter_input(INPUT_POST, 'apellido', FILTER_SANITIZE_SPECIAL_CHARS);
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
                $dni = filter_input(INPUT_POST, 'dni', FILTER_SANITIZE_SPECIAL_CHARS);
                $clave=filter_input(INPUT_POST, 'clave', FILTER_SANITIZE_SPECIAL_CHARS);
            //echo("nombre ".$nombre."<br> apellido ".$apellido);
            if($apellido==null){
                $this->load->view('principal/cabecera');
                $this->load->view('principal/nuevoCliente');
                $this->load->view('principal/footer');
               

            }else{
                $this->load->model('InsertarEnClientes');
                $valido=$this->InsertarEnClientes->gurdarCliente2($id,$nombre,$apellido, $email,$dni);
                $this->load->view('principal/cabecera');
                $this->load->view('principal/bienvenida');
                $this->load->view('principal/footer');
            }
          
            
            
        $this->load->view('principal/cabecera');
        $this->load->view('principal/nuevoCliente');
        $this->load->view('principal/footer');
  
        }


    }
        public function Cargar(){
            $this->load->view('principal/cabecera');
            $this->load->view('principal/detalle_usuario');
            $this->load->view('principal/footer');
        }
		public function GrabarArticulo(){
			$nombre_articulo = $this->input->post('nombre');
			$descripcion_articulo = $this->input->post('descripcion');
			$precio_articulo = $this->input->post('precio');
		
		
			$config['upload_path'] = FCPATH . 'assets/imagenes';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size'] = 1024 * 5; 
		
			$this->load->library('upload', $config);
		
			if (!$this->upload->do_upload('imagen')) {
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			} else {
				$data = array('upload_data' => $this->upload->data());
				$imagen_articulo = $data['upload_data']['file_name'];
		
				
				
				$this->load->model('InsertarArticulo');
				$valido = $this->InsertarArticulo->guardarArticulo($nombre_articulo, $descripcion_articulo, $precio_articulo, $imagen_articulo);
				$this->load->view('principal/cabecera');
				$this->load->view('principal/bienvenida');
				$this->load->view('principal/footer');
			}
	    }
        
        public function listarArt(){
            $this->load->model('InsertarArticulo');
            $data_art['articulos']= $this->InsertarArticulo->getArticulo($id=1);
        
		  $this->load->view('principal/cabecera');
            $this->load->view('principal/lista_articulos',$data_art);
            $this->load->view('principal/footer');
        }
       
        public function actualizarCliente() {
           $data['id']=$id;
            $data['nombre']=$nombre;
            $data['apellido']=$apellido;
            $data['email']=$email;
            $data['dni']=$dni;
            
            //var_dump($nuevoApellido);
        
            //$this->ModeloCliente->actualizarDatosCliente($id_cliente, $nuevoNombre, $nuevoApellido);
        
            $this->load->model('ModeloCliente');
            $this->ModeloCliente->actualizarDatosCliente($id, $nombre, $apellido,$dni,$email);

            $this->load->view('principal/cabecera');
            $this->load->view('principal/editar_cliente',$data);
            $this->load->view('principal/footer');
        }

        public function bajaCliente($id) {
            $this->load->model('ModeloCliente');
            $this->ModeloCliente-> bajaCliente($id);
        
            $this->load->view('principal/cabecera');
            $this->load->view('principal/nuevoCliente');
            $this->load->view('principal/footer');
        }

        public function editarProducto($id){
            $this->load->model('InsertarArticulo');
            $data['articulo'] = $this->InsertarArticulo->getArticulo($id);
            $data['id'] = $id;

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $nombre = $this->input->post('nombre');
                $descripcion = $this->input->post('descripcion');
                $precio = $this->input->post('precio');
                $imagen2 = $this->input->post('imagen2');  

                $config['upload_path'] = FCPATH . 'assets/imagenes';
                $config['allowed_types'] = 'gif|jpg|jpeg|png';
                $config['max_size'] = 1024 * 5;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('imagen')) {
                    $error = array('error' => $this->upload->display_errors());
                    print_r($error);
                } else {
                    
                    $data_imagen = array('upload_data' => $this->upload->data());
                    $imagen = $data_imagen['upload_data']['file_name'];

                   
                    if (!empty($imagen_antigua)) {
                        unlink(FCPATH . 'assets/imagenes/' . $imagen2);
                    }
                }

                $articulo_data = array(
                    'nombre' => $nombre,
                    'descripcion' => $descripcion,
                    'precio' => $precio,
                    'imagen' => isset($imagen) ? $imagen : $imagen2,
                );

                
                $status =$this->InsertarArticulo->updateArticulo($articulo_data, $id);
               
               if ($status == true) {
                   $this->session->set_flashdata('success', 'successfully Updated');
                   $this->load->view('principal/cabecera');
                   $this->load->view('principal/lista_articulos');
                   $this->load->view('principal/footer');
               } else {
                   $this->session->set_flashdata('error', 'Error');
                   $this->load->view('principal/cabecera');
                   $this->load->view('principal/bienvenida');
                   $this->load->view('principal/footer');
               }
               
              
            }

            $this->load->view('principal/cabecera');
            $this->load->view('principal/editar',$data);
            $this->load->view('principal/footer');
        }
}



