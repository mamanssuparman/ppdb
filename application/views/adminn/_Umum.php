<?php 
    $urinya=$this->uri->segment(3);
    switch ($urinya) {
        case 'Add':
            $this->load->view('adminn/_umum_add');
            break;
        
        default:
            $this->load->view('adminn/_umum_data');
            break;
    }
?>