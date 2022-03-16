<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Verifikasi extends CI_Controller {
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('verifikasi_model');
		$this->load->model('kategori_berita_model');
	}
	
	// Index
	public function index() {
		$verifikasi = $this->verifikasi_model->listing();
		
		$data = array(	
							'title'		=> 'Data PPID',
							'verifikasi'	=> $verifikasi,
							'isi'		=> 'admin/verifikasi/list'
						);
		$this->load->view('admin/layout/wrapper', $data);
	}
	
	// TERIMA PENGAJUAN
	public function terima($id_pemohon) {
		$data = array(
								'id_pemohon'							=> $id_pemohon,
								'status_permohonan'				=> 'TERIMA',
								'id_setujui_ppid' 				=> $this->session->userdata('id'),
								'tgl_persetujuan_ppid'			=> date('Y-m-d H:i:s')
								);
		$this->verifikasi_model->update_sts_pengajuan($data);
		$this->session->set_flashdata('sukses','Pengajuan Telah Di Terima!');
		redirect(base_url('admin/verifikasi'));
	}

	// TOLAK PENGAJUAN
	public function tolak($id_pemohon) {
		$data = array(
								'id_pemohon'							=> $id_pemohon,
								'status_permohonan'				=> 'TOLAK',
								'id_setujui_ppid' 				=> $this->session->userdata('id'),
								'tgl_persetujuan_ppid'			=> date('Y-m-d H:i:s')
								);
		$this->verifikasi_model->update_sts_pengajuan($data);
		$this->session->set_flashdata('sukses','Pengajuan Telah Di Tolak!');
		redirect(base_url('admin/verifikasi'));
	}
}