<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('konfigurasi_model');
		$this->load->model('produk_model');
		$this->load->model('kategori_produk_model');
	}
	
	// Index 
	public function index() {
		$site	= $this->konfigurasi_model->listing();
		$produk	= $this->produk_model->home();
		
		$data	= array( 'title'	=> 'Produk '.$site['namaweb'].' | '.$site['tagline'],
						 'keywords' => 'Produk '.$site['namaweb'].', '.$site['keywords'],
						 'produk'	=> $produk,
						 'isi'		=> 'produk/list');
		$this->load->view('layout/wrapper',$data); 
	}
	
	// Kategori 
	public function kategori($slug_kategori_produk) {
		$site				= $this->konfigurasi_model->listing();
		$kategori			= $this->kategori_produk_model->read($slug_kategori_produk);
		$id_kategori_produk	= $kategori->id_kategori_produk;
		$produk				= $this->produk_model->kategori($id_kategori_produk);
		
		$data	= array( 'title'	=> 'Kategori Produk '.$kategori->nama_kategori_produk,
						 'keywords' => 'Kategori Produk '.$kategori->nama_kategori_produk,
						 'produk'	=> $produk,
						 'isi'		=> 'produk/list');
		$this->load->view('layout/wrapper',$data); 
	}
	
	// Read
	public function read($slug_produk) {
		$site	= $this->konfigurasi_model->listing();
		$produk	= $this->produk_model->home();
		$read	= $this->produk_model->read($slug_produk);
		
		$data	= array( 'title'	=> $read->nama_produk,
						 'keywords' => $read->nama_produk,
						 'produk'	=> $produk,
						 'read'		=> $read,
						 'isi'		=> 'produk/read');
		$this->load->view('layout/wrapper',$data); 
	}
}
		