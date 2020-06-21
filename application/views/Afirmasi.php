<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PPDB SMK Negeri 3 Banjar</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url('__assets/admin/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url('__assets/admin/vendor/metisMenu/metisMenu.min.css') ?>" rel="stylesheet">

    <link href="<?php echo base_url('__assets/admin/vendor/datatables-plugins/dataTables.bootstrap.css') ?>" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="<?php echo base_url('__assets/admin/vendor/datatables-responsive/dataTables.responsive.css') ?>" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url('__assets/admin/dist/css/sb-admin-2.css') ?>" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url('__assets/admin/vendor/morrisjs/morris.css') ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url('__assets/admin/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Form Pendaftaran Jalur Afirmasi</h1>
                    <?php 
                        if (!empty($this->session->flashdata('pesan'))) { ?>
                            <div class="alert alert-success alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php echo $this->session->flashdata('pesan') ;?>
                            </div>   
                    <?php    }
                    ?>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Add Data Pendaftar Afirmasi
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">
                                <form action="<?php echo base_url();?>index.php/Afirmasi/save/" method="POST" enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-2">
                                            NISN
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" name="nisn" class="form form-control" placeholder="NISN" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            NO KK
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" name="nokk" class="form form-control" placeholder="No KK" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            NIK
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" name="nik" class="form form-control" placeholder="NIK" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Nama Lengkap
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" name="nama_lengkap" class="form form-control" placeholder="Nama Lengkap" required>
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
                                                <input type="text" class="form form-control" name="dusun" required>
                                                </div>
                                                <div class="col-md-2">
                                                RT
                                                </div>
                                                <div class="col-md-10">
                                                <input type="number" class="form form-control" name="rt" required>
                                                </div>
                                                <div class="col-md-2">
                                                RW
                                                </div>
                                                <div class="col-md-10">
                                                <input type="number" class="form form-control" name="rw" required>
                                                </div>
                                                <div class="col-md-2">
                                                Desa
                                                </div>
                                                <div class="col-md-10">
                                                <input type="text" class="form form-control" name="desa" required>
                                                </div>
                                                <div class="col-md-2">
                                                Kecamatan
                                                </div>
                                                <div class="col-md-10">
                                                <input type="text" class="form form-control" name="kecamatan" required>
                                                </div>
                                                <div class="col-md-2">
                                                Kabupaten
                                                </div>
                                                <div class="col-md-10">
                                                <input type="text" class="form form-control" name="kabupaten" required>
                                                </div>
                                                <div class="col-md-2">
                                                Kodepos
                                                </div>
                                                <div class="col-md-10">
                                                <input type="number" class="form form-control" name="kodepos" required>
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
                                            <input type="text" name="no_peserta_un" class="form form-control" placeholder="No Peserta UN SMP/MTs" required>
                                            
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Nomor Seri Ijazah
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" name="no_seri_ijazah" class="form form-control" placeholder="Nomor Seri Ijazah">
                                            <input type="file" name="lamp_foto_ijazah">Lampirkan File <br>
                                            file harus berektensi *.JPG, dan ukuran maksimal 2 mb.
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Nomor Seri SKHUN
                                        </div>
                                        <div class="col-md-10">
                                            <input type="text" name="no_seri_skhun" class="form form-control" placeholder="Nomro Seri SKHUN">
                                            <input type="file" name="lamp_foto_skhun">Lampirkan File <br>
                                            file harus berektensi *.JPG, dan ukuran maksimal 2 mb.
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
                                                    <input type="number" name="nilai_pai" class="form form-control" required>
                                                </div>
                                                <div class="col-md-2">
                                                    PKN
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="number" name="nilai_pkn" class="form form-control" required>
                                                </div>
                                                <div class="col-md-2">
                                                    B. Indonesia
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="number" name="nilai_bi" class="form form-control" required>
                                                </div>
                                                <div class="col-md-2">
                                                    Matematika
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="number" name="nilai_mtk" class="form form-control" required>
                                                </div>
                                                <div class="col-md-2">
                                                    IPA
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="number" name="nilai_ipa" class="form form-control" required>
                                                </div>
                                                <div class="col-md-2">
                                                    IPS
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="number" name="nilai_ips" class="form form-control" required>
                                                </div>
                                                <div class="col-md-2">
                                                    Bahasa Inggris
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="number" name="nilai_bing" class="form form-control" required>
                                                </div>
                                                <div class="col-md-2">
                                                    Nilai Rata-rata UN
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="number" name="nilai_rataun" class="form form-control" required>
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
                                            <input type="text" name="asal_sekolah" class="form form-control" placeholder="Asal Sekolah" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Tahun Lulus
                                        </div>
                                        <div class="col-md-10">
                                            <select name="tahun_lulus" class="form form-control" required>
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
                                            <select name="agama" class="form form-control" required>
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
                                        <input type="text" name="no_telepon" class="form form-control" placeholder="No Telepon" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Titik Koordinat
                                        </div>
                                        <div class="col-md-10">
                                        <input type="text" name="titik_koordinat" class="form form-control" placeholder="Titik Koordinat Rumah" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Nama Ayah
                                        </div>
                                        <div class="col-md-10">
                                        <input type="text" name="nama_ayah" class="form form-control" placeholder="Nama Ayah" required>
                                        <input type="text" name="alamat" class="form form-control" placeholder="Alamat Ayah">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Pekerjaan Ayah
                                        </div>
                                        <div class="col-md-10">
                                        <select name="pekerjaan_ayah" class="form form-control" required>
                                            <option value="">--</option>
                                            <option value="PNS">PNS</option>
                                            <option value="Wiraswasta">Wiraswasta</option>
                                            <option value="Tani">Tani</option>
                                            <option value="TKI">TKI</option>
                                            <option value="Pedagang">Pedangang</option>
                                            <option value="Buruh">Buruh</option>
                                        </select>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Nama Ibu
                                        </div>
                                        <div class="col-md-10">
                                        <input type="text" name="nama_ibu" class="form form-control" placeholder="Nama Ibu" required>
                                        <input type="text" name="alamat" class="form form-control" placeholder="Alamat Ibu">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Pekerjaan Ibu
                                        </div>
                                        <div class="col-md-10">
                                        <select name="pekerjaan_ibu" class="form form-control" required>
                                            <option value="">--</option>
                                            <option value="PNS">PNS</option>
                                            <option value="Wiraswasta">Wiraswasta</option>
                                            <option value="Tani">Tani</option>
                                            <option value="TKI">TKI</option>
                                            <option value="Pedagang">Pedangang</option>
                                            <option value="Buruh">Buruh</option>
                                        </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-2">
                                            Berkas Pendukung
                                        </div>
                                        <div class="col-md-10">
                                        <input type="file" name="lamp_akta_lahir">Lampirkan Akta Lahir <br>
                                        file harus berektensi *.JPG, dan ukuran maksimal 2 mb.
                                        <hr>
                                        <input type="file" name="lamp_kk">Lampirkan Kartu Keluarga <br>
                                        file harus berektensi *.JPG, dan ukuran maksimal 2 mb.
                                        <hr>
                                        <input type="file" name="lamp_kks">Lampirkan Karu KKS <br>
                                        file harus berektensi *.JPG, dan ukuran maksimal 2 mb. 
                                        <hr>
                                        <input type="file" name="lamp_kis">Lampirkan Kartu KIS <br>
                                        file harus berektensi *.JPG, dan ukuran maksimal 2 mb.
                                        <hr>
                                        <input type="file" name="lamp_kip">Lampirkan Kartu KIP <br>
                                        file harus berektensi *.JPG, dan ukuran maksimal 2 mb.
                                        <hr>
                                        <input type="file" name="lamp_kkh">Lampirkan Kartu KKH <br>
                                        file harus berektensi *.JPG, dan ukuran maksimal 2 mb.
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
            <!-- /.row -->
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="<?php echo base_url('__assets/admin/vendor/jquery/jquery.min.js') ?>"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url('__assets/admin/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url('__assets/admin/vendor/metisMenu/metisMenu.min.js') ?>"></script>
<!-- DataTables JavaScript -->
    
    <script src="<?php echo base_url('__assets/admin/vendor/datatables/js/jquery.dataTables.min.js') ?>"></script>
    <script src="<?php echo base_url('__assets/admin/vendor/datatables-plugins/dataTables.bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('__assets/admin/vendor/datatables-responsive/dataTables.responsive.js') ?>"></script>

    <!-- Morris Charts JavaScript -->
    <script src="<?php echo base_url('__assets/admin/vendor/raphael/raphael.min.js') ?>"></script>
    <script src="<?php echo base_url('__assets/admin/vendor/morrisjs/morris.min.js') ?>"></script>
    <script src="<?php echo base_url('__assets/admin/data/morris-data.js') ?>"></script>
    
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url('__assets/admin/dist/js/sb-admin-2.js') ?>"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
</body>

</html>
