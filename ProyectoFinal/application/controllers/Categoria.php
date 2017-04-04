<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categoria extends CI_Controller {

	public function index()
	{
		$this->load->view('principal');
	}

	public function bicicleta(){
		$this->load->view('categorias/bicicletas');
	}
	public function piezabicicleta(){
		$this->load->view('categorias/pieza-de-bicicletas');
	}
	public function herramientas(){
		$this->load->view('categorias/herramientas');
	}
	public function ropa(){
		$this->load->view('categorias/ropa-deportiva');
	}

}

/* End of file categoria.php */
/* Location: ./application/controllers/categoria.php */