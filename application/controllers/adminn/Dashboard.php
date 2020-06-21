<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent:: __construct();
		//$this->load->model('Mdl_admin');
		//$this->load->model('Mdl_Cek');
		$this->load->library('session');
		$this->load->helper('cookie');
		//$this->load->libraries('session');
	}
	public function index()
	{
		$this->load->model('Mdl_Cek');
		$this->Mdl_Cek->get_sequrity();
		$this->load->view('adminn/admin_view');
	}
}
