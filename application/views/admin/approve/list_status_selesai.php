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
        <th>Tanggal Verifikasi</th>
        <th>Nama Verifikator</th>
        <th>Tanggal Approve</th>
        <th>Nama Approvel</th>
        <th>Detail</th>
    </tr>
</thead>
<tbody>
<?php $i=1; foreach($approve as $approve) { ?>
    <tr class="odd gradeX">
        <td><?php echo $i ?></td>
        <td>
            <?php
                $date = date_create($approve->tanggal_permohonan);
                echo date_format($date,"d M Y");  
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
                $date = date_create($approve->tanggal_verifikasi);
                echo date_format($date,"d M Y");  
            ?>
        </td>
        <td>
            <?php echo $approve->nama_verifikator ?>
        </td>
        <td>
            <?php
                $date = date_create($approve->tanggal_proses);
                echo date_format($date,"d M Y");  
            ?>
        </td>
        <td>
            <?php echo $approve->nama_approvel ?>
        </td>
        <td>
            <?php include('detail.php') ?>
        </td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>