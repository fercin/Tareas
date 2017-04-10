<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuenta extends CI_Controller {

	public function index()
	{
		$this->load->view('usuarios/mi-cuenta');
	}
	public function modificar($cod=0){
		if ($cod==0) {
			redirect('cuenta');
		}

		$data = array();
		$data['cod'] = $cod;

		$this->load->view('modificar', $data);
	}

	public function eliminar($cod=0){
		if ($cod==0) {
			redirect('cuenta');
		}
		$data = array();
		$data['cod'] = $cod;

		$this->load->view('eliminar', $data);
	}

	public function delete($cod=0){
		if ($cod==0) {
			redirect('admin');
		}
		$data = array();
		$data['cod'] = $cod;

		$this->load->view('delete', $data);
	}
	public function bloquear($cod=0){
		if ($cod==0) {
			redirect('admin');
		}
		$data = array();
		$data['codigo'] = $cod;

		$this->load->view('bloquear', $data);
	}
	public function desbloquear($cod=0){
		if ($cod==0) {
			redirect('admin');
		}
		$data = array();
		$data['codigo'] = $cod;

		$this->load->view('desbloquear', $data);
	}
		public function eliminara($cod=0){
		if ($cod==0) {
			redirect('admin');
		}
		$data = array();
		$data['codigo'] = $cod;

		$this->load->view('eliminara', $data);
	}


	

}

/* End of file Cuenta.php */
/* Location: ./application/controllers/Cuenta.php */