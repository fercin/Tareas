<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicar extends CI_Controller {

	public function index()
	{
		$this->load->view('persona/inicioprueba');		
	}

	public function anuncio(){
		$this->load->view('persona/publicar');
	}

	public function ver($cod=0){
		if ($cod==0) {
			redirect('principal');
		}



		$data = array();
		$data['codigo'] = $cod;

		$this->load->view('persona/ver', $data);

	}

}

/* End of file publicar.php */
/* Location: ./application/controllers/publicar.php */