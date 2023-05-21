<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DetailRumah extends CI_Controller {

	//Fungsi konstruk
	function __construct() {
        parent::__construct();        
        sesimasukAdmin();        
    }
	

	public function index()
	{
		$this->load->view('layout/kepala');		
		$this->load->view('frontend/detail');
		$this->load->view('layout/kaki');
	}
}
