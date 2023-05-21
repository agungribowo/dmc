<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cekmasuk extends CI_Controller {

	//Fungsi konstruk
	function __construct() {
        parent::__construct();
        $this->load->model('M_admin','admin');
        $this->load->model('M_konsumen','konsumen');
    }

	//Fungsi cekmasuk
	function index() {
        if (isset($_POST['submit'])) {
            $UserName = $this->input->post('UserName');
            $Password = $this->input->post('Password');

            $loginAdmin   = $this->admin->chekLogin($UserName, $Password);
            $loginKonsumen = $this->konsumen->chekLogin($UserName, $Password);

            if (!empty($loginAdmin)) {
                $this->session->set_userdata($loginAdmin);
                $this->session->set_flashdata('sukses', 'kamu berhasil masuk ...');
                redirect('admin/dashboard');

            } elseif (!empty($loginKonsumen)) {
                $this->session->set_userdata($loginKonsumen);
                $this->session->set_flashdata('sukses', 'kamu berhasil masuk ...');
                redirect('user/dashboard');

            } else {
                $this->session->set_flashdata('gagal', 'maaf, username atau password kamu salah !');
                redirect('auth/masuk');
            }
            
        } else {
            $this->session->set_flashdata('gagal', 'maaf, username atau password kamu salah !');
            redirect('auth/masuk');
        }
    }

}