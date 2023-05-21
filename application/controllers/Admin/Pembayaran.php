<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	//Fungsi construct
	function __construct() {
        parent::__construct();
        sesimasukAnggota();
        $this->load->model('M_pembayaran','pembayaran');
    }


    //Fungsi index
	function index() {
		$data = array(			
            'pembayaran' => $this->pembayaran->data()
		);
		$this->load->view('backend/admin/kepala', $data);		
        $this->load->view('backend/admin/pembayaran/list');
        $this->load->view('backend/admin/kaki');
	}


    //Fungsi tambah
    function tambah() {
        if (isset($_POST['submit'])) {
            $IdPembayaran = $this->input->post('IdPembayaran');

            $query = $this->db->get_where('tbl_pembayaran', array('IdPembayaran' => $IdPembayaran));
            
            if($query->num_rows() == 0) {
                $this->pembayaran->save();
                $this->session->set_flashdata('simpan', 'pembayaran berhasil tersimpan ...');
                redirect('admin/pembayaran');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, pembayaran sudah ada ...');
                redirect('admin/pembayaran');                
            }

        } else {
            $data = array(
                'kodeunik'   => $this->pembayaran->kodeotomatis()
            );
            $this->load->view('backend/admin/kepala', $data);            
            $this->load->view('backend/admin/pembayaran/tambah');
            $this->load->view('backend/admin/kaki');
        }
    }


     //Fungsi edit
    function edit() {
        if (isset($_POST['submit'])) {
                $this->pembayaran->update();
                $this->session->set_flashdata('update', 'pembayaran pembayaran berhasil diperbaharui ...');
                redirect('admin/pembayaran');        
        } else {
            if ($IdPembayaran = $this->uri->segment(3)) {
                    $data = array(
                    'pembayaran' => $this->db->get_where('tbl_pembayaran', array('IdPembayaran' => $IdPembayaran))->row_array()
                );
                $this->load->view('backend/admin/kepala', $data);
                $this->load->view('backend/admin/pembayaran/ubah');
                $this->load->view('backend/admin/kaki');
            } else {
                redirect('kesalahan');
            }
        }
    }


    //Fungsi hapus
    function hapus() {
        if ($IdPembayaran = $this->uri->segment(3)) {

            if(!empty($IdPembayaran)) {
                $this->db->where('IdPembayaran', $IdPembayaran);
                $this->db->delete('tbl_pembayaran');
            }
            $this->session->set_flashdata('hapus', 'pembayaran pembayaran berhasil terhapus ...');
            redirect('admin/pembayaran');
        } else {
            redirect('kesalahan');
        }
    }

}