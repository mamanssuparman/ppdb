<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jalur_daftar extends CI_Controller {
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
		$data['Sub_Judul'] 		="Data Jalur Pendaftaran";
		$data['Data_jalur'] =$this->Mdl_Adminn->get_limit_data_jalur_daftar();
		$this->load->view('adminn/admin_view',$data);
    }
    public function Add()
    {
		$this->load->model('Mdl_Cek');
		$this->Mdl_Cek->get_sequrity();
        $this->load->model('Mdl_Adminn');
        $this->Mdl_Adminn->Save_jalur_daftar();
        redirect('adminn/Jalur_daftar/');
    }
    public function Update($id_jalur)
    {
		$this->load->model('Mdl_Cek');
		$this->Mdl_Cek->get_sequrity();
        $this->load->model('Mdl_Adminn');
        $this->Mdl_Adminn->Update_jalur_pendaftaran($id_jalur);
        redirect('adminn/Jalur_daftar');
    }
}
