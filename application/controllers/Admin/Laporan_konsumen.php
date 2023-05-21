<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan_konsumen extends CI_Controller {
    //fungsi konstruk
    public function __construct() {
        parent::__construct();
        sesimasukAnggota();
        $this->load->model('M_konsumen','konsumen');
    }
    
    //fungsi index
    function index() {
       $cust = $this->konsumen->getKonsumen();

        $data['konsumen']   = $this->konsumen->data();
        $data['cus']      = $cust->num_rows();

        $this->load->view('backend/admin/laporan/lapkonsumen', $data);
    }

 
    //fungsi cetak
    function cetak() {
        $cust = $this->konsumen->getKonsumen();

        
        $data['konsumen']   = $this->konsumen->data();
        $data['cus']      = $cust->num_rows();

        $this->load->view('backend/admin/laporan/lapkonsumen', $data);
    }
}