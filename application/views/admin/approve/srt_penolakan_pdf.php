<?php
$site = $this->konfigurasi_model->listing();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title;?></title>
        <style type="text/css">
            /* @page {
                size: 7in 9.25in;
                margin: 27mm 16mm 27mm 16mm;
            } */

            body {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                height: 842px;
                width: 595px;
                /* to centre page on screen*/
                margin-left: auto;
                margin-right: auto;
            }

            #table {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #table td, #table th {
                /* border: 1px solid #ddd; */
                padding: 8px;
            }

            /* #table tr:nth-child(even){background-color: #f2f2f2;} */

            /* #table tr:hover {background-color: #ddd;} */

            #table th {
                padding-top: 10px;
                padding-bottom: 10px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }

            .rangkasurat{
                width: 100%;
                margin: 0 auto;
                background-color: #fff;
                height: 500px;
                /* padding: 20px; */
            }
            .tengah{
                text-align: center;
                line-height: 5px;
            }
            .kiri{
                text-align: left;
                line-height: 5px;
            }
        </style>
    </head>
    <body>
        <div class="rangkasurat">
            <table id="table" style="border-bottom: 5px solid #000;">
                <tr>
                    <td><img src="<?php echo base_url('assets/upload/image/'.$site['icon']) ?>" width="100" height="100"></td>
                    <td class="tengah">
                        <h2>PEMERINTAH CIKARANG</h2>
                        <h4>PENGADILAN NEGERI CIKARANG</h4>
                        <b>Jalan Peteran Telp.(09833) 39444 Cikarang 49545</b>
                    </td>
                </tr>
            </table>
            <div style="text-align:center">
                <h5> SURAT KEPUTUSAN PPID TENTANG PENOLAKAN PERMOHONAN INFORMASI </h5>
                <?php foreach($approve as $data) { ?>
                    <h5><?php echo 'No. Pendaftaran: '.$data->kode_pemohon ?></h5>
                <?php } ?>

                <table id="table">
                    <tbody>
                    <?php $i=1; foreach($approve as $approve) { ?>
                        <tr>
                            <td>Nama</td>
                            <td>:</td>
                            <td>
                                <?php
                                    echo $approve->nama_pemohon
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td>:</td>
                            <td>
                                <?php
                                    echo $approve->alamat
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>No. Telp/Email</td>
                            <td>:</td>
                            <td>
                                <?php
                                    echo $approve->no_telpon.' / '.$approve->email
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>Rincian Informasi yang dibutuhkan</td>
                            <td>:</td>
                            <td>
                                <?php
                                    echo $approve->rincian_informasi
                                ?>
                            </td>
                        </tr>
                    <?php $i++; } ?>
                    </tbody>
                </table>

                <p class="kiri">PPID memutuskan bahwa Informasi yang dimohon adalah:</p>
                <p style="padding: 10px;border: 2px solid;margin: 0; text-align: center;"><b>INFORMASI YANG DIKECUALIKAN</b></p>
                
                <!-- <table id="table" style="border-bottom: 5px solid #000;">
                    <tr>
                        <td><img src="<?php echo base_url('assets/upload/image/'.$site['icon']) ?>" width="100" height="100"></td>
                        <td class="tengah">
                            <h2>PEMERINTAH CIKARANG</h2>
                            <h4>PENGADILAN NEGERI CIKARANG</h4>
                            <b>Jalan Peteran Telp.(09833) 39444 Cikarang 49545</b>
                        </td>
                    </tr>
                </table> -->
            </div>
        </div>
    </body>
</html>