<!-- <p>
<a href="<?php echo base_url('admin/berita/tambah') ?>" class="btn btn-primary">
<i class="fa fa-plus"></i> Tambah Berita</a>
</p> -->

<?php
// Notifikasi
if($this->session->flashdata('sukses')) {
	echo '<div class="alert alert-success">';
	echo $this->session->flashdata('sukses');
	echo '</div>';
}

// Error
echo validation_errors('<div class="alert alert-success">','</div>');
?>

<table class="table table-striped table-bordered table-hover" style="font-size:12px" id="dataTables-example">
<thead>
    <tr>
        <th>#</th>
        <th>Tanggal Permohonan</th>
        <th>Kode Pendaftaran</th>
        <th>Nama Pemohon</th>
        <th>Tanggal Ajukan Persetujuan</th>
        <th>Nama Ajukan Persetujuan</th>
        <th>Detail</th>
        <th>Action</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($verifikasi as $verifikasi) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
        <td>
            <?php
                echo $verifikasi->tanggal_permohonan
            ?>
        </td>
        <td>
            <?php echo $verifikasi->kode_pemohon ?></td>
        </td>
        <td>
            <?php echo $verifikasi->nama_pemohon ?>
        </td>
        <td>
            <?php
                echo $verifikasi->tgl_ajukan
            ?>
        </td>
        <td>
            <?php echo $verifikasi->nama_ajukan ?>
        </td>
        <td>
            <?php include('detail.php') ?>
        </td>
        <td>
            <?php include('terima.php') ?>
            <?php include('tolak.php') ?>
        </td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>