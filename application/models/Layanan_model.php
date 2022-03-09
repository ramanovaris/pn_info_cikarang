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