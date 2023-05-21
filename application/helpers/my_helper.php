<?php
defined('BASEPATH') OR exit('No direct script access allowed');
	
	//sesi petugas
	function sesimasukAdmin() { 
	  if(isset($_SESSION['UserName'])) {
	      return true;
	  } else {
	     redirect(base_url().'auth/masuk', 'refresh');
	  }
	}


	//sesi pendaftar
	function sesimasukAnggota() { 
		if(isset($_SESSION['UserName'])) {
			return true;
		} else {
			redirect(base_url().'auth/masuk', 'refresh');
		}
	}