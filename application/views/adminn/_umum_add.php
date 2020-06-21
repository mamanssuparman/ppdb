<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Add Data Pendaftar Umum
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <form action="<?php echo base_url();?>index.php/adminn/Umum/save/" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-md-2">
                            NISN
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="nisn" class="form form-control" placeholder="NISN">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            NO KK
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="nokk" class="form form-control" placeholder="No KK">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            NIK
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="nik" class="form form-control" placeholder="NIK">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            Nama Lengkap
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="nama_lengkap" class="form form-control" placeholder="Nama Lengkap">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            Jenis Kelamin
                        </div>
                        <div class="col-md-10">
                            <input type="radio" name="jk" value="Laki-laki"> Laki-laki
                            <input type="radio" name="jk" value="Perempuan"> Perempuan
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            Tempat Tanggal Lahir
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="tempat_lahir" placeholder="Tempat Lahir"><input type="date" name="tgl_lahir" class="form form-control">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            Alamat
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-2">
                                Dusun
                                </div>
                                <div class="col-md-10">
                                <input type="text" class="form form-control" name="dusun">
                                </div>
                                <div class="col-md-2">
                                RT
                                </div>
                                <div class="col-md-10">
                                <input type="number" class="form form-control" name="rt">
                                </div>
                                <div class="col-md-2">
                                RW
                                </div>
                                <div class="col-md-10">
                                <input type="number" class="form form-control" name="rw">
                                </div>
                                <div class="col-md-2">
                                Desa
                                </div>
                                <div class="col-md-10">
                                <input type="text" class="form form-control" name="desa">
                                </div>
                                <div class="col-md-2">
                                Kecamatan
                                </div>
                                <div class="col-md-10">
                                <input type="text" class="form form-control" name="kecamatan">
                                </div>
                                <div class="col-md-2">
                                Kabupaten
                                </div>
                                <div class="col-md-10">
                                <input type="text" class="form form-control" name="kabupaten">
                                </div>
                                <div class="col-md-2">
                                Kodepos
                                </div>
                                <div class="col-md-10">
                                <input type="number" class="form form-control" name="kodepos">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            No Peserta UN SMP/MTs
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="no_peserta_un" class="form form-control" placeholder="No Peserta UN SMP/MTs">
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            Nomor Seri Ijazah
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="no_seri_ijazah" class="form form-control" placeholder="Nomor Seri Ijazah">
                            <input type="file" name="lamp_foto_ijazah">Lampirkan File
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            Nomor Seri SKHUN
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="no_seri_skhun" class="form form-control" placeholder="Nomro Seri SKHUN">
                            <input type="file" name="lamp_foto_skhun">Lampirkan File
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            Nilai
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-2">
                                    PAI
                                </div>
                                <div class="col-md-10">
                                    <input type="number" name="nilai_pai" class="form form-control">
                                </div>
                                <div class="col-md-2">
                                    PKN
                                </div>
                                <div class="col-md-10">
                                    <input type="number" name="nilai_pkn" class="form form-control">
                                </div>
                                <div class="col-md-2">
                                    Bahasa Indonesia
                                </div>
                                <div class="col-md-10">
                                    <input type="number" name="nilai_bi" class="form form-control">
                                </div>
                                <div class="col-md-2">
                                    Matematika
                                </div>
                                <div class="col-md-10">
                                    <input type="number" name="nilai_mtk" class="form form-control">
                                </div>
                                <div class="col-md-2">
                                    IPA
                                </div>
                                <div class="col-md-10">
                                    <input type="number" name="nilai_ipa" class="form form-control">
                                </div>
                                <div class="col-md-2">
                                    IPS
                                </div>
                                <div class="col-md-10">
                                    <input type="number" name="nilai_ips" class="form form-control">
                                </div>
                                <div class="col-md-2">
                                    Bahasa Inggris
                                </div>
                                <div class="col-md-10">
                                    <input type="number" name="nilai_bing" class="form form-control">
                                </div>
                                <div class="col-md-2">
                                    Nilai Rata-rata UN
                                </div>
                                <div class="col-md-10">
                                    <input type="number" name="nilai_rataun" class="form form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            Pilih Jurusan
                        </div>
                        <div class="col-md-10">
                            <div class="row">
                                <div class="col-md-2">
                                Pilihan 1
                                </div>
                                <div class="col-md-10">
                                    <select name="pilihan1" class="form form-control">
                                        <?php 
                                            foreach ($Data_jurusan->result_array() as $show_jurusan) { ?>
                                                <option value="<?php echo $show_jurusan['id_jurusan'] ?>"><?php echo $show_jurusan['nama_jurusan'];?></option>   
                                        <?php    }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                Pilihan 2
                                </div>
                                <div class="col-md-10">
                                    <select name="pilihan2" class="form form-control">
                                        <option value="">--</option>
                                        <?php 
                                            foreach ($Data_jurusan->result_array() as $show_jurusan) { ?>
                                                <option value="<?php echo $show_jurusan['id_jurusan'] ?>"><?php echo $show_jurusan['nama_jurusan'];?></option>   
                                        <?php    }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-2">
                                Pilihan 3
                                </div>
                                <div class="col-md-10">
                                    <select name="pilihan3" class="form form-control">
                                        <option value="">--</option>
                                        <?php 
                                            foreach ($Data_jurusan->result_array() as $show_jurusan) { ?>
                                                <option value="<?php echo $show_jurusan['id_jurusan'] ?>"><?php echo $show_jurusan['nama_jurusan'];?></option>   
                                        <?php    }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            Asal Sekolah
                        </div>
                        <div class="col-md-10">
                            <input type="text" name="asal_sekolah" class="form form-control" placeholder="Asal Sekolah">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            Tahun Lulus
                        </div>
                        <div class="col-md-10">
                            <select name="tahun_lulus" class="form form-control">
                                <option value="2018">2018</option>
                                <option value="2019">2019</option>
                                <option value="2020">2020</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            Agama
                        </div>
                        <div class="col-md-10">
                            <select name="agama" class="form form-control">
                                <option value="Islam">Islam</option>
                                <option value="Kristen">Kristen</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Budha">Budha</option>
                                <option value="Katholik">Katholik</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            No Telepon
                        </div>
                        <div class="col-md-10">
                           <input type="text" name="no_telepon" class="form form-control" placeholder="No Telepon">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            Titik Koordinat
                        </div>
                        <div class="col-md-10">
                           <input type="text" name="titik_koordinat" class="form form-control" placeholder="Titik Koordinat Rumah">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            Nama Ayah
                        </div>
                        <div class="col-md-10">
                           <input type="text" name="nama_ayah" class="form form-control" placeholder="Nama Ayah">
                           <input type="text" name="alamat" class="form form-control" placeholder="Alamat Ayah">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            Pekerjaan Ayah
                        </div>
                        <div class="col-md-10">
                           <select name="pekerjaan_ayah" class="form form-control">
                               <option value="">--</option>
                               <option value="PNS">PNS</option>
                               <option value="Wiraswasta">Wiraswasta</option>
                               <option value="Tani">Tani</option>
                               <option value="TKI">TKI</option>
                           </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            Nama Ibu
                        </div>
                        <div class="col-md-10">
                           <input type="text" name="nama_ibu" class="form form-control" placeholder="Nama Ibu">
                           <input type="text" name="alamat" class="form form-control" placeholder="Alamat Ibu">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                            Pekerjaan Ibu
                        </div>
                        <div class="col-md-10">
                           <select name="pekerjaan_ibu" class="form form-control">
                               <option value="">--</option>
                               <option value="PNS">PNS</option>
                               <option value="Wiraswasta">Wiraswasta</option>
                               <option value="Tani">Tani</option>
                               <option value="TKI">TKI</option>
                           </select>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-2">
                            Berkas Pendukung
                        </div>
                        <div class="col-md-10">
                            <input type="file" name="lamp_akta_lahir">
                            <p>
                            Lampirkan Akta Lahir
                            </p>
                           <hr>
                          
                          <input type="file" name="lamp_kk">
                          <p>
                          Lampirkan Kartu Keluarga
                          </p>
                          <hr> 
                        
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                        <input type="submit" name="simpan" id="" value="Simpan">
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>