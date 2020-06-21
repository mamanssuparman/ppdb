<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {
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
		$this->load->model('Mdl_Adminn');
		$data['Judul'] 			="Dashboard";
		$data['Sub_Judul'] 		="Data Jurusan";
		$data['Data_Pendaftar'] =$this->Mdl_Adminn->get_limit_data_jurusan();
		$this->load->view('adminn/admin_view',$data);
	}
	public function Update($id_jurusan=null)
	{
		$this->load->model('Mdl_Cek');
		$this->Mdl_Cek->get_sequrity();
		$this->load->model('Mdl_Adminn');
		$this->Mdl_Adminn->update_jurusan($id_jurusan);
		redirect('adminn/Jurusan/');
	}
	public function add()
	{
		$this->load->model('Mdl_Cek');
		$this->Mdl_Cek->get_sequrity();
		$this->load->model('Mdl_Adminn');
		$this->Mdl_Adminn->add_jurusan();
		redirect('adminn/Jurusan/');
	}
}
