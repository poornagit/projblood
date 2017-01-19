
			<div class="slider">
				 <div id="cbp-fwslider" class="cbp-fwslider">
					<ul>
						<li><a href="#"><img src="<?php echo base_url('assets/images/slide3.jpg'); ?>" alt="img01"/></a></li>
						<li><a href="#"><img src="<?php echo base_url('assets/images/slide2.png'); ?>" alt="img02"/></a></li>
						<li><a href="#"><img src="<?php echo base_url('assets/images/slide3.png'); ?>" alt="img03"/></a></li>
						<li><a href="#"><img src="<?php echo base_url('assets/images/slide2.png'); ?>" alt="img04"/></a></li>
						<li><a href="#"><img src="<?php echo base_url('assets/images/slide4.png'); ?>" alt="img05"/></a></li>
					</ul>
				</div>
			</div>
		</div>
		<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/component.css'); ?>" />
		<script src="<?php echo base_url('assets/js/modernizr.custom.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/jquery.cbpFWSlider.min.js'); ?>"></script>
		<script>
			$( function() {
				/*
				- how to call the plugin:
				$( selector ).cbpFWSlider( [options] );
				- options:
				{
					// default transition speed (ms)
					speed : 500,
					// default transition easing
					easing : 'ease'
				}
				- destroy:
				$( selector ).cbpFWSlider( 'destroy' );
				*/

				$( '#cbp-fwslider' ).cbpFWSlider();

			} );
		</script>
		<!--start-slide-bottom-->
		<div class="banner-bottom wow bounceIn animated" data-wow-delay="0.4s">
			<div class="container">
			    <h2>ABOUT</h2>
				<p>Dolor nunc vule putateulr ips dol consec.Donec sem ertet laciniate ultricie upie disse utes comete dolo lectus. fgilla itollicil tua ludin dolor nec met quam accumsan. Dolore condime netus lullam utlacus adipiscing ipsum molestie euismod lore estibulum vel libero ipsum sit
				amet sollicitudin ante. Aenean imperdiet aliquet hendreritunc interdum ullamcorper lec tuset pellentesqu enim interdum atuspendisse malesuada dignissim.</p>
			 </div>
		</div>
		<!--tainers-section-->
				  <div class="tainers-section">
	 				 <div class="container">
						<!--sreen-gallery-cursual-->
						<div class="col-md-3 tainer wow bounceInLeft" data-wow-delay="0.4s">
						      <h3>Our Trainers</h3>
							  <p>Why not give one of these popular classes a look?</p>
						</div>
						<div class="col-md-9 sreen-gallery-cursual wow bounceInRight" data-wow-delay="0.4s">
							<!-- start content_slider -->
						       <div id="owl-demo" class="owl-carousel">
					                <div class="item">
					                	<div class="item-grid">
					                		<div class="item-pic">
					                			<img src="<?php echo base_url('assets/images/t1.jpg'); ?>" />
					                		</div>
					                	</div>
					                </div>
					                <div class="item">
					                	<div class="item-grid">
					                		<div class="item-pic">
					                			<img src="<?php echo base_url('assets/images/t2.jpg'); ?>" />
                                               </div>
					                		</div>
					                </div>
					                 <div class="item">
					                	<div class="item-grid">
					                		<div class="item-pic">
					                			<img src="<?php echo base_url('assets/images/t3.jpg'); ?>" />
                                               </div>
					                		</div>
					                	</div>
					               <div class="item">
					                	<div class="item-grid">
					                		<div class="item-pic">
					                			<img src="<?php echo base_url('assets/images/t1.jpg'); ?>" />
                                               </div>
					                		</div>
					                	</div>
					                 <div class="item">
					                	<div class="item-grid">
					                		<div class="item-pic">
					                			<img src="<?php echo base_url('assets/images/t2.jpg'); ?>" />
                                               </div>
					                		</div>
					                	</div>
					                 <div class="item">
					                	<div class="item-grid">
					                		<div class="item-pic">
					                			<img src="<?php echo base_url('assets/images/t3.jpg'); ?>" />
                                               </div>
					                		</div>
					                	</div>
					               <div class="item">
					                	<div class="item-grid">
					                		<div class="item-pic">
					                			<img src="<?php echo base_url('assets/images/t1.jpg'); ?>" />
                                               </div>
					                		</div>
					                	</div>
					                 <div class="item">
					                	<div class="item-grid">
					                		<div class="item-pic">
					                			<img src="<?php echo base_url('assets/images/t2.jpg'); ?>" />
                                               </div>
					                		</div>
					                	</div>
					                	 <div class="item">
					                	<div class="item-grid">
					                		<div class="item-pic">
					                			<img src="<?php echo base_url('assets/images/t3.jpg'); ?>" />
                                               </div>
					                		</div>
					                	</div>
					                </div>
				              </div>
							  <div class="clearfix"></div>
						<!--//sreen-gallery-cursual-->
					</div>
				</div>
				<!-- requried-jsfiles-for owl -->
							<link href="<?php echo base_url('assets/css/owl.carousel.css'); ?>" rel="stylesheet">
							    <script src="<?php echo base_url('assets/js/owl.carousel.js'); ?>"></script>
							        <script>
							    $(document).ready(function() {
							      $("#owl-demo").owlCarousel({
							         items :3,
							        lazyLoad : true,
							        autoPlay : true,
							        navigation :true,
							        navigationText :  false,
							        pagination : false,
							      });
							    });
							    </script>
							 
			 <!-- //requried-jsfiles-for owl -->
  <!-- //End-team-->

