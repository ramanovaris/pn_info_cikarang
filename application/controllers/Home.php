<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('konfigurasi_model');
		$this->load->model('produk_model');
		$this->load->model('berita_model');
		$this->load->model('video_model');
	}
	
	// Index 
	public function index() {
		$site	= $this->konfigurasi_model->listing();
		$produk	= $this->produk_model->home();
		$berita	= $this->berita_model->home();
		$video	= $this->video_model->home();
		
		$data	= array( 'title'	=> $site['namaweb'].' | '.$site['tagline'],
						 'keywords' => $site['namaweb'].', '.$site['keywords'],
						 'produk'	=> $produk,
						 'berita'	=> $berita,
						 'video'	=> $video,
						 'isi'		=> 'home/list');
		$this->load->view('layout/wrapper',$data); 
	}
}
		