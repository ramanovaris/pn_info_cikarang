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
			b.`nama` AS nama_ajukan,
			a.`id_pemohon`,
			a.`kode_pemohon`,
			a.`nama_pemohon`,
			a.`alamat`,
			a.`pekerjaan`,
			a.`email`,
			a.`no_telpon`,
			a.`rincian_informasi`,
			a.`tujuan`,
			a.`cara_peroleh_info`,
			a.`salinan`,
			a.`via`,
			DATE_FORMAT(a.`tanggal_permohonan`, '%d %M %Y') AS tanggal_permohonan,
			a.`update_time`,
			a.`id_pengolah_data`,
			DATE_FORMAT(a.`tanggal_proses`, '%d %M %Y') AS tanggal_proses,
			a.`status_permohonan`,
			a.`lampiran`,
			DATE_FORMAT(a.`tgl_ajukan`, '%d %M %Y') AS tgl_ajukan,
			a.`id_ajukan`,
			DATE_FORMAT(a.`tgl_persetujuan_ppid`, '%d %M %Y') AS tgl_persetujuan_ppid,
			a.`id_setujui_ppid`
		FROM `permohonan_informasi` a
		LEFT JOIN users b ON a.`id_ajukan` = b.`id_user`
		WHERE
			a.`status_permohonan` IN (
				'AJUKAN'
			)
		ORDER BY tanggal_permohonan ASC
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