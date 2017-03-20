<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro extends CI_Controller {


	public function __construct(){

		parent::__construct();
	}

	public function index()
	{
		$this->load->view('inicio');
	}

	public function iniciarsession(){
		$this->load->view('persona/iniciarsession');
	}

	public function crearcuenta(){

		$this->load->view('persona/crearcuenta');
	}

	public function exito(){

		$this->load->view('persona/exito');
	}

	public function salir(){
		$this->load->view('persona/salir');
	}

	public function entrar(){
		$this->load->view('persona/inicioprueba');
	}



}

/* End of file registro.php */
/* Location: ./application/controllers/registro.php */