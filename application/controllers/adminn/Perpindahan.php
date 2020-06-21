<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perpindahan extends CI_Controller {
	function __construct(){
		parent:: __construct();
		//$this->load->model('Mdl_admin');
		//$this->load->model('Mdl_Cek');
		$this->load->library('session');
		$this->load->helper('cookie');
		$this->load->helper(array('form','url'));
		$this->load->library('upload');
		//$this->load->libraries('session');
	}
	public function index()
	{
		$this->load->model('Mdl_Cek');
		$this->Mdl_Cek->get_sequrity();
		$this->load->model('Mdl_Adminn');
		$data['Judul'] 			="Dashboard";
		$data['Sub_Judul'] 		="Data Pendaftar Jalur Perpindahan";
		$data['Data_perpindahan'] =$this->Mdl_Adminn->get_limit_data_jalur_perpindahan();
		$this->load->view('adminn/admin_view',$data);
    }
    public function Add()
    {
		$this->load->model('Mdl_Cek');
		$this->Mdl_Cek->get_sequrity();
        $this->load->model('Mdl_Adminn');
		$data['Judul'] 			="Dashboard";
		$data['Sub_Judul'] 		="Data Pendaftar Jalur Perpindahan";
		$data['Data_jurusan'] =$this->Mdl_Adminn->get_limit_data_jurusan();
		$this->load->view('adminn/admin_view',$data);
	}
	public function save()
	{
		$this->load->model('Mdl_Cek');
		$this->Mdl_Cek->get_sequrity();
        $nama_lamp_akta=$_FILES['lamp_akta_lahir']['name'];
        $nama_lamp_kk=$_FILES['lamp_kk']['name'];
        $nama_skpt=$_FILES['skpt']['name'];
        $nama_skptm=$_FILES['skptm']['name'];
        $nama_sertifikat_pendidik=$_FILES['sertifikat_pendidik']['name'];
		$nama_lamp_foto_ijazah=$_FILES['lamp_foto_ijazah']['name'];
		$nama_lamp_foto_skhun =$_FILES['lamp_foto_skhun']['name'];
		$this->load->model('Mdl_Adminn');
		$this->db->trans_start();
		$pencariannisn 	=$this->Mdl_Adminn->search_nisn_nik($this->input->post('nisn',TRUE),$this->input->post('nik',TRUE));
		if ($pencariannisn->num_rows()>0) {
			$this->session->set_flashdata('pesan', 'Maaf, NISN atau NIK sudah terdaftar.!! Mohon periksa kembali');
		}
		else{
			if (!empty($nama_lamp_akta)) {
				$acak=rand(1000,9999);
				$namasimpanakta=$acak."-".$_FILES['lamp_akta_lahir']['name'];
				$config['upload_path'] = './images/akta_lahir/';
				$config['allowed_types'] = 'jpg';
				$config['max_size']	= '2048';
				$config['overwrite'] = true;
				$config['file_name'] = $namasimpanakta;
			
				$this->upload->initialize($config); // Load konfigurasi uploadnya
				if (!$this->upload->do_upload('lamp_akta_lahir')) {
				$namasimpanakta="";
				}
			}
			else{
				$namasimpanakta="";
			}
			if (!empty($nama_lamp_kk)) {
				$acak=rand(1000,9999);
				$namasimpankk=$acak."-".$_FILES['lamp_kk']['name'];
				$config['upload_path'] = './images/kk/';
				$config['allowed_types'] = 'jpg';
				$config['max_size']	= '2048';
				$config['overwrite'] = true;
				$config['file_name'] = $namasimpankk;
			
				$this->upload->initialize($config); // Load konfigurasi uploadnya
				if (!$this->upload->do_upload('lamp_kk')) {
					$namasimpankk="";
				}
			}
			else{
				$namasimpankk="";
			}
			if (!empty($nama_lamp_foto_ijazah)) {
				$acak=rand(1000,9999);
				$namasimpanijazah=$acak."-".$_FILES['lamp_foto_ijazah']['name'];
				$config['upload_path'] = './images/ijazah/';
				$config['allowed_types'] = 'jpg';
				$config['max_size']	= '2048';
				$config['overwrite'] = true;
				$config['file_name'] = $namasimpanijazah;
			
				$this->upload->initialize($config); // Load konfigurasi uploadnya
				if (!$this->upload->do_upload('lamp_foto_ijazah')) {
				$namasimpanijazah="";
				}
				
			}
			else{
				$namasimpanijazah="";
			}
			if (!empty($nama_lamp_foto_skhun)) {
				$acak=rand(1000,9999);
				$namasimpanskhun=$acak."-".$_FILES['lamp_foto_skhun']['name'];
				$config['upload_path'] = './images/skhun/';
				$config['allowed_types'] = 'jpg';
				$config['max_size']	= '2048';
				$config['overwrite'] = true;
				$config['file_name'] = $namasimpanskhun;
			
				$this->upload->initialize($config); // Load konfigurasi uploadnya
				if (!$this->upload->do_upload('lamp_foto_skhun')) {
					$namasimpanskhun="";

				}
				
			}
			else{
				$namasimpanskhun="";
            }
            if (!empty($nama_skpt)) {
				$acak=rand(1000,9999);
				$namasimpanskpt=$acak."-".$_FILES['skpt']['name'];
				$config['upload_path'] = './images/skpt/';
				$config['allowed_types'] = 'jpg';
				$config['max_size']	= '2048';
				$config['overwrite'] = true;
				$config['file_name'] = $namasimpanskpt;
			
				$this->upload->initialize($config); // Load konfigurasi uploadnya
				if (!$this->upload->do_upload('skpt')) {
					$namasimpanskpt="";

				}
				
			}
			else{
				$namasimpanskpt="";
            }
            if (!empty($nama_skptm)) {
				$acak=rand(1000,9999);
				$namasimpanskptm=$acak."-".$_FILES['skptm']['name'];
				$config['upload_path'] = './images/skptm/';
				$config['allowed_types'] = 'jpg';
				$config['max_size']	= '2048';
				$config['overwrite'] = true;
				$config['file_name'] = $namasimpanskptm;
			
				$this->upload->initialize($config); // Load konfigurasi uploadnya
				if (!$this->upload->do_upload('skptm')) {
				$namasimpanskptm="";
					
				}
				
			}
			else{
				$namasimpanskptm="";
            }
            if (!empty($nama_sertifikat_pendidik)) {
				$acak=rand(1000,9999);
				$namasimpansertifikatpendidik=$acak."-".$_FILES['sertifikat_pendidik']['name'];
				$config['upload_path'] = './images/sertifikat_pendidik/';
				$config['allowed_types'] = 'jpg';
				$config['max_size']	= '2048';
				$config['overwrite'] = true;
				$config['file_name'] = $namasimpansertifikatpendidik;
			
				$this->upload->initialize($config); // Load konfigurasi uploadnya
				if (!$this->upload->do_upload('sertifikat_pendidik')) {
				$namasimpansertifikatpendidik="";
					
				}
				
			}
			else{
				$namasimpansertifikatpendidik="";
			}
			$this->Mdl_Adminn->insert_pendaftar_perpindahan($namasimpanakta,$namasimpankk,$namasimpanijazah,$namasimpanskhun,$namasimpanskpt,$namasimpanskptm,$namasimpansertifikatpendidik);
		}
		$this->db->trans_complete();
		redirect('adminn/Perpindahan/');
	}
}
