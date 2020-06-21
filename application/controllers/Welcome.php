<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->model('Mdl_Adminn');
		$data['jumlah_pendaftar_afirmasi'] 		= $this->Mdl_Adminn->get_jml_afirmasi();
		$data['jumlah_pendaftar_prestasi'] 		=$this->Mdl_Adminn->get_jml_prestasi();
		$data['jumlah_pendaftar_perpindahan'] 	=$this->Mdl_Adminn->get_jml_perpindahan();
		$data['jumlah_pendaftar_umum'] 			=$this->Mdl_Adminn->get_jml_umum();
		$data['jumlah_pendaftar_unggulan'] 		=$this->Mdl_Adminn->get_jml_unggulan();


		$this->load->view('hal_utama',$data);
	}
}
