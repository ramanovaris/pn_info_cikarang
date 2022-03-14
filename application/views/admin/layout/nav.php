<nav class="navbar-default navbar-side" role="navigation">
<div class="sidebar-collapse">
<ul class="nav" id="main-menu">
    
    <!-- Dasbor --> 
    <li><a href="<?php echo base_url('admin/dasbor') ?>"><i class="fa fa-dashboard"></i> Dasbor</a></li>

    <!-- Data Verfikasi -->     
    <?php if($this->session->userdata('akses_level') == 'Verifikator' || $this->session->userdata('akses_level') == 'Super Admin') {?>          
        <li><a href="<?php echo base_url('admin/verifikasi')?>"><i class="fa fa-newspaper-o"></i>Data Verifikasi</a></li> 
    <?php } ?>

    <!-- Data Olah Informasi -->     
    <?php if($this->session->userdata('akses_level') == 'PTSP' || $this->session->userdata('akses_level') == 'Super Admin') {?>      
        <li><a href="<?php echo base_url('admin/approve')?>"><i class="fa fa-newspaper-o"></i>Data Pengolah Informasi</a></li> 
    <?php } ?>

    <!-- Data Riwayat -->           
    <li><a href="#"><i class="fa fa-newspaper-o"></i> Riwayat Permohonan Informasi<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url('admin/approve/selesai')?>">Data Pengajuan Permohonan Informasi yang Terkirim</a></li> 
            <li><a href="<?php echo base_url('admin/approve/tolak')?>">Data Pengajuan Permohonan Informasi yang Ditolak</a></li> 
        </ul>
    </li> 

    <!-- Data Riwayat Kirim Informasi -->     
    <!-- <?php if($this->session->userdata('akses_level') == 'PTSP' || $this->session->userdata('akses_level') == 'Super Admin') {?>      
        <li><a href="<?php echo base_url('admin/approve/selesai')?>"><i class="fa fa-newspaper-o"></i>Data Riwayat Kirim Informasi</a></li> 
    <?php } ?> -->

    <!-- Data Permohonan Ditolak -->     
    <!-- <?php if($this->session->userdata('akses_level') == 'PTSP' || $this->session->userdata('akses_level') == 'Super Admin') {?>      
        <li><a href="<?php echo base_url('admin/approve/tolak')?>"><i class="fa fa-newspaper-o"></i>Data Permohonan Ditolak</a></li> 
    <?php } ?> -->

    <!-- Berita -->           
    <li><a href="#"><i class="fa fa-newspaper-o"></i> Berita<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url('admin/berita')?>">Data Berita</a></li>
            <li><a href="<?php echo base_url('admin/berita/tambah')?>">Tambah Berita</a></li>
            <li><a href="<?php echo base_url('admin/kategori_berita')?>">Kategori Berita</a></li>
        </ul>
    </li> 

    <!-- Modul User -->
    <?php if($this->session->userdata('akses_level') == 'Super Admin') {?>
        <li><a href="#"><i class="fa fa-users"></i> User/Administrator<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="<?php echo base_url('admin/user')?>">Data User/Administrator</a></li>
                <li><a href="<?php echo base_url('admin/user/tambah')?>">Tambah User/Admin</a></li>
            </ul>
        </li> 
    <?php } ?>
    
    <!-- Modul Konfigurasi -->
    <?php if($this->session->userdata('akses_level') == 'Super Admin') {?>
        <li><a href="#"><i class="fa fa-wrench"></i> Konfigurasi Website<span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
                <li><a href="<?php echo base_url('admin/dasbor/konfigurasi')?>">Konfigurasi Umum</a></li>
                <li><a href="<?php echo base_url('admin/dasbor/logo')?>">Ganti Logo</a></li>
                <li><a href="<?php echo base_url('admin/dasbor/icon')?>">Ganti Icon</a></li>
                <li><a href="<?php echo base_url('admin/dasbor/quote')?>">Quote</a></li>
            </ul>
        </li> 
    <?php } ?> 
    
    <!-- Produk -->           
   <!-- <li><a href="#"><i class="fa fa-book"></i> Produk<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url('admin/produk')?>">Data Produk</a></li>
            <li><a href="<?php echo base_url('admin/produk/tambah')?>">Tambah Produk</a></li>
            <li><a href="<?php echo base_url('admin/kategori_produk')?>">Kategori Produk</a></li>
        </ul>
    </li>  -->
    
    <!-- Modul Video -->
    <!-- <li><a href="#"><i class="fa fa-film"></i> Video<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
            <li><a href="<?php echo base_url('admin/video')?>">Data Video</a></li>
            <li><a href="<?php echo base_url('admin/video/tambah')?>">Tambah Video</a></li>
        </ul>
    </li>  -->
</ul>

</div>

</nav>  
<!-- /. NAV SIDE  -->
<div id="page-wrapper" >
<div id="page-inner">
<div class="row">
    <div class="col-md-12">
     <h2><?php echo $title?></h2>         
    </div>
</div>
 <!-- /. ROW  -->
 <hr />

<div class="row">
<div class="col-md-12">
    <!-- Advanced Tables -->
    <div class="panel panel-default">
            <div class="panel-body">
            <div class="table-responsive">
