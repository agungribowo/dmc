<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pemesanan extends CI_Model {

    public $table ="tbl_pemesanan";

    //data
    public function data(){
        $query = "SELECT * FROM tbl_pemesanan ORDER BY IdPemesanan asc";
        return $this->db->query($query)->result();
    }

    public function All() {
        $hasil = $this->db->get('tbl_pemesanan');
    
        if($hasil->num_rows() > 0) {
            return $hasil->result();
            } else {
                return array();
            }    
    }

    //pelanggan
    function getPemesanan($where = '') {
        return $this->db->query("SELECT * FROM tbl_pemesanan $where; ");
    }


    function kodeotomatis() {
        $q = $this->db->query("SELECT MAX(RIGHT(IdPemesanan, 4)) AS kd_max FROM tbl_pemesanan");
        $kd = "";
        if($q->num_rows() > 0) {
            foreach ($q->result()as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s",$tmp);
            }
        }else {
            $kd = "0001";
        } $kodejadi = "P".$kd;
            return $kodejadi;
    }

    
    function save() {
        
        $data = array(
            'IdPemesanan'               => $this->input->post('IdPemesanan'),
            'IdKonsumen'                => $this->input->post('IdKonsumen'),
            'IdRumah'                   => $this->input->post('IdRumah'),
            'TanggalPemesanan'          => $this->input->post('TanggalPemesanan'),
            'kodeadmin'                 => $this->input->post('kodeadmin')            
        );
        $this->db->insert($this->table,$data);
    }
    
    function update() {
        
        $data = array(
            'IdKonsumen'                => $this->input->post('IdKonsumen'),
            'IdRumah'                   => $this->input->post('IdRumah'),
            'TanggalPemesanan'          => $this->input->post('TanggalPemesanan'),
            'kodeadmin'                 => $this->input->post('kodeadmin')            
        );
        $IdPemesanan   = $this->input->post('IdPemesanan');
        $this->db->where('IdPemesanan',$IdPemesanan);
        $this->db->update($this->table,$data);
    }    
    
}