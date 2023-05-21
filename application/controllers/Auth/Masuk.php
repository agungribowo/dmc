<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Masuk extends CI_Controller {

	//Fungsi konstruk
	function __construct() {
        parent::__construct();
        $this->load->model('M_konsumen','konsumen');
    }


    //Fungsi default
	function index() {
		if(isset($_SESSION['kodeadmin'])) {
            redirect(site_url('admin/dashboard'));
        } else if(isset($_SESSION['IdKonsumen'])) {
            redirect(site_url('user/dashboard'));
        }

		$this->load->view('layout/kepala');
        $this->load->view('masuk');
        $this->load->view('layout/kaki');
	}


    //Fungsi tambah
    function daftar() {
        if (isset($_POST['submit'])) {
            $IdKonsumen = $this->input->post('IdKonsumen');

            $query = $this->db->get_where('tbl_konsumen', array('IdKonsumen' => $IdKonsumen));
            
            if($query->num_rows() == 0) {
                $this->konsumen->save();
                $this->session->set_flashdata('simpan', 'konsumen berhasil tersimpan ...');
                redirect('auth/masuk');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, konsumen sudah ada ...');
                redirect('auth/masuk');                
            }

        } else {
            $data = array(
                'kodeunik'   => $this->konsumen->kodeotomatis()
            );
            $this->load->view('layout/kepala', $data);            
            $this->load->view('daftar');
            $this->load->view('layout/kaki');
        }
    }

    
}