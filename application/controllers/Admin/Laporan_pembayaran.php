<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_pembayaran extends CI_Controller {
    //fungsi konstruk
    public function __construct() {
        parent::__construct();
        sesimasukAnggota();
        $this->load->model('M_pembayaran','pembayaran');
    }
    
    //fungsi index
    function index() {
       $byr = $this->pembayaran->getPembayaran();

        $data['pembayaran']   = $this->pembayaran->data();
        $data['bayar']    = $byr->num_rows();

        $this->load->view('backend/admin/laporan/lapbayar', $data);
    }

 
    //fungsi cetak
    function cetak() {
        $byr = $this->pembayaran->getPembayaran();

        
        $data['pembayaran']   = $this->pembayaran->data();
        $data['bayar']      = $byr->num_rows();

        $this->load->view('backend/admin/laporan/lapbayar', $data);
    }
}