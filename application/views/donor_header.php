<!DOCTYPE HTML>
<html>
<head>
<title>O possitive</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content=">Fit Pro Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="<?php echo base_url('assets/css/bootstrap.css'); ?>" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="<?php echo base_url('assets/css/style.css'); ?>" rel='stylesheet' type='text/css' />	
<script src="<?php echo base_url('assets/js/jquery.min.js'); ?>"> </script>
<!--webfonts-->
 <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700|Orbitron:400,500,700,900') rel='stylesheet' type='text/css'>
<!--//webfonts-->
<!--Animation-->
<script src="<?php echo base_url('assets/js/wow.min.js'); ?>"></script>
<link href="<?php echo base_url('assets/css/animate.css'); ?>" rel='stylesheet' type='text/css' />
<script>
	new WOW().init();
</script>


</head>
<body>
	<!----- start-header---->
	<div class="banner" id="home">
			<div class="header-bottom">
			 <div class="fixed-header">
				<div class="container">
					<div class="logo">
						<img src="<?php echo base_url('assets/images/logo.png'); ?>" class="img-responsive" alt="" />
					</div>
					<span class="menu"> </span>
					<div class="top-menu">
					<nav class="navigation">
						<ul class="cl-effect-16">
							<li><a href="<?php echo base_url();?>index.php/Home">Log Out</a></li>
						<ul>
					</nav>		
					</div>
				<!-- script for menu -->
						<script>
						$( "span.menu" ).click(function() {
						  $( ".top-menu" ).slideToggle( "slow", function() {
							// Animation complete.
						  });
						});
					</script>
					<!-- script for menu -->
					<script>
				$(document).ready(function() {
					 var navoffeset=$(".header-bottom").offset().top;
					 $(window).scroll(function(){
						var scrollpos=$(window).scrollTop(); 
						if(scrollpos >=navoffeset){
							$(".header-bottom").addClass("fixed");
						}else{
							$(".header-bottom").removeClass("fixed");
						}
					 });
					 
				});
				</script>
					<div class="clearfix"></div>
				</div>
			 </div>
		</div>