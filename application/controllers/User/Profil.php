<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	//Fungsi konstruk
	function __construct() {
        parent::__construct();        
        sesimasukAdmin(); 
        $this->load->model('M_konsumen','konsumen');       
    }
	

	public function index()	{
		
		$this->load->view('backend/user/kepala');
		$this->load->view('backend/user/profil/list');
		$this->load->view('backend/user/kaki');
	} 
}
