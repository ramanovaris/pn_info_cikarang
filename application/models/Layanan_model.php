<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	// Tambah
	public function tambah ($data) {
		$this->db->insert('permohonan_informasi',$data);
	}

	// Auto Number
	public function get_autonumber_pendaftaran(){
		$cd = $this->db->query("SELECT MAX(RIGHT(kode_pemohon,5)) AS kode_max FROM `permohonan_informasi` WHERE DATE(tanggal_permohonan) = CURDATE()");
		$kd = "";
		if($cd->num_rows()>0){
				foreach($cd->result() as $k){
						$tmp = ((int)$k->kode_max)+1;
						$kd = sprintf("%05s", $tmp);
				}
		}else{
				$kd = "00001";
		}
		date_default_timezone_set('Asia/Jakarta');
    return date('my')."-".$kd;
}
	
	// // Edit 
	// public function edit ($data) {
	// 	$this->db->where('id_berita',$data['id_berita']);
	// 	$this->db->update('berita',$data);
	// }
	
	// // Delete
	// public function delete ($data){
	// 	$this->db->where('id_berita',$data['id_berita']);
	// 	$this->db->delete('berita',$data);
	// }
}