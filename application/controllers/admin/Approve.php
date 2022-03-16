<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Approve extends CI_Controller {
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('approve_model');
		
	}
	
	// Index
	public function index() {
		$approve = $this->approve_model->listing();
		
		$data = array(	
							'title'		=> 'Data Pengolah Informasi',
							'approve'	=> $approve,
							'isi'		=> 'admin/approve/list'
						);
		$this->load->view('admin/layout/wrapper', $data);
	}

	// AJUKAN PENGAJUAN ke PPID
	public function ajukan($id_pemohon) {
		$data = array(
								'id_pemohon'							=> $id_pemohon,
								'status_permohonan'				=> 'AJUKAN',
								'id_ajukan' 				=> $this->session->userdata('id'),
								'tgl_ajukan'			=> date('Y-m-d H:i:s')
								);
		$this->approve_model->update_sts_pengajuan($data);
		$this->session->set_flashdata('sukses','Pengajuan Telah Di Terima!');
		redirect(base_url('admin/approve'));
	}
	
	// Edit
	public function edit($id_pemohon) {
		$approve		= $this->approve_model->detail($id_pemohon);

		// Validasi
		$v = $this->form_validation;
	
		$v->set_rules('kode_pendaftaran','Kode Pendaftaran','required',
			array(	'required'		=> 'Kode Pendaftaran harus diisi'));
		
		if($v->run()) {
				if(!empty($_FILES['lampiran']['name'])) {
					$config['upload_path'] 		= './assets/upload/lampiran/';
					$config['allowed_types'] 	= 'gif|jpg|png|svg|txt|pdf|xls|xlsx|doc|docx';
					$config['max_size']			= '12000'; // KB	
					$config['file_name'] = date("dmY_His").'_'.$_FILES['lampiran']['name'];

					$this->load->library('upload', $config);

					if(! $this->upload->do_upload('lampiran')) {
					// End validasi
					
						$data = array(
										'title'		=> 'Upload Lampiran Permohonan Informasi',
										'approve'	=> $approve,
										'error'		=> $this->upload->display_errors(),
										'isi'		=> 'admin/approve/edit'); 
						$this->load->view('admin/layout/wrapper', $data);
						// Masuk database
					}
					else{
						$upload_data				= array('uploads' =>$this->upload->data());
						// Image Editor
						$config['image_library']	= 'gd2';
						$config['source_image'] 	= './assets/upload/lampiran/'.$upload_data['uploads']['file_name']; 
						$config['new_image'] 		= './assets/upload/lampiran/thumbs/';
						$config['create_thumb'] 	= TRUE;
						$config['quality'] 			= "100%";
						$config['maintain_ratio'] 	= TRUE;
						$config['width'] 			= 360; // Pixel
						$config['height'] 			= 200; // Pixel
						$config['x_axis'] 			= 0;
						$config['y_axis'] 			= 0;
						$config['thumb_marker'] 	= '';
						$this->load->library('image_lib', $config);
						$this->image_lib->resize();
						
						// Proses ke database
						$i = $this->input;
						$data = array(
											'id_pemohon'				=> $id_pemohon,
											'id_pengolah_data'				=> $this->session->userdata('id'),
											'tanggal_proses'			=> date('Y-m-d H:i:s'),
											'status_permohonan'				=> 'SELESAI',
											'lampiran'				=> $upload_data['uploads']['file_name']
										);

						$this->approve_model->edit($data);
						$this->session->set_flashdata('sukses','Upload Lampiran Telah Berhasil!');
						redirect(base_url('admin/approve'));
					}
				}
				else{
					redirect(base_url('admin/approve'));
				}
		}

		// End masuk database
		$data = array(	
						'title'		=> 'Upload Lampiran Permohonan Informasi',
						'approve'	=> $approve,
						'isi'		=> 'admin/approve/edit'); 
		$this->load->view('admin/layout/wrapper', $data);
	}

	//Permohonon yg sdh selesai di proses dan ada lampiran file yg dikirim
	public function selesai() {
		$approve = $this->approve_model->listing_pengajuan_selesai_terima();
		
		$data = array(	
							'title'		=> 'Data Pengajuan Permohonan Informasi yang Terkirim',
							'approve'	=> $approve,
							'isi'		=> 'admin/approve/list_status_selesai'
						);
		$this->load->view('admin/layout/wrapper', $data);
	}

	//Permohonon yg ditolak dan selesai di proses tapi tdk ada lampiran file yg dikirim
	public function tolak() {
		$approve = $this->approve_model->listing_pengajuan_selesai_tolak();
		
		$data = array(	
							'title'		=> 'Data Pengajuan Permohonan Informasi yang Ditolak',
							'approve'	=> $approve,
							'isi'		=> 'admin/approve/list_status_tolak'
						);
		$this->load->view('admin/layout/wrapper', $data);
	}

	//Kirim Surat Penolak Via EMAIL
	public function kirim_srt_penolakan($id_pemohon) {
		//Update Data Surat Penolakan Permohonan
		$i = $this->input;
		$data = array(
							'id_pemohon'					=> $id_pemohon,
							'id_pengolah_data'		=> $this->session->userdata('id'),
							'tanggal_proses'			=> date('Y-m-d H:i:s'),
							// 'status_permohonan'		=> 'SELESAI',
							'pasal_1_tolak'				=> $i->post('pasal_1_tolak'),
							'pasal_2_tolak'				=> $i->post('pasal_2_tolak'),
							'konsekuensi_tolak'		=> $i->post('konsekuensi_tolak'),
							'atasan_PPID_tolak'		=> $i->post('atasan_PPID_tolak')
						);

		$update_penolakan = $this->approve_model->edit($data);

		#Jika Update Penolakan Berhasil
		if ($update_penolakan > 0) {
			////////////// Creat PDF ////////////////////////////////////////////////////////////////////////
			// panggil library pdf
			$this->load->library('pdf');

			//get data by id
			$approve = $this->approve_model->listing_by_id($id_pemohon);
			//get kode_permohonan by id
			$kode_permohonan = $this->approve_model->get_kode_permohonan($id_pemohon);
			
			$data = array(	
								'title'		=> 'SURAT KEPUTUSAN PPID TENTANG PENOLAKAN PERMOHONAN INFORMASI '.$kode_permohonan,
								'approve'	=> $approve,
								'isi'		=> 'admin/approve/list'
							);
			$html = $this->load->view('admin/approve/srt_penolakan_pdf', $data, true);
			//Nama File Generate
			$filename = 'SURAT KEPUTUSAN PPID TENTANG PENOLAKAN PERMOHONAN INFORMASI '.$kode_permohonan.'.pdf';
			
			// Save PDF to server
			// $createPDF = $this->pdf->createPDF($html, $filename, 'A4', 'potrait');

			// Preview PDF
			$PreviePDF = $this->pdf->PreviePDF($html, $filename, 'A4', 'portrait');
			

			// ///////////////////// kirim email///////////////////////////////////////////////////////////////
			// // Konfigurasi email
			// $config = [
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
			// $this->email->attach('assets/generate_pdf/'.$filename);
			// // Subject email
			// $this->email->subject('Tes lagi');
			// // Isi email
			// $this->email->message("coba bcc ke 2 penerima");
			// // Kirim email
			// $this->email->send();

			// // // Tampilkan pesan sukses atau error
			// // if ($this->email->send()) {
			// // 		echo 'Sukses! email berhasil dikirim.';
			// // } else {
			// // 		echo 'Error! email tidak dapat dikirim.';
			// // 		echo '<br />';
			// // 		echo $this->email->print_debugger();
			// // }
			// ////////////////////////////////////////// end kirim email/////////////////////////

			// $this->session->set_flashdata('sukses','Kirim Surat Penolakan Berhasil!');
			// redirect(base_url('admin/approve'));
		} 
		else {
			$this->session->set_flashdata('error', 'Error');
			redirect(base_url('admin/approve'));
		}
	}
	
}