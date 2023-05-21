<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemesanan extends CI_Controller {

	//Fungsi construct
	function __construct() {
        parent::__construct();
        sesimasukAnggota();
        $this->load->model('M_pemesanan','pemesanan');
    }


    //Fungsi index
	function index() {
		$data = array(			
            'pemesanan' => $this->pemesanan->data()
		);
		$this->load->view('backend/admin/kepala', $data);		
        $this->load->view('backend/admin/pemesanan/list');
        $this->load->view('backend/admin/kaki');
	}


    //Fungsi tambah
    function tambah() {
        if (isset($_POST['submit'])) {
            $IdPemesanan = $this->input->post('IdPemesanan');

            $query = $this->db->get_where('tbl_pemesanan', array('IdPemesanan' => $IdPemesanan));
            
            if($query->num_rows() == 0) {
                $this->pemesanan->save();
                $this->session->set_flashdata('simpan', 'pemesanan berhasil tersimpan ...');
                redirect('admin/pemesanan');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, pemesanan sudah ada ...');
                redirect('admin/pemesanan');                
            }

        } else {
            $data = array(
                'kodeunik'   => $this->pemesanan->kodeotomatis()
            );
            $this->load->view('backend/admin/kepala', $data);            
            $this->load->view('backend/admin/pemesanan/tambah');
            $this->load->view('backend/admin/kaki');
        }
    }


    //Fungsi hapus
    function hapus() {
        if ($IdPemesanan = $this->uri->segment(4)) {

            if(!empty($IdPemesanan)) {
                $this->db->where('IdPemesanan', $IdPemesanan);
                $this->db->delete('tbl_pemesanan');
            }
            $this->session->set_flashdata('hapus', 'pemesanan pemesanan berhasil terhapus ...');
            redirect('admin/pemesanan');
        } else {
            redirect('kesalahan');
        }
    }


    function statusdisetujui(){
        if($IdPemesanan = $this->uri->segment(4)) {
            if(!empty($IdPemesanan)) {
                $sp = array('status' => 'Disetujui');
                $this->db->where('IdPemesanan', $IdPemesanan);
                $this->db->update('tbl_pemesanan', $sp);
            }
            $this->session->set_flashdata('simpan', 'Status Pengajuan Disetujui...');
            redirect('admin/pemesanan');
        } else {
            redirect('kesalahan');
        }
    }

    function statusditolak(){
        if($IdPemesanan = $this->uri->segment(4)) {
            if(!empty($IdPemesanan)) {
                $sp = array('status' => 'Ditolak');
                $this->db->where('IdPemesanan', $IdPemesanan);
                $this->db->update('tbl_pemesanan', $sp);
            }
            $this->session->set_flashdata('simpan', 'Status Pengajuan Ditolak...');
            redirect('admin/pemesanan');
        } else {
            redirect('kesalahan');
        }
    }

}