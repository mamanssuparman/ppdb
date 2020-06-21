<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Pendaftar Jalur Prestasi Perlombaan
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                    <a href="<?php echo base_url();?>index.php/adminn/Perlombaan/Add/" class="btn btn-primary btn-xs pull-right"><li class="fa fa-plus"></li>Add Pendaftaran</a>
                    </div>
                </div>
                <br>
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>No Pendaftaran</th>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Asal Sekolah</th>
                            <th>TTL</th>
                            <th>No Peserta UN</th>
                            <th>Ijazah</th>
                            <th>SKHUN</th>
                            <th>Akta Lahir</th>
                            <th>Kartu Keluarga</th>
                            <th>Bidang Prestasi</th>
                            <th>Peringkat</th>
                            <th>Tingkat</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                        $no=1;
                        foreach ($Data_perlombaan->result_array() as $showdata) { ?>
                            <tr>
                                <td><?php echo $no++ ;?></td>
                                <td><?php echo $showdata['no_pendaftaran'] ;?></td>
                                <td><?php echo $showdata['nisn'] ;?></td>
                                <td><?php echo $showdata['nama_lengkap'] ;?></td>
                                <td><?php echo $showdata['asal_sekolah'] ;?></td>
                                <td><?php echo $showdata['tempat_lahir'] ;?>, <?php echo $showdata['tgl_lahir'] ?></td>
                                <td><?php echo $showdata['no_peserta_un'] ;?></td>
                                <?php
                                    if (!empty($showafirmasi['lamp_foto_ijazah'])) {
                                        echo"<td><small class='label label-primary'>Ada</small></td>";
                                    }
                                    else
                                    {
                                        echo"<td><small class='label label-danger'>Kosong</small></td>";
                                    }
                                ?>
                                <?php
                                    if (!empty($showafirmasi['lamp_foto_skhun'])) {
                                        echo"<td><small class='label label-primary'>Ada</small></td>";
                                    }
                                    else
                                    {
                                        echo"<td><small class='label label-danger'>Kosong</small></td>";
                                    }
                                ?>
                                <?php
                                    if (!empty($showafirmasi['lamp_akta_lahir'])) {
                                        echo"<td><small class='label label-primary'>Ada</small></td>";
                                    }
                                    else
                                    {
                                        echo"<td><small class='label label-danger'>Kosong</small></td>";
                                    }
                                ?>
                                <?php
                                    if (!empty($showafirmasi['lamp_kk'])) {
                                        echo"<td><small class='label label-primary'>Ada</small></td>";
                                    }
                                    else
                                    {
                                        echo"<td><small class='label label-danger'>Kosong</small></td>";
                                    }
                                ?>
                                <td><?php echo $showdata['bidang_prestasi'] ;?></td>
                                <td><?php echo $showdata['peringkat_kejuaraan'] ;?></td>
                                <td><?php echo $showdata['tingkat_penyelenggara'] ;?></td>
                                <td><?php echo $showdata['nama_jurusan'] ;?></td>
                                <td>Button</td>
                            </tr>
                        <?php }
                    ?>
                    </tbody>
                </table>
                <!-- /.table-responsive -->
                <div class="well">
                    <h4>DataTables Usage Information</h4>
                    <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                    <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                </div>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- Modal Edit Jurusan -->
<!-- Modal Add -->