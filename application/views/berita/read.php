	<!--about-->
	<div class="about"> 
		<div class="container">
			<h3 class="title"><?php echo $title ?></h3>
			<div class="about-text">
				<?php if($read->gambar == '' OR $read->gambar == null){?>
					<div class="col-md-12 about-text-right">                    
						<?php echo $read->keterangan ?>
					</div>
				<?php }else{?>
						<div class="col-md-6 about-text-left">                    
							<img src="<?php echo base_url('assets/upload/image/'.$read->gambar) ?>" class="img-responsive" alt="<?php echo $title ?>"/>
						</div>	
						<div class="col-md-6 about-text-right">                    
							<?php echo $read->keterangan ?>
						</div>
				<?php }?>
				
				<div class="clearfix"> </div>
			</div>
		</div>
</div>