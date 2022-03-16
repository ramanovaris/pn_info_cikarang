<?php
$site = $this->konfigurasi_model->listing();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title;?></title>
        <style>
            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #table td, #table th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #table tr:nth-child(even){background-color: #f2f2f2;}

            #table tr:hover {background-color: #ddd;}

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }
        </style>
    </head>
    <body>
        <img src="<?php echo base_url('assets/upload/image/'.$site['icon']) ?>">
        <div style="text-align:center">
            <h4> SURAT KEPUTUSAN PPID TENTANG PENOLAKAN PERMOHONAN INFORMASI </h4>
            <?php foreach($approve as $data) { ?>
                <h5><?php echo 'No. Pendaftaran: '.$data->kode_pemohon ?></h5>
            <?php } ?>
        </div>
        <table id="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Tanggal Permohonan</th>
                    <th>Kode Pendaftaran</th>
                    <th>Nama Pemohon</th>
                    <th>Tujuan</th>
                </tr>
            </thead>
            <tbody>
                <?php $i=1; foreach($approve as $approve) { ?>
                <tr>
                    <td scope="row">
                        <?php echo $i ?>
                    </td>
                    <td>
                        <?php
                            echo $approve->tanggal_permohonan
                        ?>
                    </td>
                    <td><?php echo $approve->kode_pemohon ?></td>
                    <td><?php echo $approve->nama_pemohon ?></td>
                    <td><?php echo $approve->tujuan ?></td>
                </tr>
                <?php $i++; } ?>
            </tbody>
        </table>
    </body>
</html>