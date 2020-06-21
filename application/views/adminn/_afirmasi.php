<?php 
    $urinya=$this->uri->segment(3);
    switch ($urinya) {
        case 'Add':
            $this->load->view('adminn/_afirmasi_add');
            break;
        
        default:
            $this->load->view('adminn/_afirmasi_data');
            break;
    }
?>