<!--classes-->
		<div class="clases-section">
			<div class="container">
			             <h3>Our Classes</h3>
			     <div class="class-grids">
					 <div class="col-md-6 class-grid wow zoomInLeft animated">
					     <img src="<?php echo base_url('assets/images/c1.jpg'); ?>" class="img-responsive" alt="" />
						 <div class="bottom-color">
							<h4>Body Building </h4>
							<p>with John Da Vinci</p>
						</div>
						<div class="class-bottom">
							<div class="col-md-6 class-time ">
								 <ul class="time">
									<li><i class="sun"> </i><span>Sunday October 14 </span></li>
									<li><i class="time"></i><span>12:30PM</span></li>
									<div class="clearfix"></div>
								 </ul>
							</div>
							<div class="col-md-6 class-text">
								<div class="single-one"><span><a href="#"><i class="com"> </i>20l</a></span></div>
								<div class="single-one"><span><a href="#"><i class="four"> </i>400</a></span></div>
							</div>
							<div class="clearfix"></div>
							  <a class="button" href="single.html"><img src="<?php echo base_url('assets/images/read.png'); ?>" class="img-responsive" alt="" /></a>
						</div>
					</div>
					 <div class="col-md-6 class-grid wow zoomInRight animated">
					     <img src="<?php echo base_url('assets/images/c2.jpg" class="img-responsive'); ?>" alt="" />
						 <div class="bottom-color">
							<h4>Cardio Practice</h4>
							<p>with John Da Vinci</p>
						</div>
						<div class="class-bottom">
							<div class="col-md-6 class-time">
								 <ul class="time">
									<li><i class="sun"> </i><span>Sunday October 14 </span></li>
									<li><i class="time"></i><span>12:30PM</span></li>
									<div class="clearfix"></div>
								 </ul>
							</div>
							<div class="col-md-6 class-text">
								<div class="single-one"><span><a href="#"><i class="com"> </i>20l</a></span></div>
								<div class="single-one"><span><a href="#"><i class="four"> </i>400</a></span></div>
							</div>
							<div class="clearfix"></div>
							   <a class="button" href="single.html"><img src="<?php echo base_url('assets/images/read.png'); ?>" class="img-responsive" alt="" /></a>
						</div>
					</div>
					 <div class="col-md-6 class-grid wow zoomInLeft animated">
					     <img src="<?php echo base_url('assets/images/c3.jpg'); ?>" class="img-responsive" alt="" />
						 <div class="bottom-color">
							<h4>Athletic Training</h4>
							<p>with John Da Vinci</p>
						</div>
						<div class="class-bottom">
							<div class="col-md-6 class-time">
								 <ul class="time">
									<li><i class="sun"> </i><span>Sunday October 14 </span></li>
									<li><i class="time"></i><span>12:30PM</span></li>
									<div class="clearfix"></div>
								 </ul>
							</div>
							<div class="col-md-6 class-text">
								<div class="single-one"><span><a href="#"><i class="com"> </i>20l</a></span></div>
								<div class="single-one"><span><a href="#"><i class="four"> </i>400</a></span></div>
							</div>
							<div class="clearfix"></div>
							    <a class="button" href="single.html"><img src="<?php echo base_url('assets/images/read.png'); ?>" class="img-responsive" alt="" /></a>
						</div>
					</div>
					 <div class="col-md-6 class-grid wow zoomInRight animated">
					     <img src="<?php echo base_url('assets/images/c1.jpg'); ?>" class="img-responsive" alt="" />
						 <div class="bottom-color">
							<h4>Body Building </h4>
							<p>with John Da Vinci</p>
						</div>
						<div class="class-bottom">
							<div class="col-md-6 class-time">
								 <ul class="time">
									<li><i class="sun"> </i><span>Sunday October 14 </span></li>
									<li><i class="time"></i><span>12:30PM</span></li>
									<div class="clearfix"></div>
								 </ul>
							</div>
							<div class="col-md-6 class-text">
								<div class="single-one"><span><a href="#"><i class="com"> </i>20l</a></span></div>
								<div class="single-one"><span><a href="#"><i class="four"> </i>400</a></span></div>

							</div>
							<div class="clearfix"></div>
							  <a class="button" href="single.html"><img src="<?php echo base_url('assets/images/read.png'); ?>" class="img-responsive" alt="" /></a>
						</div>
					</div>
					<div class="clearfix"></div>
				 </div>
			</div>
		</div>
		<!--start-new-->
		<div class="new-section">
		   <div class="container">
		         <h3>Our news</h3>
				 <div class="new">
				   <div class="col-md-6 new-text wow rollIn animated" data-wow-delay="0.4s">
					   <h5>THU 14 May, 2015</h5>
					   <a href="single.html"><h4>How to lose fat fast</h4></a>
					   <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				   </div>
					<div class="col-md-6 welcome-img">
					 <a href="single.html" class="mask"><img src="<?php echo base_url('assets/images/n1.jpg'); ?>" alt="image" class="img-responsive zoom-img"></a>
					</div>
				   <div class="clearfix"> </div>
			   </div>
			    <div class="new">
				 <div class="col-md-6 new-text two wow rollIn animated" data-wow-delay="0.4s">
					   <h5>THU 14 May, 2015</h5>
					  <a href="single.html"><h4>Build your six pack</h4></a>
										   <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				   </div>
					<div class="col-md-6 new-img two">
					 <a href="single.html" class="mask"><img src="<?php echo base_url('assets/images/n3.jpg'); ?>" alt="image" class="img-responsive zoom-img"></a>
					</div>
				   <div class="clearfix"> </div>
			   </div> 
			    <div class="new">
				   <div class="col-md-6 new-text wow rollIn animated" data-wow-delay="0.4s">
					   <h5>THU 14 May, 2015</h5>
					   <a href="single.html"><h4>How to lose fat fast</h4></a>
					   <p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				   </div>
					<div class="col-md-6 welcome-img">
					 <a href="single.html" class="mask"><img src="<?php echo base_url('assets/images/n2.jpg'); ?>" alt="image" class="img-responsive zoom-img"></a>
					</div>
				   <div class="clearfix"> </div>
			   </div>
		</div>
	</div>