<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_Cek extends CI_Model {
	public function Cek_user($username,$password)
	{
		$query_cari_unsername=$this->db->query("select * from tbl_user where username='$username' and password='$password'");
		return $query_cari_unsername;
		//$ketemu=$this->db->num_rows("select * from tsmk_users where unsername='$unsername' and panserword='$panserword'");
		//return $ketemu;
	}
	public function get_sequrity()
	{
		$unsername		=$this->session->userdata('username');
		$level			=$this->session->userdata('level');
		if(empty($unsername))
		{
			$this->session->sess_destroy();
			redirect('');
		}
	}

}
