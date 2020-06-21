<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                    <button class="btn btn-default" type="button">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
                </div>
                <!-- /input-group -->
            </li>
            <li>
                <a href="<?php echo base_url();?>index.php/adminn/Dashboard/"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>index.php/adminn/Jalur_daftar/"><i class="fa fa-table fa-fw"></i> Data Jalur Pendaftar</a>
            </li>
            <li>
                <a href="<?php echo base_url(); ?>index.php/adminn/Jurusan/"><i class="fa fa-table fa-fw"></i> Data Jurusan</a>
            </li>
            <li>
                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Data Pendaftar<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo base_url();?>index.php/adminn/Afirmasi/">Afirmasi</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/adminn/Perlombaan/">Prestasi Perlombaan</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/adminn/Unggulan/">Prestasi NRUnggulan</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/adminn/Umum/">Prestasi NRUmum</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>index.php/adminn/Perpindahan/">Perpindahan</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>