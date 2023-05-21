<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {
    
    //chekLogin
    function chekLogin($UserName, $Password) {
        $this->db->where('UserName',  $UserName);
        $this->db->where('Password',  SHA1($Password));
        $admin = $this->db->get('tbl_admin')->row_array();
        return $admin;
    } 
}