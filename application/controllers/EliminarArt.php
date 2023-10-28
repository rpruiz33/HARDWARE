<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class EliminarArt extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->model('ModeloLogueo');
        $this->load->library('session');
    }
    public function Eliminar ($id) {
            
       
    
        $this->load->model('insertarArticulo');
       $this-> insertarArticulo -> Eliminar($id);
	   $this->load->view('principal/cabecera');
       $this->load->view('principal/lista_articulos');
	   $this->load->view('principal/footer');
      }
}

     


    



