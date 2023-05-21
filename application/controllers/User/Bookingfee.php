<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bookingfee extends CI_Controller {

	//Fungsi konstruk
	function __construct() {
        parent::__construct();        
        sesimasukAdmin();    
        $this->load->model('M_pembayaran','pembayaran');      
    }
	

	public function index()
	{
		$this->load->view('backend/user/kepala');
		$this->load->view('backend/user/bfee/list');
		$this->load->view('backend/user/kaki');
	}



	//Fungsi tambah
    function tambah() {
        if (isset($_POST['submit'])) {
            $IdPembayaran = $this->input->post('IdPembayaran');

            $query = $this->db->get_where('tbl_pembayaran', array('IdPembayaran' => $IdPembayaran));
            
            if($query->num_rows() == 0) {
                $this->pembayaran->save();
                $this->session->set_flashdata('simpan', 'pembayaran berhasil tersimpan ...');
                redirect('user/dashboard');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, pembayaran sudah ada ...');
                redirect('user/Bookingfee');                
            }

        } else {
            $data = array(
                'kodeunik'   => $this->pembayaran->kodeotomatis()
            );
            $this->load->view('backend/user/kepala', $data);            
            $this->load->view('backend/user/bfee/list');
            $this->load->view('backend/user/kaki');
        }
    }
}
