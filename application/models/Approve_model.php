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
			b.`nama` AS nama_petugas_ppid,
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
		LEFT JOIN users b ON a.`id_setujui_ppid` = b.`id_user`
		WHERE
			a.`status_permohonan` IN (
				'BELUM DIVERIFIKASI',
				'TERIMA',
				'TOLAK'
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

		return $this->db->affected_rows();
	}

	//Listing BY status
	public function listing_by_status($status) {
		$sql= "
		SELECT
			b.`nama` AS nama_pengolah_data,
			c.`nama` AS nama_ppid,
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
		LEFT JOIN users b ON a.`id_pengolah_data` = b.`id_user`
		LEFT JOIN users c ON a.`id_setujui_ppid` = c.`id_user`
		WHERE
			a.`status_permohonan` IN (
				'".$status."'
			)
		ORDER BY tanggal_permohonan ASC
		";    
		$query = $this->db->query($sql);
		return $query->result();
	}

		//Listing status selesai dan terima file
		public function listing_pengajuan_selesai_terima() {
			$sql= "
			SELECT
				b.`nama` AS nama_pengolah_data,
				c.`nama` AS nama_ppid,
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
			LEFT JOIN users b ON a.`id_pengolah_data` = b.`id_user`
			LEFT JOIN users c ON a.`id_setujui_ppid` = c.`id_user`
			WHERE
				a.`status_permohonan` IN (
					'SELESAI'
				) and
				a.lampiran is not null
			ORDER BY tanggal_permohonan ASC
			";    
			$query = $this->db->query($sql);
			return $query->result();
		}

		//Listing status selesai tapi tdk terima file
		public function listing_pengajuan_selesai_tolak() {
			$sql= "
			SELECT
				b.`nama` AS nama_pengolah_data,
				c.`nama` AS nama_ppid,
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
			LEFT JOIN users b ON a.`id_pengolah_data` = b.`id_user`
			LEFT JOIN users c ON a.`id_setujui_ppid` = c.`id_user`
			WHERE
				a.`status_permohonan` IN (
					'SELESAI'
				) and
				a.lampiran is null
			ORDER BY tanggal_permohonan ASC
			";    
			$query = $this->db->query($sql);
			return $query->result();
		}

	//Listing by id
	public function listing_by_id($id) {
		$sql= "
		SELECT
			b.`nama` AS nama_petugas_ppid,
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
			a.`id_setujui_ppid`,
			a.pasal_1_tolak,
			a.pasal_2_tolak,
			a.konsekuensi_tolak,
			a.atasan_PPID_tolak
		FROM `permohonan_informasi` a
		LEFT JOIN users b ON a.`id_setujui_ppid` = b.`id_user`
		WHERE
			a.id_pemohon = '".$id."' and
			a.`status_permohonan` IN (
				'BELUM DIVERIFIKASI',
				'TERIMA',
				'TOLAK'
			)
		ORDER BY tanggal_permohonan ASC
		";    
		$query = $this->db->query($sql);
		return $query->result();
	}

	public function get_kode_permohonan($id) {
		$sql= "
		SELECT
			a.`kode_pemohon`
		FROM `permohonan_informasi` a
		LEFT JOIN users b ON a.`id_setujui_ppid` = b.`id_user`
		WHERE
			a.id_pemohon = '".$id."' and
			a.`status_permohonan` IN (
				'BELUM DIVERIFIKASI',
				'TERIMA',
				'TOLAK'
			)
		ORDER BY tanggal_permohonan ASC
		";    
		$query = $this->db->query($sql);
		return $query->row()->kode_pemohon;
	}
}