<?php
    $uri=$this->uri->segment(2);
    switch ($uri) {
        case 'Data_jurusan':
            $this->load->view('adminn/data_jurusan');
            break;
        case 'Dashboard':
            $this->load->view('adminn/dashboard');
            break;
        case 'Jurusan':
            $this->load->view('adminn/_jurusan_table');
            break;
        case 'Jalur_daftar':
            $this->load->view('adminn/_jalur_daftar');
            break;
        case 'Afirmasi':
            $this->load->view('adminn/_afirmasi');
            break;
        case 'Perpindahan':
            $this->load->view('adminn/_perpindahan');
            break;
        case 'Perlombaan':
            $this->load->view('adminn/_Perlombaan');
            break;
        case 'Umum':
            $this->load->view('adminn/_Umum');
            break;
        case 'Unggulan':
            $this->load->view('adminn/_Unggulan');
            break;
        default:
            $this->load->view('adminn/dashboard');
            break;
    }
?>