<button class="myButton-green" data-toggle="modal" data-target="#Terima<?php echo $verifikasi->id_pemohon ?>">
    <span class="glyphicon glyphicon-ok"></span>
</button>

<div class="modal fade" id="Terima<?php echo $verifikasi->id_pemohon ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Terima Permohonan</h4>
            </div>
            <div class="modal-body">

			<p class="alert alert-success">Yakin ingin Terima Pengajuan <b><?php echo $verifikasi->kode_pemohon ?></b>?</p>

            </div>
            <div class="modal-footer">
                <button type="button" onclick="location.href='<?php echo base_url('admin/verifikasi/terima/'.$verifikasi->id_pemohon) ?>'" class="myButton-green" data-dismiss="modal"><span class="glyphicon glyphicon-ok"></span> Ya, Terima</button>
                <button type="button" class="myButton-blue" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
