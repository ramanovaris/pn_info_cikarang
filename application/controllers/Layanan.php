<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanan extends CI_Controller {
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('konfigurasi_model');
		$this->load->model('produk_model');
		$this->load->model('berita_model');
		$this->load->model('layanan_model');
	}
	
	// Index 
	public function index() {
		$site	= $this->konfigurasi_model->listing();
		$produk	= $this->produk_model->home();
		$berita	= $this->berita_model->home();
		
		// // Validasi
		// $valid = $this->form_validation;
		// $valid->set_rules('nama','Nama','required',
		// 	array(	'required'		=> 'Nama harus diisi'));
		
		// $valid->set_rules('email','Email','required',
		// 	array(	'required'		=> 'Email harus diisi'));
		
		// $valid->set_rules('pesan','Pesan','required',
		// 	array(	'required'		=> 'Pesan harus diisi'));
		
		// if($valid->run() === FALSE) {
			// End validasi
			
			$data	= array( 
				'title'	=> $site['namaweb'].' | '.$site['tagline'],
				'keywords' => $site['namaweb'].', '.$site['keywords'],
				'produk'	=> $produk,
				'berita'	=> $berita,
				'site'		=> $site,
				'isi'		=> 'home/layanan'
			);
			$this->load->view('layout/wrapper',$data); 
			//Kirim ke pemilik website
		// }
		// else{
		// 	// Konfigurasi email
		// 	$config = [
		// 		'mailtype'  => 'html',
		// 		'charset'   => 'utf-8',
		// 		'protocol'  => 'smtp',
		// 		'smtp_host' => 'smtp.gmail.com',
		// 		'smtp_user' => 'hantuwifi7@gmail.com',  // Email gmail
		// 		'smtp_pass'   => 'sulitditebak',  // Password gmail
		// 		'smtp_crypto' => 'ssl',
		// 		'smtp_port'   => 465,
		// 		'crlf'    => "\r\n",
		// 		'newline' => "\r\n"
		// ];

		// // Load library email dan konfigurasinya
		// $this->load->library('email', $config);

		// // Email dan nama pengirim
		// $this->email->from('hantuwifi7@gmail.com', 'hantu');

		// // Email penerima
		// $this->email->bcc('ramaanovariss@gmail.com, theboy141198@gmail.com'); // Ganti dengan email tujuan

		// // Lampiran email, isi dengan url/path file
		// $this->email->attach('https://images.pexels.com/photos/169573/pexels-photo-169573.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940');

		// // Subject email
		// $this->email->subject('Tes lagi');

		// // Isi email
		// $this->email->message("coba bcc ke 2 penerima");

		// 	// Tampilkan pesan sukses atau error
		// 	if ($this->email->send()) {
		// 			echo 'Sukses! email berhasil dikirim.';
		// 	} else {
		// 			echo 'Error! email tidak dapat dikirim.';
		// 			echo '<br />';
		// 			echo $this->email->print_debugger();
		// 	}
		// }
		// End kirim
	}

	// Tambah
	public function tambah() {
		$site	= $this->konfigurasi_model->listing();
		$produk	= $this->produk_model->home();
		$berita	= $this->berita_model->home();

		// Validasi
		$v = $this->form_validation;
		$v->set_rules('nama','Nama','required',
			array(	'required'		=> 'Nama harus diisi'));
		
		$v->set_rules('email','Email','required',
			array(	'required'		=> 'Email harus diisi'));
		
		$v->set_rules('pesan','Pesan','required',
			array(	'required'		=> 'Pesan harus diisi'));

			$v->set_rules('pekerjaan','Pekerjaan','required',
			array(	'required'		=> 'Pekerjaan harus diisi'));

			$v->set_rules('telepon','Telepon','required',
			array(	'required'		=> 'Telepon harus diisi'));
		
		if($v->run()) {				
				// Proses ke database

				// Get Autonumber
				$kode_pemohon = $this->layanan_model->get_autonumber_pendaftaran();

				$i = $this->input;
				$data = array(	
								// 'id_user'				=> $this->session->userdata('id'),
								'kode_pemohon'			=> $kode_pemohon,
								'nama_pemohon'			=> $i->post('nama'),
								'email'			=> $i->post('email'),
								'pesan'				=> $i->post('pesan'),
								'pekerjaan'			=> $i->post('pekerjaan'),
								'no_telpon'			=> $i->post('telepon')
								);
				$this->layanan_model->tambah($data);
				$this->session->set_flashdata('sukses','Permohonan Informasi telah ditambah');
				redirect(base_url('layanan'));
		}
		// End masuk database

		$data	= array( 
			'title'	=> $site['namaweb'].' | '.$site['tagline'],
			'keywords' => $site['namaweb'].', '.$site['keywords'],
			'produk'	=> $produk,
			'berita'	=> $berita,
			'site'		=> $site,
			'isi'		=> 'home/layanan'
		);
		$this->load->view('layout/wrapper',$data); 
	}
}
		