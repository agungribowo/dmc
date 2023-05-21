<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Konsumen extends CI_Controller {

	//Fungsi construct
	function __construct() {
        parent::__construct();
        sesimasukAnggota();
        $this->load->model('M_konsumen','konsumen');
    }


    //Fungsi index
	function index() {
		$data = array(			
            'konsumen' => $this->konsumen->data()
		);
		$this->load->view('backend/admin/kepala', $data);		
        $this->load->view('backend/admin/konsumen/list');
        $this->load->view('backend/admin/kaki');
	}

    //Fungsi detail
    function detail() {
        if ($IdKonsumen = $this->uri->segment(4)) {
            $data = array(          
            'konsumen' => $this->db->get_where('tbl_konsumen', array('IdKonsumen' => $IdKonsumen))->row_array()
            );
            $this->load->view('backend/admin/kepala', $data);       
            $this->load->view('backend/admin/konsumen/detail');
            $this->load->view('backend/admin/kaki');
        } else {
            redirect('kesalahan');
        }      
    }


    //Fungsi tambah
    function tambah() {
        if (isset($_POST['submit'])) {
            $IdKonsumen = $this->input->post('IdKonsumen');

            $query = $this->db->get_where('tbl_konsumen', array('IdKonsumen' => $IdKonsumen));
            
            if($query->num_rows() == 0) {
                $this->konsumen->save();
                $this->session->set_flashdata('simpan', 'konsumen berhasil tersimpan ...');
                redirect('admin/konsumen');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, konsumen sudah ada ...');
                redirect('admin/konsumen');                
            }

        } else {
            $data = array(
                'kodeunik'   => $this->konsumen->kodeotomatis()
            );
            $this->load->view('backend/admin/kepala', $data);            
            $this->load->view('backend/admin/konsumen/tambah');
            $this->load->view('backend/admin/kaki');
        }
    }


     //Fungsi edit
    function edit() {
        if (isset($_POST['submit'])) {
                $this->konsumen->update();
                $this->session->set_flashdata('update', 'konsumen konsumen berhasil diperbaharui ...');
                redirect('admin/konsumen');        
        } else {
            if ($IdKonsumen = $this->uri->segment(4)) {
                    $data = array(
                    'konsumen' => $this->db->get_where('tbl_konsumen', array('IdKonsumen' => $IdKonsumen))->row_array()
                );
                $this->load->view('backend/admin/kepala', $data);
                $this->load->view('backend/admin/konsumen/ubah');
                $this->load->view('backend/admin/kaki');
            } else {
                redirect('kesalahan');
            }
        }
    }


    //Fungsi hapus
    function hapus() {
        if ($IdKonsumen = $this->uri->segment(4)) {

            if(!empty($IdKonsumen)) {
                $this->db->where('IdKonsumen', $IdKonsumen);
                $this->db->delete('tbl_konsumen');
            }
            $this->session->set_flashdata('hapus', 'konsumen konsumen berhasil terhapus ...');
            redirect('admin/konsumen');
        } else {
            redirect('kesalahan');
        }
    }

}