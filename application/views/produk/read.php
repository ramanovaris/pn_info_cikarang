	<!--about-->
	<div class="about"> 
		<div class="container">
			<h3 class="title"><?php echo $title ?></h3>
			<div class="about-text">
				<div class="col-md-6 about-text-left">
					<img src="<?php echo base_url('assets/upload/image/'.$read->gambar) ?>" class="img-responsive" alt="<?php echo $title ?>"/>
				</div>
				<div class="col-md-6 about-text-right">
					<h4><?php echo $title ?></h4>
<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-bordered">
  <tr>
    <td>Harga</td>
    <td>: Rp. <?php echo number_format($read->harga,'0',',','.') ?></td>
  </tr>
  <tr>
    <td>Kategori produk</td>
    <td>: <?php echo $read->nama_kategori_produk ?></td>
  </tr>
  <tr>
    <td>Stok</td>
    <td>: <?php echo $read->stok ?></td>
  </tr>
  <tr>
    <td>Keterangan</td>
    <td>: <?php echo $read->keterangan ?></td>
  </tr>
</table>

				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
</div>