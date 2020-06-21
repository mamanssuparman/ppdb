<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_Adminn extends CI_Model {

	public function get_limit_data_jurusan()
	{
		return $this->db->query("select * from tbl_jurusan");
	}
	public function update_jurusan($id_jurusan)
	{
		$nama_jurusan 	=$this->input->post('nama_jurusan',TRUE);
		$deskripsi 		=$this->input->post('deskripsi',TRUE);
		return $this->db->query("update tbl_jurusan set nama_jurusan='$nama_jurusan',deskripsi='$deskripsi' where id_jurusan='$id_jurusan'");

	}
	public function add_jurusan()
	{
		$nama_jurusan 	=$this->input->post('nama_jurusan',TRUE);
		$deskripsi 		=$this->input->post('deskripsi',TRUE);
		return $this->db->query("insert into tbl_jurusan(nama_jurusan,deskripsi) values('$nama_jurusan','$deskripsi')");
	}
	public function get_limit_data_jalur_daftar()
	{
		return $this->db->query("select * from tbl_jalur_pendaftaran");
	}
	public function Save_jalur_daftar()
	{
		$judul 			=$this->input->post('judul',TRUE);
		$deskripsi 		=$this->input->post('deskripsi',TRUE);
		return $this->db->query("insert into tbl_jalur_pendaftaran(judul,deskripsi)values('$judul','$deskripsi')");
	}
	public function Update_jalur_pendaftaran($id_jalur)
	{
		$judul 			=$this->input->post('judul',TRUE);
		$deskripsi 		=$this->input->post('deskripsi',TRUE);
		return $this->db->query("update tbl_jalur_pendaftaran set judul='$judul',deskripsi='$deskripsi' where id_jalur='$id_jalur'");

	}
	public function get_limit_data_jalur_afirmasi()
	{
		return $this->db->query("select tbl_pendaftar.*, tbl_nilai.pai, tbl_nilai.pkn, tbl_nilai.bi, tbl_nilai.mtk,
		tbl_nilai.ipa, tbl_nilai.ipa, tbl_nilai.ips, tbl_nilai.bing, tbl_nilai.jml7_mapel, tbl_nilai.rata2un,
		tbl_nilai.na, tbl_jurusan.nama_jurusan from tbl_pendaftar left outer join tbl_nilai on tbl_pendaftar.id_pendaftar=tbl_nilai.id_pendaftar left outer join tbl_jurusan on tbl_pendaftar.jurusan_1=tbl_jurusan.id_jurusan where tbl_pendaftar.id_jalur='1'");
	}
	public function search_nisn_nik($nisn,$nik,$no_peserta_un)
	{
		return $this->db->query("select * from tbl_pendaftar where nisn='$nisn' or nik='$nik' or no_peserta_un='$no_peserta_un'");
	}
	public function insert_pendaftar_afirmasi($namasimpanakta,$namasimpankk,$namasimpankks,$namasimpankis,$namasimpankip,$namasimpankkh,$namasimpanijazah,$namasimpanskhun)
	{
		$nisn 			=$this->input->post('nisn',TRUE);
		$nokk 			=$this->input->post('nokk',TRUE);
		$nik 			=$this->input->post('nik',TRUE);
		$nama_lengkap 	=$this->input->post('nama_lengkap',TRUE);
		$jk 			=$this->input->post('jk',TRUE);
		$tempat_lahir	=$this->input->post('tempat_lahir',TRUE);
		$tgl_lahir 		=$this->input->post('tgl_lahir');
		$dusun 			=$this->input->post('dusun');
		$rt 			=$this->input->post('rt',TRUE);
		$rw 			=$this->input->post('rw',TRUE);
		$desa 			=$this->input->post('desa',TRUE);
		$kecamatan 		=$this->input->post('kecamatan',TRUE);
		$kabupaten 		=$this->input->post('kabupaten',TRUE);
		$kodepos 		=$this->input->post('kodepos',TRUE);
		$no_peserta_un 	=$this->input->post('no_peserta_un',TRUE);
		$no_seri_ijazah =$this->input->post('no_seri_ijazah',TRUE);
		$no_seri_skhun	=$this->input->post('no_seri_skhun',TRUE);
		$nilai_pai 		=$this->input->post('nilai_pai',TRUE);
		$nilai_pkn 		=$this->input->post('nilai_pkn',TRUE);
		$nilai_bi 		=$this->input->post('nilai_bi',TRUE);
		$nilai_mtk 		=$this->input->post('nilai_mtk',TRUE);
		$nilai_ipa 		=$this->input->post('nilai_ipa',TRUE);
		$nilai_ips 		=$this->input->post('nilai_ips',TRUE);
		$nilai_bing 	=$this->input->post('nilai_bing',TRUE);
		$nilai_rataun 	=$this->input->post('nilai_rataun',TRUE);
		$jurusan1 		=$this->input->post('pilihan1',TRUE);
		$jurusan2 		=$this->input->post('pilihan2',TRUE);
		$jurusan3 		=$this->input->post('pilihan3',TRUE);
		$asal_sekolah 	=$this->input->post('asal_sekolah',TRUE);
		$tahun_lulus 	=$this->input->post('tahun_lulus',TRUE);
		$agama 			=$this->input->post('agama',TRUE);
		$no_telepon 	=$this->input->post('no_telepon',TRUE);
		$titik_koordinat=$this->input->post('titik_koordinat',TRUE);
		$nama_ayah 		=$this->input->post('nama_ayah',TRUE);
		$nama_ibu 		=$this->input->post('nama_ibu',TRUE);
		$pekerjaan_ayah	=$this->input->post('pekerjaan_ayah',TRUE);
		$pekerjaan_ibu 	=$this->input->post('pekerjaan_ibu',TRUE);
		//$no_pendaftaran1 ='2021-01-';
		//$lamp_akta_lahir=$this->input->post('lamp_akta_lahir',TRUE);
		$this->db->query("insert into tbl_pendaftar(nisn,nokk,nik,nama_lengkap,jenis_kelamin,
		tempat_lahir,tgl_lahir,dusun,rt,rw,desa, kecamatan, kabupaten, kodepos,no_peserta_un, 
		no_seri_ijazah, no_seri_skhun, asal_sekolah, tahun_lulus, agama, no_telpon, titik_koordinat, 
		nama_ayah,pekerjaan_ayah, nama_ibu, pekerjaan_ibu, jurusan_1, jurusan_2,jurusan_3,id_jalur,lamp_akta_lahir,
		lamp_kk,lamp_kks,lamp_kis,lamp_kip,lamp_kkh,lamp_foto_ijazah,lamp_foto_skhun)
		values('$nisn','$nokk','$nik','$nama_lengkap','$jk','$tempat_lahir','$tgl_lahir','$dusun','$rt',
		'$rw','$desa','$kecamatan','$kabupaten','$kodepos','$no_peserta_un','$no_seri_ijazah','$no_seri_skhun',
		'$asal_sekolah','$tahun_lulus','$agama','$no_telepon','$titik_koordinat','$nama_ayah','$pekerjaan_ayah',
		'$nama_ibu','$pekerjaan_ibu','$jurusan1','$jurusan2','$jurusan3','1','$namasimpanakta','$namasimpankk',
		'$namasimpankks','$namasimpankis','$namasimpankip','$namasimpankkh','$namasimpanijazah','$namasimpanskhun')");
		$no_id_pendaftar =$this->db->insert_id();
		$count=$this->db->query("select count(id_pendaftar) as jml from tbl_pendaftar where id_jalur='1'");
		foreach ($count->result_array() as $jml_count) {
			$countnomor =$jml_count['jml'];
			$no_pendaftaran2 	='2021-01-'.$countnomor;
			$this->db->query("update tbl_pendaftar set no_pendaftaran='$no_pendaftaran2' where id_pendaftar='$no_id_pendaftar'");
		}
		//proses insert nilai
		$nilai7mapel=$nilai_pai+$nilai_pkn+$nilai_bi+$nilai_mtk+$nilai_ipa+$nilai_ips+$nilai_bing;
		$na=($nilai7mapel+$nilai_rataun)/2;
		$this->db->query("insert into tbl_nilai(id_pendaftar,pai,pkn,bi,mtk,ipa,ips,bing,jml7_mapel,rata2un,na)
		values('$no_id_pendaftar','$nilai_pai','$nilai_pkn','$nilai_bi','$nilai_mtk','$nilai_ipa','$nilai_ips',
		'$nilai_bing','$nilai7mapel','$nilai_rataun','$na')");
		//$no_pendaftaran =$no_id_pendaftar;
		
	}
	public function get_limit_data_jalur_perpindahan()
	{
		return $this->db->query("SELECT tbl_pendaftar.*, tbl_prestasi_pindah_pendaftar.id_prestasi_pindah, tbl_prestasi_pindah_pendaftar.skpt, tbl_prestasi_pindah_pendaftar.skptm, tbl_prestasi_pindah_pendaftar.sertifikat_pendidik,tbl_jurusan.nama_jurusan from tbl_pendaftar left outer join tbl_prestasi_pindah_pendaftar on tbl_pendaftar.id_pendaftar=tbl_prestasi_pindah_pendaftar.id_pendaftar left outer join tbl_jurusan on tbl_pendaftar.jurusan_1=tbl_jurusan.id_jurusan where tbl_pendaftar.id_jalur='2'");

	}
	public function insert_pendaftar_perpindahan($namasimpanakta,$namasimpankk,$namasimpanijazah,$namasimpanskhun,$namasimpanskpt,$namasimpanskptm,$namasimpansertifikatpendidik)
	{
		$nisn 			=$this->input->post('nisn',TRUE);
		$nokk 			=$this->input->post('nokk',TRUE);
		$nik 			=$this->input->post('nik',TRUE);
		$nama_lengkap 	=$this->input->post('nama_lengkap',TRUE);
		$jk 			=$this->input->post('jk',TRUE);
		$tempat_lahir	=$this->input->post('tempat_lahir',TRUE);
		$tgl_lahir 		=$this->input->post('tgl_lahir');
		$dusun 			=$this->input->post('dusun');
		$rt 			=$this->input->post('rt',TRUE);
		$rw 			=$this->input->post('rw',TRUE);
		$desa 			=$this->input->post('desa',TRUE);
		$kecamatan 		=$this->input->post('kecamatan',TRUE);
		$kabupaten 		=$this->input->post('kabupaten',TRUE);
		$kodepos 		=$this->input->post('kodepos',TRUE);
		$no_peserta_un 	=$this->input->post('no_peserta_un',TRUE);
		$no_seri_ijazah =$this->input->post('no_seri_ijazah',TRUE);
		$no_seri_skhun	=$this->input->post('no_seri_skhun',TRUE);
		$nilai_pai 		=$this->input->post('nilai_pai',TRUE);
		$nilai_pkn 		=$this->input->post('nilai_pkn',TRUE);
		$nilai_bi 		=$this->input->post('nilai_bi',TRUE);
		$nilai_mtk 		=$this->input->post('nilai_mtk',TRUE);
		$nilai_ipa 		=$this->input->post('nilai_ipa',TRUE);
		$nilai_ips 		=$this->input->post('nilai_ips',TRUE);
		$nilai_bing 	=$this->input->post('nilai_bing',TRUE);
		$nilai_rataun 	=$this->input->post('nilai_rataun',TRUE);
		$jurusan1 		=$this->input->post('pilihan1',TRUE);
		$jurusan2 		=$this->input->post('pilihan2',TRUE);
		$jurusan3 		=$this->input->post('pilihan3',TRUE);
		$asal_sekolah 	=$this->input->post('asal_sekolah',TRUE);
		$tahun_lulus 	=$this->input->post('tahun_lulus',TRUE);
		$agama 			=$this->input->post('agama',TRUE);
		$no_telepon 	=$this->input->post('no_telepon',TRUE);
		$titik_koordinat=$this->input->post('titik_koordinat',TRUE);
		$nama_ayah 		=$this->input->post('nama_ayah',TRUE);
		$nama_ibu 		=$this->input->post('nama_ibu',TRUE);
		$pekerjaan_ayah	=$this->input->post('pekerjaan_ayah',TRUE);
		$pekerjaan_ibu 	=$this->input->post('pekerjaan_ibu',TRUE);
		$this->db->query("insert into tbl_pendaftar(nisn,nokk,nik,nama_lengkap,jenis_kelamin,
		tempat_lahir,tgl_lahir,dusun,rt,rw,desa, kecamatan, kabupaten, kodepos,no_peserta_un, 
		no_seri_ijazah, no_seri_skhun, asal_sekolah, tahun_lulus, agama, no_telpon, titik_koordinat, 
		nama_ayah,pekerjaan_ayah, nama_ibu, pekerjaan_ibu, jurusan_1, jurusan_2,jurusan_3,id_jalur,lamp_akta_lahir,
		lamp_kk,lamp_foto_ijazah,lamp_foto_skhun)
		values('$nisn','$nokk','$nik','$nama_lengkap','$jk','$tempat_lahir','$tgl_lahir','$dusun','$rt',
		'$rw','$desa','$kecamatan','$kabupaten','$kodepos','$no_peserta_un','$no_seri_ijazah','$no_seri_skhun',
		'$asal_sekolah','$tahun_lulus','$agama','$no_telepon','$titik_koordinat','$nama_ayah','$pekerjaan_ayah',
		'$nama_ibu','$pekerjaan_ibu','$jurusan1','$jurusan2','$jurusan3','2','$namasimpanakta','$namasimpankk',
		'$namasimpanijazah','$namasimpanskhun')");
		$no_id_pendaftar =$this->db->insert_id();
		$count=$this->db->query("select count(id_pendaftar) as jml from tbl_pendaftar where id_jalur='2'");
		foreach ($count->result_array() as $jml_count) {
			$countnomor =$jml_count['jml'];
			$no_pendaftaran2 	='2021-02-'.$countnomor;
			$this->db->query("update tbl_pendaftar set no_pendaftaran='$no_pendaftaran2' where id_pendaftar='$no_id_pendaftar'");
		}
		
		//proses insert nilai
		$nilai7mapel=$nilai_pai+$nilai_pkn+$nilai_bi+$nilai_mtk+$nilai_ipa+$nilai_ips+$nilai_bing;
		$na=($nilai7mapel+$nilai_rataun)/2;
		$this->db->query("insert into tbl_nilai(id_pendaftar,pai,pkn,bi,mtk,ipa,ips,bing,jml7_mapel,rata2un,na)
		values('$no_id_pendaftar','$nilai_pai','$nilai_pkn','$nilai_bi','$nilai_mtk','$nilai_ipa','$nilai_ips',
		'$nilai_bing','$nilai7mapel','$nilai_rataun','$na')");
		$this->db->query("insert into tbl_prestasi_pindah_pendaftar(id_pendaftar,skpt,skptm,sertifikat_pendidik)
		values('$no_id_pendaftar','$namasimpanskpt','$namasimpanskptm','$namasimpansertifikatpendidik')");
	}
	public function insert_pendaftar_perlombaan($namasimpanakta,$namasimpankk,$namasimpanijazah,$namasimpanskhun)
	{
		$nisn 			=$this->input->post('nisn',TRUE);
		$nokk 			=$this->input->post('nokk',TRUE);
		$nik 			=$this->input->post('nik',TRUE);
		$nama_lengkap 	=$this->input->post('nama_lengkap',TRUE);
		$jk 			=$this->input->post('jk',TRUE);
		$tempat_lahir	=$this->input->post('tempat_lahir',TRUE);
		$tgl_lahir 		=$this->input->post('tgl_lahir');
		$dusun 			=$this->input->post('dusun');
		$rt 			=$this->input->post('rt',TRUE);
		$rw 			=$this->input->post('rw',TRUE);
		$desa 			=$this->input->post('desa',TRUE);
		$kecamatan 		=$this->input->post('kecamatan',TRUE);
		$kabupaten 		=$this->input->post('kabupaten',TRUE);
		$kodepos 		=$this->input->post('kodepos',TRUE);
		$no_peserta_un 	=$this->input->post('no_peserta_un',TRUE);
		$no_seri_ijazah =$this->input->post('no_seri_ijazah',TRUE);
		$no_seri_skhun	=$this->input->post('no_seri_skhun',TRUE);
		$nilai_pai 		=$this->input->post('nilai_pai',TRUE);
		$nilai_pkn 		=$this->input->post('nilai_pkn',TRUE);
		$nilai_bi 		=$this->input->post('nilai_bi',TRUE);
		$nilai_mtk 		=$this->input->post('nilai_mtk',TRUE);
		$nilai_ipa 		=$this->input->post('nilai_ipa',TRUE);
		$nilai_ips 		=$this->input->post('nilai_ips',TRUE);
		$nilai_bing 	=$this->input->post('nilai_bing',TRUE);
		$nilai_rataun 	=$this->input->post('nilai_rataun',TRUE);
		$jurusan1 		=$this->input->post('pilihan1',TRUE);
		$jurusan2 		=$this->input->post('pilihan2',TRUE);
		$jurusan3 		=$this->input->post('pilihan3',TRUE);
		$asal_sekolah 	=$this->input->post('asal_sekolah',TRUE);
		$tahun_lulus 	=$this->input->post('tahun_lulus',TRUE);
		$agama 			=$this->input->post('agama',TRUE);
		$no_telepon 	=$this->input->post('no_telepon',TRUE);
		$titik_koordinat=$this->input->post('titik_koordinat',TRUE);
		$nama_ayah 		=$this->input->post('nama_ayah',TRUE);
		$nama_ibu 		=$this->input->post('nama_ibu',TRUE);
		$pekerjaan_ayah	=$this->input->post('pekerjaan_ayah',TRUE);
		$pekerjaan_ibu 	=$this->input->post('pekerjaan_ibu',TRUE);
		$bidang_prestasi=$this->input->post('bidang_prestasi',TRUE);
		$peringkat 		=$this->input->post('peringkat',TRUE);
		$penyelenggara	=$this->input->post('penyelenggara',TRUE);
		$this->db->query("insert into tbl_pendaftar(nisn,nokk,nik,nama_lengkap,jenis_kelamin,
		tempat_lahir,tgl_lahir,dusun,rt,rw,desa, kecamatan, kabupaten, kodepos,no_peserta_un, 
		no_seri_ijazah, no_seri_skhun, asal_sekolah, tahun_lulus, agama, no_telpon, titik_koordinat, 
		nama_ayah,pekerjaan_ayah, nama_ibu, pekerjaan_ibu, jurusan_1, jurusan_2,jurusan_3,id_jalur,lamp_akta_lahir,
		lamp_kk,lamp_foto_ijazah,lamp_foto_skhun)
		values('$nisn','$nokk','$nik','$nama_lengkap','$jk','$tempat_lahir','$tgl_lahir','$dusun','$rt',
		'$rw','$desa','$kecamatan','$kabupaten','$kodepos','$no_peserta_un','$no_seri_ijazah','$no_seri_skhun',
		'$asal_sekolah','$tahun_lulus','$agama','$no_telepon','$titik_koordinat','$nama_ayah','$pekerjaan_ayah',
		'$nama_ibu','$pekerjaan_ibu','$jurusan1','$jurusan2','$jurusan3','3','$namasimpanakta','$namasimpankk',
		'$namasimpanijazah','$namasimpanskhun')");
		$no_id_pendaftar =$this->db->insert_id();
		$count=$this->db->query("select count(id_pendaftar) as jml from tbl_pendaftar where id_jalur='3'");
		foreach ($count->result_array() as $jml_count) {
			$countnomor =$jml_count['jml'];
			$no_pendaftaran2 	='2021-03-'.$countnomor;
			$this->db->query("update tbl_pendaftar set no_pendaftaran='$no_pendaftaran2' where id_pendaftar='$no_id_pendaftar'");
		}
		
		//proses insert nilai
		$nilai7mapel=$nilai_pai+$nilai_pkn+$nilai_bi+$nilai_mtk+$nilai_ipa+$nilai_ips+$nilai_bing;
		$na=($nilai7mapel+$nilai_rataun)/2;
		$this->db->query("insert into tbl_nilai(id_pendaftar,pai,pkn,bi,mtk,ipa,ips,bing,jml7_mapel,rata2un,na)
		values('$no_id_pendaftar','$nilai_pai','$nilai_pkn','$nilai_bi','$nilai_mtk','$nilai_ipa','$nilai_ips',
		'$nilai_bing','$nilai7mapel','$nilai_rataun','$na')");
		$this->db->query("insert into tbl_prestasi_pindah_pendaftar(id_pendaftar,bidang_prestasi,peringkat_kejuaraan,tingkat_penyelenggara)
		values('$no_id_pendaftar','$bidang_prestasi','$peringkat','$penyelenggara')");
	}
	public function get_limit_data_jalur_perlombaan()
	{
		return $this->db->query("select tbl_pendaftar.*, tbl_nilai.pai, tbl_nilai.pkn, tbl_nilai.bi, tbl_nilai.mtk,
		tbl_nilai.ipa, tbl_nilai.ipa, tbl_nilai.ips, tbl_nilai.bing, tbl_nilai.jml7_mapel, tbl_nilai.rata2un,
		tbl_nilai.na, tbl_jurusan.nama_jurusan, tbl_prestasi_pindah_pendaftar.bidang_prestasi, tbl_prestasi_pindah_pendaftar.peringkat_kejuaraan, tbl_prestasi_pindah_pendaftar.tingkat_penyelenggara from tbl_pendaftar left outer join tbl_nilai on tbl_pendaftar.id_pendaftar=tbl_nilai.id_pendaftar left outer join tbl_jurusan on tbl_pendaftar.jurusan_1=tbl_jurusan.id_jurusan left outer join tbl_prestasi_pindah_pendaftar on tbl_pendaftar.id_pendaftar=tbl_prestasi_pindah_pendaftar.id_pendaftar where tbl_pendaftar.id_jalur='3'");
	}
	public function insert_pendaftar_umum($namasimpanakta,$namasimpankk,$namasimpanijazah,$namasimpanskhun)
	{
		$nisn 			=$this->input->post('nisn',TRUE);
		$nokk 			=$this->input->post('nokk',TRUE);
		$nik 			=$this->input->post('nik',TRUE);
		$nama_lengkap 	=$this->input->post('nama_lengkap',TRUE);
		$jk 			=$this->input->post('jk',TRUE);
		$tempat_lahir	=$this->input->post('tempat_lahir',TRUE);
		$tgl_lahir 		=$this->input->post('tgl_lahir');
		$dusun 			=$this->input->post('dusun');
		$rt 			=$this->input->post('rt',TRUE);
		$rw 			=$this->input->post('rw',TRUE);
		$desa 			=$this->input->post('desa',TRUE);
		$kecamatan 		=$this->input->post('kecamatan',TRUE);
		$kabupaten 		=$this->input->post('kabupaten',TRUE);
		$kodepos 		=$this->input->post('kodepos',TRUE);
		$no_peserta_un 	=$this->input->post('no_peserta_un',TRUE);
		$no_seri_ijazah =$this->input->post('no_seri_ijazah',TRUE);
		$no_seri_skhun	=$this->input->post('no_seri_skhun',TRUE);
		$nilai_pai 		=$this->input->post('nilai_pai',TRUE);
		$nilai_pkn 		=$this->input->post('nilai_pkn',TRUE);
		$nilai_bi 		=$this->input->post('nilai_bi',TRUE);
		$nilai_mtk 		=$this->input->post('nilai_mtk',TRUE);
		$nilai_ipa 		=$this->input->post('nilai_ipa',TRUE);
		$nilai_ips 		=$this->input->post('nilai_ips',TRUE);
		$nilai_bing 	=$this->input->post('nilai_bing',TRUE);
		$nilai_rataun 	=$this->input->post('nilai_rataun',TRUE);
		$jurusan1 		=$this->input->post('pilihan1',TRUE);
		$jurusan2 		=$this->input->post('pilihan2',TRUE);
		$jurusan3 		=$this->input->post('pilihan3',TRUE);
		$asal_sekolah 	=$this->input->post('asal_sekolah',TRUE);
		$tahun_lulus 	=$this->input->post('tahun_lulus',TRUE);
		$agama 			=$this->input->post('agama',TRUE);
		$no_telepon 	=$this->input->post('no_telepon',TRUE);
		$titik_koordinat=$this->input->post('titik_koordinat',TRUE);
		$nama_ayah 		=$this->input->post('nama_ayah',TRUE);
		$nama_ibu 		=$this->input->post('nama_ibu',TRUE);
		$pekerjaan_ayah	=$this->input->post('pekerjaan_ayah',TRUE);
		$pekerjaan_ibu 	=$this->input->post('pekerjaan_ibu',TRUE);
		$bidang_prestasi=$this->input->post('bidang_prestasi',TRUE);
		$peringkat 		=$this->input->post('peringkat',TRUE);
		$penyelenggara	=$this->input->post('penyelenggara',TRUE);
		$this->db->query("insert into tbl_pendaftar(nisn,nokk,nik,nama_lengkap,jenis_kelamin,
		tempat_lahir,tgl_lahir,dusun,rt,rw,desa, kecamatan, kabupaten, kodepos,no_peserta_un, 
		no_seri_ijazah, no_seri_skhun, asal_sekolah, tahun_lulus, agama, no_telpon, titik_koordinat, 
		nama_ayah,pekerjaan_ayah, nama_ibu, pekerjaan_ibu, jurusan_1, jurusan_2,jurusan_3,id_jalur,lamp_akta_lahir,
		lamp_kk,lamp_foto_ijazah,lamp_foto_skhun)
		values('$nisn','$nokk','$nik','$nama_lengkap','$jk','$tempat_lahir','$tgl_lahir','$dusun','$rt',
		'$rw','$desa','$kecamatan','$kabupaten','$kodepos','$no_peserta_un','$no_seri_ijazah','$no_seri_skhun',
		'$asal_sekolah','$tahun_lulus','$agama','$no_telepon','$titik_koordinat','$nama_ayah','$pekerjaan_ayah',
		'$nama_ibu','$pekerjaan_ibu','$jurusan1','$jurusan2','$jurusan3','4','$namasimpanakta','$namasimpankk',
		'$namasimpanijazah','$namasimpanskhun')");
		$no_id_pendaftar =$this->db->insert_id();
		$count=$this->db->query("select count(id_pendaftar) as jml from tbl_pendaftar where id_jalur='4'");
		foreach ($count->result_array() as $jml_count) {
			$countnomor =$jml_count['jml'];
			$no_pendaftaran2 	='2021-04-'.$countnomor;
			$this->db->query("update tbl_pendaftar set no_pendaftaran='$no_pendaftaran2' where id_pendaftar='$no_id_pendaftar'");
		}
		
		//proses insert nilai
		$nilai7mapel=$nilai_pai+$nilai_pkn+$nilai_bi+$nilai_mtk+$nilai_ipa+$nilai_ips+$nilai_bing;
		$na=($nilai7mapel+$nilai_rataun)/2;
		$this->db->query("insert into tbl_nilai(id_pendaftar,pai,pkn,bi,mtk,ipa,ips,bing,jml7_mapel,rata2un,na)
		values('$no_id_pendaftar','$nilai_pai','$nilai_pkn','$nilai_bi','$nilai_mtk','$nilai_ipa','$nilai_ips',
		'$nilai_bing','$nilai7mapel','$nilai_rataun','$na')");
		
	}
	public function get_limit_data_jalur_umum()
	{
		return $this->db->query("select tbl_pendaftar.*, tbl_nilai.pai, tbl_nilai.pkn, tbl_nilai.bi, tbl_nilai.mtk,
		tbl_nilai.ipa, tbl_nilai.ipa, tbl_nilai.ips, tbl_nilai.bing, tbl_nilai.jml7_mapel, tbl_nilai.rata2un,
		tbl_nilai.na, tbl_jurusan.nama_jurusan, tbl_prestasi_pindah_pendaftar.bidang_prestasi, tbl_prestasi_pindah_pendaftar.peringkat_kejuaraan, tbl_prestasi_pindah_pendaftar.tingkat_penyelenggara from tbl_pendaftar left outer join tbl_nilai on tbl_pendaftar.id_pendaftar=tbl_nilai.id_pendaftar left outer join tbl_jurusan on tbl_pendaftar.jurusan_1=tbl_jurusan.id_jurusan left outer join tbl_prestasi_pindah_pendaftar on tbl_pendaftar.id_pendaftar=tbl_prestasi_pindah_pendaftar.id_pendaftar where tbl_pendaftar.id_jalur='4'");
	}
	public function insert_pendaftar_unggulan($namasimpanakta,$namasimpankk,$namasimpanijazah,$namasimpanskhun)
	{
		$nisn 			=$this->input->post('nisn',TRUE);
		$nokk 			=$this->input->post('nokk',TRUE);
		$nik 			=$this->input->post('nik',TRUE);
		$nama_lengkap 	=$this->input->post('nama_lengkap',TRUE);
		$jk 			=$this->input->post('jk',TRUE);
		$tempat_lahir	=$this->input->post('tempat_lahir',TRUE);
		$tgl_lahir 		=$this->input->post('tgl_lahir');
		$dusun 			=$this->input->post('dusun');
		$rt 			=$this->input->post('rt',TRUE);
		$rw 			=$this->input->post('rw',TRUE);
		$desa 			=$this->input->post('desa',TRUE);
		$kecamatan 		=$this->input->post('kecamatan',TRUE);
		$kabupaten 		=$this->input->post('kabupaten',TRUE);
		$kodepos 		=$this->input->post('kodepos',TRUE);
		$no_peserta_un 	=$this->input->post('no_peserta_un',TRUE);
		$no_seri_ijazah =$this->input->post('no_seri_ijazah',TRUE);
		$no_seri_skhun	=$this->input->post('no_seri_skhun',TRUE);
		$nilai_pai 		=$this->input->post('nilai_pai',TRUE);
		$nilai_pkn 		=$this->input->post('nilai_pkn',TRUE);
		$nilai_bi 		=$this->input->post('nilai_bi',TRUE);
		$nilai_mtk 		=$this->input->post('nilai_mtk',TRUE);
		$nilai_ipa 		=$this->input->post('nilai_ipa',TRUE);
		$nilai_ips 		=$this->input->post('nilai_ips',TRUE);
		$nilai_bing 	=$this->input->post('nilai_bing',TRUE);
		$nilai_rataun 	=$this->input->post('nilai_rataun',TRUE);
		$jurusan1 		=$this->input->post('pilihan1',TRUE);
		$jurusan2 		=$this->input->post('pilihan2',TRUE);
		$jurusan3 		=$this->input->post('pilihan3',TRUE);
		$asal_sekolah 	=$this->input->post('asal_sekolah',TRUE);
		$tahun_lulus 	=$this->input->post('tahun_lulus',TRUE);
		$agama 			=$this->input->post('agama',TRUE);
		$no_telepon 	=$this->input->post('no_telepon',TRUE);
		$titik_koordinat=$this->input->post('titik_koordinat',TRUE);
		$nama_ayah 		=$this->input->post('nama_ayah',TRUE);
		$nama_ibu 		=$this->input->post('nama_ibu',TRUE);
		$pekerjaan_ayah	=$this->input->post('pekerjaan_ayah',TRUE);
		$pekerjaan_ibu 	=$this->input->post('pekerjaan_ibu',TRUE);
		$bidang_prestasi=$this->input->post('bidang_prestasi',TRUE);
		$peringkat 		=$this->input->post('peringkat',TRUE);
		$penyelenggara	=$this->input->post('penyelenggara',TRUE);
		$this->db->query("insert into tbl_pendaftar(nisn,nokk,nik,nama_lengkap,jenis_kelamin,
		tempat_lahir,tgl_lahir,dusun,rt,rw,desa, kecamatan, kabupaten, kodepos,no_peserta_un, 
		no_seri_ijazah, no_seri_skhun, asal_sekolah, tahun_lulus, agama, no_telpon, titik_koordinat, 
		nama_ayah,pekerjaan_ayah, nama_ibu, pekerjaan_ibu, jurusan_1, jurusan_2,jurusan_3,id_jalur,lamp_akta_lahir,
		lamp_kk,lamp_foto_ijazah,lamp_foto_skhun)
		values('$nisn','$nokk','$nik','$nama_lengkap','$jk','$tempat_lahir','$tgl_lahir','$dusun','$rt',
		'$rw','$desa','$kecamatan','$kabupaten','$kodepos','$no_peserta_un','$no_seri_ijazah','$no_seri_skhun',
		'$asal_sekolah','$tahun_lulus','$agama','$no_telepon','$titik_koordinat','$nama_ayah','$pekerjaan_ayah',
		'$nama_ibu','$pekerjaan_ibu','$jurusan1','$jurusan2','$jurusan3','5','$namasimpanakta','$namasimpankk',
		'$namasimpanijazah','$namasimpanskhun')");
		$no_id_pendaftar =$this->db->insert_id();
		$count=$this->db->query("select count(id_pendaftar) as jml from tbl_pendaftar where id_jalur='5'");
		foreach ($count->result_array() as $jml_count) {
			$countnomor =$jml_count['jml'];
			$no_pendaftaran2 	='2021-05-'.$countnomor;
			$this->db->query("update tbl_pendaftar set no_pendaftaran='$no_pendaftaran2' where id_pendaftar='$no_id_pendaftar'");
		}
		
		//proses insert nilai
		$nilai7mapel=$nilai_pai+$nilai_pkn+$nilai_bi+$nilai_mtk+$nilai_ipa+$nilai_ips+$nilai_bing;
		$na=($nilai7mapel+$nilai_rataun)/2;
		$this->db->query("insert into tbl_nilai(id_pendaftar,pai,pkn,bi,mtk,ipa,ips,bing,jml7_mapel,rata2un,na)
		values('$no_id_pendaftar','$nilai_pai','$nilai_pkn','$nilai_bi','$nilai_mtk','$nilai_ipa','$nilai_ips',
		'$nilai_bing','$nilai7mapel','$nilai_rataun','$na')");
		
	}
	public function get_limit_data_jalur_unggulan()
	{
		return $this->db->query("select tbl_pendaftar.*, tbl_nilai.pai, tbl_nilai.pkn, tbl_nilai.bi, tbl_nilai.mtk,
		tbl_nilai.ipa, tbl_nilai.ipa, tbl_nilai.ips, tbl_nilai.bing, tbl_nilai.jml7_mapel, tbl_nilai.rata2un,
		tbl_nilai.na, tbl_jurusan.nama_jurusan, tbl_prestasi_pindah_pendaftar.bidang_prestasi, tbl_prestasi_pindah_pendaftar.peringkat_kejuaraan, tbl_prestasi_pindah_pendaftar.tingkat_penyelenggara from tbl_pendaftar left outer join tbl_nilai on tbl_pendaftar.id_pendaftar=tbl_nilai.id_pendaftar left outer join tbl_jurusan on tbl_pendaftar.jurusan_1=tbl_jurusan.id_jurusan left outer join tbl_prestasi_pindah_pendaftar on tbl_pendaftar.id_pendaftar=tbl_prestasi_pindah_pendaftar.id_pendaftar where tbl_pendaftar.id_jalur='5'");
	}
	public function select_get_cetak($no_peserta_un)
	{
		return $this->db->query("select tbl_pendaftar.*, tbl_jurusan.nama_jurusan, tbl_jalur_pendaftaran.judul from tbl_pendaftar left outer join tbl_jurusan on tbl_pendaftar.jurusan_1=tbl_jurusan.id_jurusan left outer join tbl_jalur_pendaftaran on tbl_pendaftar.id_jalur=tbl_jalur_pendaftaran.id_jalur where tbl_pendaftar.no_peserta_un='$no_peserta_un'");
	}
	public function get_jml_afirmasi()
	{
		return $this->db->query("SELECT count(id_pendaftar) as jml_pendaftar from tbl_pendaftar where id_jalur='1'");
	}
	public function get_jml_prestasi()
	{
		return $this->db->query("SELECT count(id_pendaftar) as jml_pendaftar from tbl_pendaftar where id_jalur='3'");
	}
	public function get_jml_perpindahan()
	{
		return $this->db->query("SELECT count(id_pendaftar) as jml_pendaftar from tbl_pendaftar where id_jalur='2'");
	}
	public function get_jml_umum()
	{
		return $this->db->query("SELECT count(id_pendaftar) as jml_pendaftar from tbl_pendaftar where id_jalur='4'");
	}
	public function get_jml_unggulan()
	{
		return $this->db->query("SELECT count(id_pendaftar) as jml_pendaftar from tbl_pendaftar where id_jalur='5'");
	}
}
