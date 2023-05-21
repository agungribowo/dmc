<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {

	function __construct() {
        parent::__construct();        
        $this->load->model('M_produk','produk');
        $this->load->model('M_pemesanan','pemesanan');

    }
	
	function index()	{
		$data = array(			
            'produk' => $this->produk->data()
		);
		$this->load->view('layout/kepala');		
		$this->load->view('frontend/dasbor');
		$this->load->view('layout/kaki');
	}


	
	function detail() {
		if ($IdRumah = $this->uri->segment(3)) {
			$pd = $this->db->get_where('tbl_produk', array('IdRumah' => $IdRumah))->row_array();
            $data = array(
            'produk' => $pd
            );
		$this->load->view('layout/kepala',$data);		
		$this->load->view('frontend/detail');
		$this->load->view('layout/kaki');
		} else {
			redirect('kesalahan');
		}
	}

	function produk() {
			  
            $data = array(
            'produk' => $this->produk->data()
            );
		
		$this->load->view('layout/kepala', $data);		
		$this->load->view('frontend/produk');
		$this->load->view('layout/kaki');
	} 

	

	function kontak() {

		$this->load->view('layout/kepala');		
		$this->load->view('frontend/kontak');
		$this->load->view('layout/kaki');
	}

	function tentang() {

		$this->load->view('layout/kepala');		
		$this->load->view('frontend/tentang');
		$this->load->view('layout/kaki');
	}

	
	function pemesanan() {
		if (isset($_POST['submit'])) {
	} else {
        if ($IdRumah = $this->uri->segment(3)) {
                    $data = array(
                    'kodeunik'  => $this->pemesanan->kodeotomatis(),
                    'produk' => $this->db->get_where('tbl_produk', array('IdRumah' => $IdRumah))->row_array()
                );
                $this->load->view('backend/user/kepala', $data);
                $this->load->view('backend/user/stts/list');
                $this->load->view('backend/user/kaki');
        } else {
            redirect('kesalahan');
        	}
    	}
	}
}
