<button class="myButton-green" title="Minta Verifikasi ke PPID" data-toggle="modal" data-target="#Ajukan<?php echo $approve->id_pemohon ?>">
    <span class="glyphicon glyphicon-send"></span>
</button>

<div class="modal fade" id="Ajukan<?php echo $approve->id_pemohon ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Ajukan ke PPID</h4>
            </div>
            <div class="modal-body">

			<p class="alert alert-success">Yakin ingin minta verifikasi ke Petugas PPID dengan kode pendaftaran <b><?php echo $approve->kode_pemohon ?></b>?</p>

            </div>
            <div class="modal-footer">
                <button type="button" onclick="location.href='<?php echo base_url('admin/approve/ajukan/'.$approve->id_pemohon) ?>'" class="myButton-green" data-dismiss="modal"><span class="glyphicon glyphicon-ok"></span> Ya, Terima</button>
                <button type="button" class="myButton-blue" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
