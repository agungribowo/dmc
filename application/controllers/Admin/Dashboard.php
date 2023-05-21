<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	//Fungsi konstruk
	function __construct() {
        parent::__construct();
        sesimasukAnggota();
    }
	
	public function index()
	{
		$this->load->view('backend/admin/kepala');
		$this->load->view('backend/admin/dasbor');
		$this->load->view('backend/admin/kaki');
	}
}
