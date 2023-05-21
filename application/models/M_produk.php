<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_produk extends CI_Model {

    public $table ="tbl_produk";

    //data
    public function data(){
        $query = "SELECT * FROM tbl_produk ORDER BY IdRumah asc";
        return $this->db->query($query)->result();
    }

    
    public function All() {
        $hasil = $this->db->get('tbl_produk');
    
        if($hasil->num_rows() > 0) {
            return $hasil->result();
            } else {
                return array();
            }    
    }



    //produk
    function getProduk($where = '') {
        return $this->db->query("SELECT * FROM tbl_produk $where; ");
    }


    function kodeotomatis() {
        $q = $this->db->query("SELECT MAX(RIGHT(IdRumah, 4)) AS kd_max FROM tbl_produk");
        $kd = "";
        if($q->num_rows() > 0) {
            foreach ($q->result()as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s",$tmp);
            }
        }else {
            $kd = "0001";
        } $kodejadi = "R".$kd;
            return $kodejadi;
    }

    
    function save($foto) {
        $data = array(
            'IdRumah'            => $this->input->post('IdRumah'),
            'TypeRumah'          => $this->input->post('TypeRumah'),
            'NamaRumah'          => $this->input->post('NamaRumah'),
            'AlamatRumah'        => $this->input->post('AlamatRumah'),
            'BlokRumah'          => $this->input->post('BlokRumah'),
            'HargaRumah'         => $this->input->post('HargaRumah'),
            'GambarRumah'        => $foto,
            'KeteranganRumah'    => $this->input->post('KeteranganRumah'),
            'BookingFee'         => $this->input->post('BookingFee')                        
        );
        $this->db->insert($this->table,$data);
    }
    
    function update($foto) {
        $data = array(
            'TypeRumah'          => $this->input->post('TypeRumah'),
            'NamaRumah'          => $this->input->post('NamaRumah'),
            'AlamatRumah'        => $this->input->post('AlamatRumah'),
            'BlokRumah'          => $this->input->post('BlokRumah'),
            'HargaRumah'         => $this->input->post('HargaRumah'),
            'GambarRumah'        => $foto,
            'KeteranganRumah'    => $this->input->post('KeteranganRumah'),
            'BookingFee'         => $this->input->post('BookingFee')            
        );
        $IdRumah   = $this->input->post('IdRumah');
        $this->db->where('IdRumah',$IdRumah);
        $this->db->update($this->table,$data);
    }    
    
}