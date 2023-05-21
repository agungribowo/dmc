<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_produk extends CI_Controller {
    //fungsi konstruk
    public function __construct() {
        parent::__construct();
        sesimasukAnggota();
        $this->load->model('M_produk','produk');
    }
    
    //fungsi index
    function index() {
       $prd = $this->produk->getProduk();

        $data['produk']   = $this->produk->data();
        $data['rumah']    = $prd->num_rows();

        $this->load->view('backend/admin/laporan/lapproduk', $data);
    }

 
    //fungsi cetak
    function cetak() {
        $prd = $this->produk->getProduk();

        
        $data['produk']   = $this->produk->data();
        $data['rumah']      = $prd->num_rows();

        $this->load->view('backend/admin/laporan/lapproduk', $data);
    }
}