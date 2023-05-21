<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Status extends CI_Controller {

	//Fungsi konstruk
	function __construct() {
        parent::__construct();        
        sesimasukAdmin();
        $this->load->model('M_pemesanan','pemesanan');
        $this->load->model('M_konsumen','konsumen');
        $this->load->model('M_produk','produk');

    }
	
    public function index() {
      if($IdPemesanan = $this->uri->segment(3)) {
        $data = array(
            'pemesanan' => $this->db->get_where('tbl_pemesanan', array('IdPemesanan' => $IdPemesanan))->row_array()
            );
        $this->load->view('backend/user/kepala', $data);
        $this->load->view('backend/user/stts/detail');
        $this->load->view('backend/user/kaki');
      }  else {
        redirect('kesalahan');
        }   
    } 


	//Fungsi tambah
    function tambah() {
        if (isset($_POST['submit'])) {
            $Idpemesanan = $this->input->post('Idpemesanan');

            $query = $this->db->get_where('tbl_pemesanan', array('Idpemesanan' => $Idpemesanan));
            
            if($query->num_rows() == 0) {
                $this->pemesanan->save();
                $this->session->set_flashdata('simpan', 'pemesanan berhasil tersimpan ...');
                redirect('user/dashboard');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, pemesanan sudah ada ...');
                redirect('user/dashboard');                
            }

        } else {
            $data = array(
                'kodeunik'   => $this->pemesanan->kodeotomatis()
            );
            $this->load->view('backend/user/kepala', $data);            
            $this->load->view('backend/user/dasbor');
            $this->load->view('backend/user/kaki');
        }
    }


    function detai() {
        
    }
}
