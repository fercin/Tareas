<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('inicio');
	}

	function ver($cod=0){

		if ($cod ==0) {
			redirect('web');
		}
		$dato = array();
		$dato['codigo'] = $cod;
		$this->load->view('ver',$dato);

	}

	public function acerca_de(){

		$this->load->view('acerca_de.php');
	}
}
