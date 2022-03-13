<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Approve_model extends CI_Model {
	
	// Load database
	public function __construct() {
		parent::__construct();
		$this->load->database();
	}
	
	//Listing
	public function listing() {
		$sql= "
		SELECT
			b.`nama` AS nama_verifikator,
			a.*
		FROM `permohonan_informasi` a
		LEFT JOIN users b ON a.`id_verifikator` = b.`id_user`
		WHERE
			a.`status_permohonan` IN (
				'TERIMA'
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

	// detail per approve
	public function detail($id_pemohon){
		$query = $this->db->get_where('permohonan_informasi',array('id_pemohon'  => $id_pemohon));
		return $query->row();
	}

	// Edit 
	public function edit ($data) {
		$this->db->where('id_pemohon',$data['id_pemohon']);
		$this->db->update('permohonan_informasi',$data);
	}
}