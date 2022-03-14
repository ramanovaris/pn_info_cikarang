<button class="myButton-yellow" data-toggle="modal" data-target="#Detail<?php echo $verifikasi->id_pemohon ?>">
    <span class="glyphicon glyphicon-eye-open"></span>
</button>

<div class="modal fade" id="Detail<?php echo $verifikasi->id_pemohon ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Detail Permohonan Informasi</h4>
            </div>
            <div class="modal-body">
                <table width="100%" style="font-size:12px">
                    <tr>
                        <td>Tanggal Permohonan</td>
                        <td>: </td>
                        <td>
                            <?php
                                echo $verifikasi->tanggal_permohonan
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Kode Pendaftaran</td>
                        <td>:</td>
                        <td><?php echo $verifikasi->kode_pemohon ?></td>
                    </tr>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><?php echo $verifikasi->nama_pemohon ?></td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><?php echo $verifikasi->alamat ?></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td><?php echo $verifikasi->pekerjaan ?></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><?php echo $verifikasi->email ?></td>
                    </tr>
                    <tr>
                        <td>No. Telpon</td>
                        <td>:</td>
                        <td><?php echo $verifikasi->no_telpon ?></td>
                    </tr> 
                    <tr>
                        <td>Rincian Informasi yang dibutuhkan</td>
                        <td>:</td>
                        <td><?php echo $verifikasi->rincian_informasi ?></td>
                    </tr> 
                    <tr>
                        <td>Tujuan Penggunaan Informasi</td>
                        <td>:</td>
                        <td><?php echo $verifikasi->tujuan ?></td>
                    </tr> 
                    <tr>
                        <td>Cara memperoleh informasi</td>
                        <td>:</td>
                        <td><?php echo $verifikasi->cara_peroleh_info ?></td>
                    </tr> 
                    <tr>
                        <td>Mendapatkan salinan informasi</td>
                        <td>:</td>
                        <td><?php echo $verifikasi->salinan ?></td>
                    </tr> 
                    <tr>
                        <td>Cara mendapatkan informasi</td>
                        <td>:</td>
                        <td><?php echo $verifikasi->via ?></td>
                    </tr> 
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>