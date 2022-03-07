<!--gallery-->
<div class="gallery">		
<div class="container">
<h3 class="title"><?php echo $title ?></h3>
<div class="gallery-grids">	
	
    <?php foreach($produk as $produk) { ?>			
    <div class="col-md-4 port-grids view view-fourth">
        <a href="<?php echo base_url('produk/read/'.$produk->slug_produk) ?>" data-title="<?php echo $produk->nama_produk ?>">
            <img src="<?php echo base_url('assets/upload/image/'.$produk->gambar) ?>" class="img-responsive" alt="<?php echo $produk->nama_produk ?>"/>
            <div class="mask">
                <p><?php echo $produk->nama_produk ?></p>
            </div>
        </a>
    </div>
    <?php } ?>
    <div class="clearfix"> </div>	
    <script src="<?php echo base_url() ?>assets/front/js/lightbox-plus-jquery.min.js"> </script>
</div>				
</div>
</div>	
<!--//gallery-->
<!-- start-smoth-scrolling-->
	<script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/move-top.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ?>assets/front/js/easing.js"></script>
    <script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
	</script>
	

