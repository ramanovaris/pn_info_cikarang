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
        <th>Tujuan</th>
        <th>Tanggal Kirim Surat Penolakan</th>
        <th>Nama Pengolah Data</th>
        <th>Detail</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($approve as $approve) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
        <td>
            <?php
                echo $approve->tanggal_permohonan
            ?>
        </td>
        <td>
            <?php echo $approve->kode_pemohon ?></td>
        </td>
        <td>
            <?php echo $approve->nama_pemohon ?>
        </td>
        <td>
            <?php echo $approve->tujuan ?>
        </td>
        <td>
            <?php
                echo $approve->tanggal_proses
            ?>
        </td>
        <td>
            <?php echo $approve->nama_pengolah_data ?>
        </td>
        <td>
            <?php include('detail.php') ?>
        </td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>