<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {


	

	public function index()
	{
		
		$this->load->view('principal');
	}

	public function registrarse(){

		$this->load->view('usuarios/registrarse');
	}

	public function login(){
		

		$this->load->view('usuarios/login');
	}

	public function salir(){
		
		$this->load->view('usuarios/salir');

	}
	public function publicar(){

		$this->load->view('usuarios/publicar');
	}

	public function prueba(){
		$this->load->view('prueba');
	}


}

/* End of file usuarios.php */
/* Location: ./application/controllers/usuarios.php */