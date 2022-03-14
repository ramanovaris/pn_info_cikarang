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


<button class="myButton-red" data-toggle="modal" data-target="#Delete<?php echo $verifikasi->id_pemohon ?>">
    <span class="glyphicon glyphicon-remove"></span>
</button>
<div class="modal fade" id="Delete<?php echo $verifikasi->id_pemohon ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Tolak Permohonan</h4>
            </div>
            <div class="modal-body">
                <p class="alert alert-danger">Yakin ingin Tolak Pengajuan <b><?php echo $verifikasi->kode_pemohon ?></b>?</p>
                <!-- <?php
                    // Error
                    if(isset($error)) {
                        echo '<div class="alert alert-warning">';
                        echo $error;
                        echo '</div>';
                    }

                    // Validasi
                    echo validation_errors('<div class="alert alert-success">','</div>');

                    // Form
                    echo form_open_multipart('admin/verifikasi/tolak');
                ?> -->
            
                
                <!-- <div class="form-group form-group-sm">
                    <p><label>Pengecualaian Informasi berdasarakan pada alasan : </label></p>
                    <input type="text" name="nama_berita" placeholder="Nama berita" value="<?php echo set_value('nama_berita') ?>" required class="form-control">
                    <input type="text" name="nama_berita" placeholder="Nama berita" value="<?php echo set_value('nama_berita') ?>" required class="form-control">
                </div> -->

                <!-- <div class="col-md-4">
                    <div class="form-group form-group-lg">
                    <label>Status Berita</label>
                    <select name="status_berita" class="form-control">
                        <option value="Publish">Publikasikan</option>
                        <option value="Draft">Simpan sebagai Draft</option>
                    </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Kategori Berita</label>
                        <select name="id_kategori_berita" class="form-control">
                            <?php foreach($kategori as $kategori) { ?>
                                <option value="<?php echo $kategori->id_kategori_berita ?>">
                                <?php echo $kategori->nama_kategori_berita ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                    <label>Jenis Berita</label>
                    <select name="jenis_berita" class="form-control">
                        <option value="Berita">Berita</option>
                        <option value="Profil">Profil perusahaan</option>
                    </select>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <label>Upload gambar</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea name="keterangan" class="form-control" placeholder="Keterangan" id="keterangan"><?php echo set_value('keterangan') ?></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" value="Simpan Data" class="btn btn-primary btn-lg">
                        <input type="reset" name="reset" value="Reset" class="btn btn-default btn-lg">
                    </div>
                </div> -->
                <!-- <?php echo form_close() ?> -->
                
            </div>
            <div class="modal-footer">
                <button type="button" onclick="location.href='<?php echo base_url('admin/verifikasi/tolak/'.$verifikasi->id_pemohon) ?>'" class="myButton-red" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Ya, Tolak</button>
                <button type="button" class="myButton-blue" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
