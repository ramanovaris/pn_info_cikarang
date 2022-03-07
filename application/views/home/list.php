<?php
$site	= $this->konfigurasi_model->listing();
include('produk.php');
include('berita.php');
?>

<!--main-->
<div class="main">
<div class="container">
<div class="main-grids">

<?php foreach($video as $video) { ?>
<div class="col-md-6 main-left">
    
   <div class="embed-responsive embed-responsive-4by3">
  <iframe src="https://www.youtube.com/embed/<?php echo $video->video ?>" frameborder="0" allowfullscreen></iframe>
   </div>
    
    <h4 class="text-center"><?php echo $video->judul ?></h4>
   
    <p class="text-center">
    	<a href="<?php echo base_url('video') ?>" class="more btn btn-1 btn-1b"> More video...</a>
    </p>
    
</div>
<?php } ?>

<div class="clearfix"> </div>
</div>			
</div>
</div>
<!--//main-->
	<!--services-->
	<div class="services" id="services">
		<div class="container">
			<h3 class="title">Services Overview</h3>
			<div class="service-grids">
				<div class="col-md-4 srvc-grids-info">
					<div class="srvc-img">
						<span class="glyphicon glyphicon-leaf" aria-hidden="true"></span>
					</div>
					<h5><?php echo $site['pesan_1'] ?></h5>
					<p><?php echo $site['judul_1'] ?></p>
				</div>
				<div class="col-md-4 srvc-grids-info">
					<div class="srvc-img">
						<span class="glyphicon glyphicon-globe" aria-hidden="true"></span>
					</div>
					<h5><?php echo $site['pesan_2'] ?></h5>
					<p><?php echo $site['judul_2'] ?></p>
				</div>
				<div class="col-md-4 srvc-grids-info">
					<div class="srvc-img">
						<span class="glyphicon glyphicon-thumbs-up" aria-hidden="true"></span>
					</div>
					<h5><?php echo $site['pesan_3'] ?></h5>
					<p><?php echo $site['judul_3'] ?></p>
				</div>
				<div class="col-md-4 srvc-grids-info">
					<div class="srvc-img">
						<span class="glyphicon glyphicon-grain" aria-hidden="true"></span>
					</div>
					<h5><?php echo $site['pesan_4'] ?></h5>
					<p><?php echo $site['judul_4'] ?></p>
				</div>
				<div class="col-md-4 srvc-grids-info">
					<div class="srvc-img">
						<span class="glyphicon glyphicon-send" aria-hidden="true"></span>
					</div>
					<h5><?php echo $site['pesan_5'] ?></h5>
					<p><?php echo $site['judul_5'] ?></p>
				</div>
				<div class="col-md-4 srvc-grids-info">
					<div class="srvc-img">
						<span class="glyphicon glyphicon-education" aria-hidden="true"></span>
					</div>
					<h5><?php echo $site['pesan_6'] ?></h5>
					<p><?php echo $site['judul_6'] ?></p>
				</div>
				<div class="clearfix"> </div>				
			</div>
		</div>
	</div>
	<!--//services-->
