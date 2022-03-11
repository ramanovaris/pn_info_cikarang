<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	//Listing
	public function listing() {
		$sql= "
		SELECT
			IF(a.`status_permohonan`='BELUM DIVERIKASI',
				1
				,
				IF(a.`status_permohonan`='TOLAK',
					2
					,
					0=0
				)
			) AS urut,
			a.*
		FROM `permohonan_informasi` a
		WHERE
			a.`status_permohonan` in (
				'BELUM DIVERIFIKASI',
				'TOLAK'
			)
		ORDER BY
						urut ASC,
						tanggal_permohonan ASC
		";    
		$query = $this->db->query($sql);
		return $query->result();
	}

	// Update Status Pengajuan 
	public function update_sts_pengajuan($data) {
		$this->db->where('id_pemohon',$data['id_pemohon']);
		$this->db->update('permohonan_informasi',$data);
	}

	// //Read
	// public function read($slug_berita) {
	// 	$this->db->select('berita.*, kategori_berita.nama_kategori_berita, users.nama');
	// 	$this->db->from('berita');
	// 	// Join
	// 	$this->db->join('kategori_berita','kategori_berita.id_kategori_berita = berita.id_kategori_berita', 'LEFT');
	// 	$this->db->join('users','users.id_user = berita.id_user','LEFT');
	// 	// End join
	// 	$this->db->where('slug_berita',$slug_berita);
	// 	$this->db->order_by('id_berita','DESC');
	// 	$query = $this->db->get();
	// 	return $query->row();
	// }
	
	// //Kategori
	// public function kategori($id_kategori_berita) {
	// 	$this->db->select('berita.*, kategori_berita.nama_kategori_berita, users.nama');
	// 	$this->db->from('berita');
	// 	// Join
	// 	$this->db->join('kategori_berita','kategori_berita.id_kategori_berita = berita.id_kategori_berita', 'LEFT');
	// 	$this->db->join('users','users.id_user = berita.id_user','LEFT');
	// 	// End join
	// 	$this->db->where('berita.id_kategori_berita',$id_kategori_berita);
	// 	$this->db->order_by('id_berita','DESC');
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }
	
	// //Home
	// public function home() {
	// 	$this->db->select('berita.*, kategori_berita.nama_kategori_berita, users.nama');
	// 	$this->db->from('berita');
	// 	// Join
	// 	$this->db->join('kategori_berita','kategori_berita.id_kategori_berita = berita.id_kategori_berita', 'LEFT');
	// 	$this->db->join('users','users.id_user = berita.id_user','LEFT');
	// 	// End join
	// 	$this->db->where('berita.status_berita','Publish');
	// 	$this->db->order_by('id_berita','DESC');
	// 	$this->db->limit(6);
	// 	$query = $this->db->get();
	// 	return $query->result();
	// }
	
	// // detail perberita
	// public function detail($id_berita){
	// 	$query = $this->db->get_where('berita',array('id_berita'  => $id_berita));
	// 	return $query->row();
	// }
	
	// // Tambah
	// public function tambah ($data) {
	// 	$this->db->insert('berita',$data);
	// }
	
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