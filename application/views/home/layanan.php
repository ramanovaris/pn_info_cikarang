<!--baner-->
<!-- <div class="baner about-bnr">
	<div class="container">
		<div class="baner-grids">
			<div class="col-md-6 baner-top">
				<img src="<?php echo base_url() ?>assets/front/images/img16.jpg" alt=""/>
			</div>
			<div class="col-md-6 baner-top">
				<img src="<?php echo base_url() ?>assets/front/images/img17.jpg" alt=""/>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div> -->
	<!--//baner-->
  
	<!--map-->
	<!-- <div class="map">
		<?php echo $site['google_map'] ?>
	</div> -->
	<!--//map-->

	<!--contact-->
	<div class="contact">
		<div class="container">
			<h3 class="title">Permohonan Informasi</h3>
			<div class="contact-form">

        <?php
        echo validation_errors('<div class="alert alert-warning">','</div>');

        // Notifikasi
        if($this->session->flashdata('sukses')) {
          echo '<div class="alert alert-success">';
          echo $this->session->flashdata('sukses');
          echo '</div>';
        }

        ?>

        <form method="post" action="<?php echo base_url('layanan/tambah') ?>">
            <div class="col-md-12 cnt-inpt">
              <label>Tanggal Pemberitahuan : </label>
              <input type="date" id="tgl_pemberitahuan" name="tgl_pemberitahuan" placeholder="Tgl" required>
            </div>

        
          <div class="col-md-12 cnt-inpt">
            <label>Nama Lengkap : </label>
            <input type="text" name="nama" value="<?php echo set_value('nama') ?>" placeholder="Nama" required
            >
          </div>

          <div class="col-md-12 cnt-inpt">
            <label>Alamat : </label>
            <textarea name="alamat" placeholder="Alamat" required><?php echo set_value('alamat') ?></textarea>
          </div>

          <div class="col-md-12 cnt-inpt">
            <label>Pekerjaan : </label>
              <input type="text" name="pekerjaan" value="<?php echo set_value('pekerjaan') ?>" placeholder="Pekerjaan" required
              >
          </div>

            <div class="col-md-6 cnt-inpt">
              <label>Email : </label>
              <input type="email" name="email" value="<?php echo set_value('email') ?>" placeholder="Email" required>
            </div>

            <div class="col-md-6 cnt-inpt">
              <label>No. Telp : </label>
                <input type="text" name="telepon" value="<?php echo set_value('telepon') ?>" placeholder="Telepon/HP" required>
            </div>

            <div class="col-md-12 cnt-inpt">
              <label>Rincian Informasi yang dibutuhkan : </label>
                <textarea name="rincian_informasi" placeholder="Rincian Informasi yang dibutuhkan" required><?php echo set_value('rincian_informasi') ?></textarea>
            </div>

            <div class="col-md-12 cnt-inpt">
              <label>Tujuan Penggunaan Informasi : </label>
              <input type="text" name="tujuan" value="<?php echo set_value('tujuan') ?>" placeholder="Tujuan" required
              >
            </div>

            <div class="col-md-12 cnt-inpt">
              <label>Cara memperoleh informasi : </label>
              
                <input type="radio" id="melihat" name="cara_peroleh_info" value="Melihat" required>
                <label for="melihat" class="label-radio-button">Melihat</label>
                <input type="radio" id="membaca" name="cara_peroleh_info" value="Membaca" required>
                <label for="membaca" class="label-radio-button">Membaca</label>
                <input type="radio" id="mendengarkan" name="cara_peroleh_info" value="Mendengarkan" required>
                <label for="mendengarkan" class="label-radio-button">Mendengarkan</label>
            </div>

            <div class="col-md-12 cnt-inpt">
              <label>Mendapatkan salinan informasi : </label>
              
                <input type="radio" id="Softcopy" name="salinan" value="Softcopy" required>
                <label for="Softcopy" class="label-radio-button">Softcopy</label>
                <input type="radio" id="Hardcopy" name="salinan" value="Hardcopy" required>
                <label for="Hardcopy" class="label-radio-button">Hardcopy</label>
            </div>

            <div class="col-md-12 cnt-inpt">
              <label>Cara mendapatkan informasi : </label>
              
                <input type="radio" id="Langsung" name="via" value="Langsung" required>
                <label for="Langsung" class="label-radio-button">Mengambil Langsung</label>
                <input type="radio" id="Email" name="via" value="Email" required>
                <label for="Email" class="label-radio-button">Email</label>
            </div>

						
            
            <div class="clearfix"> </div>
            
            <input type="submit" value="Submit">
        </form>
			</div>			
		</div>
	</div>
	<!--//contact-->	
