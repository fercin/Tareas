<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicar extends CI_Controller {

	public function index()
	{
		
	}

	public function ver($cod=0){
		if ($cod==0) {
			redirect('principal');
		}
		$data = array();
		$data['cod'] = $cod;


		$this->load->view('usuarios/ver', $data);
	}

}

/* End of file Publicar.php */
/* Location: ./application/controllers/Publicar.php */