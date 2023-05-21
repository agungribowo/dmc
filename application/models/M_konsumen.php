<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_konsumen extends CI_Model {

    public $table ="tbl_konsumen";

    function chekLogin($UserName, $Password) {
        $this->db->where('Username',  $UserName);
        $this->db->where('Password',  SHA1($Password));
        $konsumen = $this->db->get('tbl_konsumen')->row_array();
        return $konsumen;
    } 
    //data
    public function data(){
        $query = "SELECT * FROM tbl_konsumen ORDER BY IdKonsumen asc";
        return $this->db->query($query)->result();
    }

    //pelanggan
    function getkonsumen($where = '') {
        return $this->db->query("SELECT * FROM tbl_konsumen $where; ");
    }
   

    function kodeotomatis() {
        $q = $this->db->query("SELECT MAX(RIGHT(IdKonsumen, 4)) AS kd_max FROM tbl_konsumen");
        $kd = "";
        if($q->num_rows() > 0) {
            foreach ($q->result()as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s",$tmp);
            }
        }else {
            $kd = "0001";
        } $kodejadi = "K".$kd;
            return $kodejadi;
    }

    
    function save() {
        $data = array(
            'IdKonsumen'    => $this->input->post('IdKonsumen'),
            'UserName'      => $this->input->post('UserName'),
            'Password'      => SHA1($this->input->post('Password')),
            'Email'         => $this->input->post('Email'),
            'NamaDepan'     => $this->input->post('NamaDepan'),
            'NamaBelakang'  => $this->input->post('NamaBelakang'),
            'Alamat'        => $this->input->post('Alamat'),
            'Kota'          => $this->input->post('Kota'),
            'Provinsi'      => $this->input->post('Provinsi'),
            'KodePos'       => $this->input->post('KodePos'),
            'Telepon'       => $this->input->post('Telepon'),
            'Gambar'        => $this->input->post('Gambar')
        );
        $this->db->insert($this->table,$data);
    }
    
    function update() {
        $data = array(
            'UserName'      => $this->input->post('UserName'),
            'Password'      => SHA1($this->input->post('Password')),
            'Email'         => $this->input->post('Email'),
            'NamaDepan'     => $this->input->post('NamaDepan'),
            'NamaBelakang'  => $this->input->post('NamaBelakang'),
            'Alamat'        => $this->input->post('Alamat'),
            'Kota'          => $this->input->post('Kota'),
            'Provinsi'      => $this->input->post('Provinsi'),
            'KodePos'       => $this->input->post('KodePos'),
            'Telepon'       => $this->input->post('Telepon'),
            'Gambar'        => $this->input->post('Gambar')
        );
        $IdKonsumen   = $this->input->post('IdKonsumen');
        $this->db->where('IdKonsumen',$IdKonsumen);
        $this->db->update($this->table,$data);
    }    
    
}