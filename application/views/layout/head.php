<?php
$site = $this->konfigurasi_model->listing();
?>
<!DOCTYPE html>
<html>
<head>
<title><?php echo $title ?></title>
<link href="<?php echo base_url('assets/upload/image/'.$site['icon']) ?>" rel="shortcut icon">
<link href="<?php echo base_url () ?>assets/front/css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="<?php echo base_url () ?>assets/front/css/style.css" type="text/css" rel="stylesheet" media="all">
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="<?php echo $keywords ?>" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Custom Theme files -->
<!-- js -->
<script src="<?php echo base_url () ?>assets/front/js/jquery-1.11.1.min.js"></script> 
<!-- //js -->	
<!-- start-smoth-scrolling-->
<script type="text/javascript" src="<?php echo base_url () ?>assets/front/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url () ?>assets/front/js/easing.js"></script>	
<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
</script>
<!--//end-smoth-scrolling-->
</head>
<body>
