<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Data Jurusan
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                    <a href="#" class="btn btn-primary btn-xs pull-right" data-toggle="modal" data-target="#modalAdd"><li class="fa fa-plus"></li>Add Jurusan</a>
                    </div>
                </div>
                <br>
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Jurusan</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $no=1;
                        foreach ($Data_Pendaftar->result_array() as $showpendaftar): ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo $showpendaftar['nama_jurusan'];?></td>
                            <td><?php echo $showpendaftar['deskripsi'];?></td>
                            <td>
                                <button class="btn btn-primary btn-xs" title="Edit Jurusan" data-toggle="modal" data-target="#myModal-<?php echo $showpendaftar['id_jurusan'];?>"><li class="fa fa-edit"></li> </button>
                                <a href="#" class="btn btn-danger btn-xs" title="Hapus"><li class="fa fa-times"></li></a>
                            </td>
                        </tr>
                        <?php 
                            endforeach;
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
<?php 
    foreach ($Data_Pendaftar->result_array() as $showpendaftar):
?>
<div class="modal fade" id="myModal-<?php echo $showpendaftar['id_jurusan'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?php echo base_url();?>index.php/adminn/Jurusan/Update/<?php echo $showpendaftar['id_jurusan'];?>" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Edit Jurusan</h4>
                </div>
                <div class="modal-body">
                    <p>
                        <input type="text" name="nama_jurusan" placeholder="Nama Jurusan" value="<?php echo $showpendaftar['nama_jurusan'] ?>" class="form-control" required>
                    </p>                
                    <p>
                        <input type="text" name="deskripsi" placeholder="Deskripsi" value="<?php echo $showpendaftar['deskripsi'] ?>" class="form-control" required>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<?php 
    endforeach;
?>
<!-- Modal Add -->
<div class="modal fade" id="modalAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="<?php echo base_url();?>index.php/adminn/Jurusan/Add/" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title" id="myModalLabel">Add Jurusan</h4>
                </div>
                <div class="modal-body">
                    <p>
                        <input type="text" name="nama_jurusan" placeholder="Nama Jurusan" class="form-control" required>
                    </p>                
                    <p>
                        <input type="text" name="deskripsi" placeholder="Deskripsi" class="form-control" required>
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>