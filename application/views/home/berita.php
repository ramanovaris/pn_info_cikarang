<!-- news -->
<div class="news-info">
<div class="container">		
<h3 class="title">Our News</h3>
</div>
</div>
<!-- container -->
<div class="container">				
<div class="news">	
<div class="news-grids">
	<?php foreach($berita as $berita) { ?>
    <div class="col-md-4 news-grid">
    
    	<a href="<?php echo base_url('berita/read/'.$berita->slug_berita) ?>">
        
        <div class="news-grid-left news-grid-left-img" style="background: url(<?php echo base_url('assets/upload/image/'.$berita->gambar) ?>) no-repeat 0px 0px; background-position: center center;">
            <h6><?php echo date('d M Y',strtotime($berita->tanggal)) ?></h6>
        </div>
        
        </a>
        
        <div class="news-grid-left-info">
            <h5><a href="<?php echo base_url('berita/read/'.$berita->slug_berita) ?>"><?php echo $berita->nama_berita ?></a></h5>
            <?php echo character_limiter($berita->keterangan,150) ?>
            <div class="clearfix"></div><hr>
        </div>
    </div>
    <?php } ?>
    <div class="clearfix"> </div>
</div>
</div><!-- //container -->	
</div>
<!-- //news -->