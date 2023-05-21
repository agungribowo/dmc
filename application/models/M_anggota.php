<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anggota extends CI_Model {

    //chekLogin
    function chekLogin($username, $password) {
        $this->db->where('username',  $username);
        $this->db->where('password',  SHA1($password));
        $anggota = $this->db->get('tbl_konsumen')->row_array();
        return $anggota;
    }
}