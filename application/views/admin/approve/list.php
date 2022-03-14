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
        <th>Tanggal Persetujuan PPID</th>
        <th>Nama PPID</th>
        <th>Detail</th>
        <th>Action</th>
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
                echo $approve->tgl_persetujuan_ppid
            ?>
        </td>
        <td>
            <?php echo $approve->nama_petugas_ppid ?>
        </td>
        <td>
            <?php include('detail.php') ?>
        </td>
        <td>
            <!-- jika status terima atau tolak maka button upload file di hidden -->
            <?php if($approve->status_permohonan == 'TOLAK'): ?>
                
            <?php else: ?>
                <button class="myButton-blue" title="Upload File" onclick="location.href='<?php echo base_url('admin/approve/edit/'.$approve->id_pemohon) ?>'">
                    <i class="fa fa-upload"></i>
                </button>
            <?php endif; ?>
            
            <!-- jika status terima atau tolak maka button ajukan di hidden -->
            <?php 
                if($approve->status_permohonan == 'TERIMA'){
                    
                }elseif($approve->status_permohonan == 'TOLAK'){
                    include('tolak.php');
                }else{
                    include('ajukan.php');
                }
                
            ?>
        </td>
    </tr>
<?php $i++; } ?>
</tbody>
</table>