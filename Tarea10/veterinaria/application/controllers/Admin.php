<?php

session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){

		parent::__construct();

		$metodo = $this->router->fetch_method();

		if (!isset($_SESSION['gale_user']) && $metodo != 'login') {
			
			redirect('admin/login');
		}
	}

	public function index()
	{
		$this->load->view('admin/inicio');
	}

	public function login(){

		$this->load->view('admin/login');

	}

	public function salir(){
		unset($_SESSION['gale_user']);
		redirect('admin/login');

	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */