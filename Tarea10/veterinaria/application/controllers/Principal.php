<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function __construct(){

		parent::__construct();
	}

	public function index()
	{
		$this->load->view('persona/inicioprueba');
	}

	public function publicar(){

		$this->load->view('persona/publicar');
	}

}

/* End of file principal.php */
/* Location: ./application/controllers/principal.php */