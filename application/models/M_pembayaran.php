<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pembayaran extends CI_Model {

    public $table ="tbl_pembayaran";

    //data
    public function data(){
        $query = "SELECT * FROM tbl_pembayaran ORDER BY IdPembayaran asc";
        return $this->db->query($query)->result();
    }

    //pelanggan
    function getPembayaran($where = '') {
        return $this->db->query("SELECT * FROM tbl_pembayaran $where; ");
    }


    function kodeotomatis() {
        $q = $this->db->query("SELECT MAX(RIGHT(IdPembayaran, 4)) AS kd_max FROM tbl_pembayaran");
        $kd = "";
        if($q->num_rows() > 0) {
            foreach ($q->result()as $k) {
                $tmp = ((int)$k->kd_max) + 1;
                $kd = sprintf("%04s",$tmp);
            }
        }else {
            $kd = "0001";
        } $kodejadi = "B".$kd;
            return $kodejadi;
    }

    
    function save() {
        $data = array(
            'IdPembayaran'               => $this->input->post('IdPembayaran'),
            'IdPemesanan'                => $this->input->post('IdPemesanan'),
            'TanggalTransfer'            => $this->input->post('TanggalTransfer'),            
            'Bank'                       => $this->input->post('Bank'),
            'NoRekening'                 => $this->input->post('NoRekening')           
        );
        $this->db->insert($this->table,$data);
    }
    
    function update() {
        $data = array(
            'IdPemesanan'                => $this->input->post('IdPemesanan'),
            'TanggalTransfer'            => $this->input->post('TanggalTransfer'),            
            'Bank'                       => $this->input->post('Bank'),
            'NoRekening'                 => $this->input->post('NoRekening')            
        );
        $IdPembayaran   = $this->input->post('IdPembayaran');
        $this->db->where('IdPembayaran',$IdPembayaran);
        $this->db->update($this->table,$data);
    }    
    
}