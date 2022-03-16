<script src="<?php echo base_url() ?>assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    file_browser_callback: function(field, url, type, win) {
        tinyMCE.activeEditor.windowManager.open({
            file: '<?php echo base_url() ?>assets/kcfinder/browse.php?opener=tinymce4&field=' + field + '&type=' + type,
            title: 'KCFinder',
            width: 700,
            height: 500,
            inline: true,
            close_previous: false
        }, {
            window: win,
            input: field
        });
        return false;
    },
    selector: "#keterangan",
    height: 150,
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
});
</script> 

<button class="myButton-red" title="Kirim Surat Penolakan" data-toggle="modal" data-target="#Kirimtolak<?php echo $approve->id_pemohon ?>">
    <span class="glyphicon glyphicon-send"></span>
</button>
<div class="modal fade" id="Kirimtolak<?php echo $approve->id_pemohon ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Kirim Surat Penolakan</h4>
            </div>
            <div class="modal-body">
                <p class="alert alert-danger">Yakin ingin Tolak Pengajuan <b><?php echo $approve->kode_pemohon ?></b>?</p>
                
                <?php
                    // Error
                    if(isset($error)) {
                        echo '<div class="alert alert-warning">';
                        echo $error;
                        echo '</div>';
                    }

                    // Validasi
                    echo validation_errors('<div class="alert alert-success">','</div>');

                    // Form
                    echo form_open_multipart('admin/approve/kirim_srt_penolakan/'.$approve->id_pemohon);
                ?>
            
                <div class="form-group">
                    <p><label style="font-size: 12px;">Pengecualian Informasi berdasarakan pada alasan : </label></p>
                    <input type="text" name="pasal_1_tolak" placeholder="Pasal" value="<?php echo set_value('pasal_1') ?>" required class="form-control">
                    <input type="text" name="pasal_2_tolak" placeholder="Pasal" value="<?php echo set_value('pasal_2') ?>" class="form-control">
                </div>

                <div class="form-group">
                    <p><label style="font-size: 12px;">Konsekuensi : </label></p>
                    <textarea id="konsekuensi_tolak" name="konsekuensi_tolak" placeholder="Konsekuensi" value="<?php echo set_value('konsekuensi_tolak') ?>" rows="4" cols="85"></textarea>
                </div>

                <div class="form-group">
                    <p><label style="font-size: 12px;">Pemohon informasi dapat mengajukan keberatan kepada atasan PPID yaitu : </label></p>
                    <input type="text" name="atasan_PPID_tolak" placeholder="Nama Atasan PPID" value="<?php echo set_value('atasan_PPID_tolak') ?>" required class="form-control">
                </div>
            </div>
            <div class="modal-footer">
                <!-- <button type="button" onclick="location.href='<?php echo base_url('admin/approve/kirim_srt_penolakan/'.$approve->id_pemohon) ?>'" class="myButton-red" data-dismiss="modal">
                    <span class="glyphicon glyphicon-remove"></span> Ya, Tolak
                </button> -->
                <!-- <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary btn-lg"> -->
                <button type="submit" class="myButton-red">
                    <span class="glyphicon glyphicon-remove"></span> Ya, Tolak
                </button>
                <button type="button" class="myButton-blue" data-dismiss="modal">Close</button>
            </div>
            <?php echo form_close() ?>
        </div>
    </div>
</div>
