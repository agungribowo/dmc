<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_pemesanan extends CI_Controller {
    //fungsi konstruk
    public function __construct() {
        parent::__construct();
        sesimasukAnggota();
        $this->load->model('M_pemesanan','pemesanan');
    }
    
    //fungsi index
    function index() {
       $psn = $this->pemesanan->getPemesanan();

        $data['pemesanan']   = $this->pemesanan->data();
        $data['pesan']      = $psn->num_rows();

        $this->load->view('backend/admin/laporan/lappemesanan', $data);
    }

 
    //fungsi cetak
    function cetak() {
        $psn = $this->pemesanan->getPemesanan();

        
        $data['pemesanan']   = $this->pemesanan->data();
        $data['pesan']      = $psn->num_rows();

        $this->load->view('backend/admin/laporan/lappemesanan', $data);
    }
}