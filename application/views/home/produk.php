<!--baner-->
<div class="baner">
<div class="container">
<div class="baner-grids">
    
    <div class="baner-row">
    <?php foreach($produk as $produk) { ?>
        <div class="col-md-4 baner-bottom">
        
        	<a href="<?php echo base_url('produk/read/'.$produk->slug_produk) ?>">
           
            <figure class="effect-bubba">
                <img src="<?php echo base_url('assets/upload/image/'.$produk->gambar) ?>" alt="<?php echo $produk->nama_produk ?>"/>
                <figcaption>
                    <h4><?php echo $produk->nama_produk ?></h4>
                    <p>Rp. <?php echo number_format($produk->harga,'0',',','.').'/'.$produk->satuan ?></p>	
                </figcaption>			
            </figure>	
            
            </a>
            
        </div>
      <?php } ?> 
        <div class="clearfix"> </div>
    </div>				
</div>
</div>
</div>
<!--//baner-->