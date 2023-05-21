<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	//Fungsi construct
	function __construct() {
        parent::__construct();
        sesimasukAnggota();
        $this->load->model('M_produk','produk');
    }


    //Fungsi index
	function index() {
		$data = array(			
            'produk' => $this->produk->data()
		);
		$this->load->view('backend/admin/kepala', $data);		
        $this->load->view('backend/admin/produk/list');
        $this->load->view('backend/admin/kaki');
	}


    //Fungsi detail
    function detail() {
        if ($IdRumah = $this->uri->segment(4)) {
            $data = array(
                      
            'produk' => $this->db->get_where('tbl_produk', array('IdRumah' => $IdRumah))->row_array()
            );
            $this->load->view('backend/admin/kepala', $data);       
            $this->load->view('backend/admin/produk/detail');
            $this->load->view('backend/admin/kaki');
        } else {
            redirect('kesalahan');
        }      
    }


    //Fungsi tambah
    function tambah() {
        if (isset($_POST['submit'])) {
            $IdRumah = $this->input->post('IdRumah');

            $query = $this->db->get_where('tbl_produk', array('IdRumah' => $IdRumah));
            
            if($query->num_rows() == 0) {
                $uploadGambar = $this->upload_gambar();
                $this->produk->save($uploadGambar);
                $this->session->set_flashdata('simpan', 'produk berhasil tersimpan ...');
                redirect('admin/produk');

            } else {
                $this->session->set_flashdata('gagal', 'Terjadi kesalahan, produk sudah ada ...');
                redirect('admin/produk');                
            }

        } else {
            $data = array(
                'kodeunik'   => $this->produk->kodeotomatis()
            );
            $this->load->view('backend/admin/kepala', $data);            
            $this->load->view('backend/admin/produk/tambah');
            $this->load->view('backend/admin/kaki');
        }
    }


    //Fungsi edit
    function edit() {
        if (isset($_POST['submit'])) {
                $uploadGambar = $this->upload_gambar();
                $this->produk->update($uploadGambar);
                $this->session->set_flashdata('update', 'produk produk berhasil diperbaharui ...');
                redirect('admin/produk');        
        } else {
            if ($IdRumah = $this->uri->segment(4)) {
                    $data = array(
                    'produk' => $this->db->get_where('tbl_produk', array('IdRumah' => $IdRumah))->row_array()
                );
                $this->load->view('backend/admin/kepala', $data);
                $this->load->view('backend/admin/produk/ubah');
                $this->load->view('backend/admin/kaki');
            } else {
                redirect('kesalahan');
            }
        }
    }


    //Fungsi Upload
    function upload_gambar() {
        $config['upload_path']          = './uploads/produk/';
        $config['allowed_types']        = 'jpg|jpeg|png|gif|bmp';
        $config['max_size']             = 2048;
        $this->load->library('upload', $config);
        $this->upload->do_upload('GambarRumah');
        $upload = $this->upload->data();
        return $upload['file_name'];
    }

    //Fungsi hapus
    function hapus() {
        if ($IdRumah = $this->uri->segment(4)) {

            if(!empty($IdRumah)) {
                $this->db->where('IdRumah', $IdRumah);
                $this->db->delete('tbl_produk');
            }
            $this->session->set_flashdata('hapus', 'produk produk berhasil terhapus ...');
            redirect('admin/produk');
        } else {
            redirect('kesalahan');
        }
    }
}