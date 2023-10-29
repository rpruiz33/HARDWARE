<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iniciar extends CI_Controller {

    public function __construct()
        {
            parent::__construct();
            $this->load->database();
            $this->load->model('ModeloLogueo');
            $this->load->model('ModeloCliente');
            $this->load->library('session');
        }
    
    public function index()
    {
        $dato['conforme'] = "";
        $this->load->view('logueo/ingresoSistema', $dato);
    }

    public function ValidaUsuario() {
        $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_SPECIAL_CHARS);
        $pass = filter_input(INPUT_POST, 'pass', FILTER_SANITIZE_SPECIAL_CHARS);
        $tipo_cliente = $this->input->post('tipo_cliente');

      
        $valido = $this->ModeloLogueo->valIngreso($usuario, $pass, $tipo_cliente);
     
        if ($valido != null) {
            $this->session->set_userdata('tipo_cliente', $tipo_cliente);
            $this->load->view('principal/cabecera',$tipo_cliente);
            $this->load->view('principal/bienvenida');
            $this->load->view('principal/footer');
        } else {
            $dato['conforme'] = "Clave y usuario incorrectos";
            $this->load->view('logueo/ingresoSistema', $dato);
        }
    }
    public function ValidaLogin() {
        $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_SPECIAL_CHARS);
        $dni = filter_input(INPUT_POST, 'dni', FILTER_SANITIZE_SPECIAL_CHARS);
        $tipo_cliente = $this->input->post('tipo_cliente');

        $valido = $this->ModeloLogueo->valLogin($nombre, $dni);
   
        if ($valido != null) {
            
            $this->load->view('principal/cabecera');
            $this->load->view('principal/bienvenida');
            $this->load->view('principal/footer');
        } else {
           
            $this->load->view('principal/cabecera');
            $this->load->view('principal/login');
            $this->load->view('principal/footer');
        }
       
    }
 
    public function funcClientes($id) {
        $this->load->model('ModeloCliente');
        
        $data ['clientes'] = $this->ModeloCliente->getCliente($id);
        $data['id'] = $id;
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $nombre = $this->input->post('nombre');
            $apellido = $this->input->post('apellido');
            $email = $this->input->post('email');
            $dni = $this->input->post('dni');
            $clave= $this->input->post('clave');
            $articulo_data = array(
                'nombre' => $nombre,
                'apellido' => $apellido,
                'email' => $email,
                'dni'=>$dni,
                'clave'=>$clave
               
            );
           
        $status =$this->ModeloCliente->actualizarDatosCliente($id, $nombre, $apellido,$email,$dni,$clave);  
        if ($status == true) {
            $this->session->set_flashdata('success', 'successfully Updated');
            $this->load->view('principal/cabecera');
            $this->load->view('principal/bienvenida');
            $this->load->view('principal/footer');
        } else {
            $this->session->set_flashdata('error', 'Error');
            $this->load->view('principal/cabecera');
            $this->load->view('principal/bienvenida');
            $this->load->view('principal/footer');
        }

       
         
    }
    $this->load->view('principal/cabecera');
    $this->load->view('principal/editar_cliente', $data);
    $this->load->view('principal/footer');
}
   
public function funcClientes2($id){
    
    if($id != 0){
        $this->data['datos'] = $this->ModeloLogueo->datos_cliente($id);
        $this->load->view('principal/cabecera');
    $this->load->view('principal/editar_cliente', $this->data);
    $this->load->view('principal/footer');
    }else{
        $this->data['datos'] = null;   
        
            $this->load->view('principal/cabecera');
            $this->load->view('principal/registro');
            $this->load->view('principal/footer'); 
        }
    
    }






        
    
       public function funcArticulos() {
        $tipo_cliente = $this->session->userdata('tipo_cliente');
        $this->load->view('principal/cabecera',$tipo_cliente);
        $this->load->view('principal/articulos');
        $this->load->view('principal/footer');
    }

	public function index2() {
        $tipo_cliente = $this->session->userdata('tipo_cliente');
        $this->load->view('principal/cabecera',$tipo_cliente);
            $this->load->view('principal/bienvenida');
            $this->load->view('principal/footer');
	}
}
