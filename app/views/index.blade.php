<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designarethemes.net/themes/html/yunik/ by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 19 Jun 2014 18:31:32 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="images/favicon.png">
    <title>Security Solutions Worldwide</title>
    <!-- LOAD CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">    
    <link href="css/yunik.css" rel="stylesheet" type="text/css" media="screen">  
    <link href="css/retina.css" rel="stylesheet" type="text/css" media="screen">  
    <link href="css/owl.carousel.css" rel="stylesheet" type="text/css" media="screen">  
    <link href="css/icons-font.css" rel="stylesheet" type="text/css" media="screen">
	<link href="css/YTPlayer.css" rel="stylesheet" type="text/css" media="screen">
	<link href="css/cubeportfolio.css" rel="stylesheet" type="text/css" media="screen">
	    
    <!-- SLIDER REVOLUTION 4.x DESIGNARE CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/designare-settings.css" media="screen" />

    <!-- COLORS -->
    <link href="css/color-variations/river.css" rel="stylesheet" type="text/css" media="screen" title="river">
    

    <!-- USED FOR RESPONSIVE ADJUSTMENTS -->
    <link href="css/resize.css" rel="stylesheet" type="text/css" media="screen">
    
    <!-- LOAD GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,300,600,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:100,300,600,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Vollkorn:400italic,400' rel='stylesheet' type='text/css'>
      
    
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.mb.YTPlayer.js" type="text/javascript"></script>
    <script src="js/utils.js" type="text/javascript"></script>

</head>
<body class="demo-masonry">
  	<div id="load">
	  	<div class="spinner">
		  	<div class="double-bounce1"></div>
		  	<div class="double-bounce2"></div>
		</div>
		<div class="percentage">0%</div>
  	</div>
  	<div class="everything"> 
  		<!-- BEGIN: HEADER BAR 
	  		 OPTIONS: "light-menu" , "hide-on-start" 
  		-->
		@include('layouts.navbar')
		<!-- END: HEADER BAR -->        
	  	


	  	<style>
			.first_tag img{
				height: 125px !important;
				width: 125px !important;
			}
	  		/* Smartphones (portrait) ----------- */
			@media screen and (max-width:418px) and (orientation:portrait) and (-webkit-max-device-pixel-ratio:1) and (device-aspect-ratio:683/384) { 
  					.first_tag img{
  						height:26px !important; 
						width:26px !important;
						
  					}
  					.tp-caption{
			  			font-size:28px !important;
			  				  
			  		}
					.last_tagline,.last_tagline b{
						font-size: 11px !important;
					}
			  		.first_tag{
			  			position: relative !important;
						top: -355px !important;
			  		}
				}

	  	</style>
	  	
	  	<!-- BEGIN: HOME REVOLUTION SLIDER -->      
	  	<section id="home-fsslider" class="nav-sections">

			<div class="tp-banner-container">
				<div class="tp-banner" >
					<ul>
						<!-- SLIDE #01 -->
						<li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
							<!-- MAIN IMAGE -->
							<img src="images/parallax/img3.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
							
							<!-- Caption #01 -->
							<div class="tp-caption large_bold_white_25 text-center customin customout start tp-resizeme first_tag"
								data-x="center"
								data-hoffset="0"
								data-y="190"
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="1000"
								data-start="1000"
								data-easing="Back.easeInOut"
								data-endspeed="300"><img  src="images/SSW121.png"    >Security 
							</div>
							
							<!-- Caption #02 -->
							<div class="tp-caption lfb large_text text-center customin customout tp-resizeme"
								data-x="center"
								data-hoffset="0"
								data-y="280"
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="1000"
								data-start="1500"
								data-easing="Back.easeInOut"
								style="z-index: 6"> Solutions  Worldwide
							</div>
							
							<!-- Caption #03 -->
							<div class="tp-caption lfb"
								data-x="center"
								data-hoffset="-85"
								data-y="350"
								data-speed="1000"
								data-start="1800"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off"
								style="z-index: 6">
								<a class="nav-to des-button-white des-button-white-1 des-button-white-1d bt1" href="{{ URL::route('user.create') }}"><span>SIGN UP</span></a>
							</div>
							
							<!-- Caption #04 -->
							<div class="tp-caption lfb"
								data-x="center"
								data-hoffset="85"
								data-y="350"
								data-speed="1000"
								data-start="2000"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off"
								style="z-index: 6">
								<a class="nav-to des-button-white des-button-white-1 des-button-white-1d bt2" href="{{ URL::route('user.login') }}"><span>LOGIN</span></a>
							</div>
		
						</li>
						
						
						<!-- SLIDE #02 -->
						<li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
							<!-- MAIN IMAGE -->
							<img src="images/parallax/img2.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
							
							<!-- Caption #01 -->
							<div class="tp-caption large_bold_white_15 text-center customin customout start tp-resizeme"
								data-x="center"
								data-hoffset="0"
								data-y="140"
								data-speed="800"
								data-start="800"
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								
								data-easing="Power3.easeInOut"
								data-splitin="chars"
								data-splitout="chars"
								data-elementdelay="0.08"
								data-endelementdelay="0.08"
								data-end="3800"
								data-endspeed="500"
								style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap; font-size:100px;">CONTRACTORS FIND JOBS
							</div>
							
							<!-- Caption #02 -->
							<div class="tp-caption large_bold_white_15 text-center customin customout tp-resizeme"
								data-x="center"
								data-hoffset="0"
								data-y="140"
								data-speed="800"
								data-start="4000"
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								
								data-easing="Power3.easeInOut"
								data-splitin="chars"
								data-splitout="chars"
								data-elementdelay="0.08"
								data-endelementdelay="0.08"
								data-end="7000"
								data-endspeed="500"
								style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;font-size:100px ; ">COMPANIES FIND WORKERS
							</div>
							
							<!-- Caption #03 -->
							<div class="tp-caption large_bold_white_15 text-center customin customout tp-resizeme"
								data-x="center"
								data-hoffset="0"
								data-y="140"
								data-speed="800"
								data-start="7200"
								data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								
								data-easing="Power3.easeInOut"
								data-splitin="chars"
								data-splitout="chars"
								data-elementdelay="0.08"
								data-endelementdelay="0.08"
								style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;">
							</div>
							
							<!-- Caption #04 -->
							<div class="tp-caption last_tagline lfb boldwide_small_white text-center customin customout tp-resizeme"
								data-x="center"
								data-hoffset="0"
								data-y="230"
								data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
								data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
								data-speed="1000"
								data-start="1500"
								data-easing="Back.easeInOut"
								style="z-index: 6">OUR <b>HARD WORK</b> SETS US APART <b>FROM</b> THE <b>COMPETITION</b>
							</div>
							
								

							<!-- Caption #03 -->
							<div class="tp-caption lfb"
								data-x="center"
								data-hoffset="-85"
								data-y="350"
								data-speed="1000"
								data-start="1800"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off"
								style="z-index: 6">
								<a class="nav-to des-button-white des-button-white-1 des-button-white-1d bt1" href="{{ URL::route('user.create') }}"><span>SIGN UP</span></a>
							</div>
							
							<!-- Caption #04 -->
							<div class="tp-caption lfb"
								data-x="center"
								data-hoffset="85"
								data-y="350"
								data-speed="1000"
								data-start="2000"
								data-easing="Power4.easeOut"
								data-endspeed="300"
								data-endeasing="Power1.easeIn"
								data-captionhidden="off"
								style="z-index: 6">
								<a class="nav-to des-button-white des-button-white-1 des-button-white-1d bt2" href="{{ URL::route('user.login') }}"><span>LOGIN</span></a>
							</div>
		

						</li>
					</ul>

				</div>
			</div>
			
			
	  	</section>
		<!-- END REVOLUTION SLIDER -->
		
		
		
		<!-- BEGIN: ABOUT SECTION --> 
		<section id="about" class="nav-sections">
			
			<!-- BEGIN: LIGHT SECTION -->
			<div class="light-section dark-text nopaddingbottom section-arrow-down">
			  	
			  	<!-- BEGIN: CONTAINER -->
			  	<div class="container">
				  	
				  	<!-- BEGIN: ABOUT TITLE --> 
				    <div class="section-title row text-center">
						<div class="divider-vertical"></div>
						<h2>ABOUT ENDEAVOUR</h2>
						<h4 class="sub-title">WE ANSWER YOUR QUESTIONS</h4>
						<div class="space"></div>
						<h2>WHY US?</h2>
						<p class="small-pwide">
						I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
						<h2>OUR PROCESS</h2>
						<p class="small-pwide">
						I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
						<h2>OUR OBLIGATION</h2>
						<p class="small-pwide">
						I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
						<div class="space"></div>
						<!-- <div class="divider"></div> -->
					</div>
					<!-- END --> 
					
					<!-- BEGIN: ROW TEAM MEMBERS -->
					<div class="row team text-center">
						
						<!-- BEGIN MEMBER #01 -->
						<!-- MEMBER IMAGE -->
						<div class="col-xs-4 col-sm-4">
							<a data-toggle="modal" href="#member1" class="modal-popup-link team-profile">
								<img src="images/army.png" alt="" class="animated fadeInUp">
								
								
							</a>
							
						</div>
					
						<!-- BEGIN MEMBER #02 -->
						<!-- MEMBER IMAGE -->
						<div class="col-xs-4 col-sm-4">
							<a data-toggle="modal" href="#member2" class="modal-popup-link team-profile">
								<img src="images/SecondBoy.png" alt="" class="animated fadeInUp delay-100">
								
								
							</a>
						</div>
	                    
	                    <!-- BEGIN MEMBER #03 -->
						<!-- MEMBER IMAGE -->
	                    <div class="col-xs-4 col-sm-4">
							<a data-toggle="modal" href="#member3" class="modal-popup-link team-profile">
								<img src="images/thirdboy.png" alt="" class="animated fadeInUp delay-200">
								
								
							</a>
						</div>
						
					</div><!-- ROW TEAM MEMBERS -->
			  	</div><!-- END CONTAINER -->
			</div><!-- END: LIGHT SECTION -->			
		</section>	
		<!-- END: ABOUT SECTION -->
		
		
		
		<!-- BEGIN: SERVICES PARALLAX -->
		<section id="services" class="nav-sections">
		
			<!-- START: PARALLAX - SERVICES CAROUSSEL -->
			<div id="parallax-1" class="parallax" data-stellar-background-ratio="0.5" style="background-image: url(images/parallax/4.jpg);text-align:center;">
				
				<div class="box-overlay-pattern">
			      
			      	<!-- Remove this line "overlay-color" if you don't want the overlay color -->
			      	<div class="overlay-color"></div>
			      
			      	<!-- BEGIN: PARALLAX CONTENTS -->	
			      	<div class="parallax-content dark-text">
				      
				    	<!-- BEGIN: ABOUT TITLE --> 
				    	<div class="section-title row text-center">
							<h2>EMPLOYERS</h2>
							<h4 class="sub-title">WHAT DO WE HAVE TO OFFER?</h4>
						</div>
						<!-- END -->




						<div class="space"></div>
						<p class="small-pwide" style="color:white">
						We are dedicated to helping you fill positions in your company.  We'll do the hard work, all we need to know is what positions you need filled and a link to your job listing(s).  As soon as we post your opening to our website thousands of contractors will be viewing and sharing the link with their friends.   If you don't have an active job listing posted on your website, we still want you to send us the job posting.  Any extra information you can provide will only help your cause.  If we don't have enough information to validate your post we will call or email you for details.  
 						</p>
 						<p style="color:white">
						Welcome to Security Solutions Worldwide!  Where Professionals get results!  
						</p>
				      
						
						<!-- BEGIN: SERVICES CAROUSSEL -->
					    <div class="container">
						    <div id="services-carousel" class="owl-carousel portfolio-entries light-text">
							    
							    <!-- SERVICE #01 -->
								<div class="carousel-item">
			                    	<div class="text-center">
			                    		<img src="images/_bullseye.png" >
			                    	</div>
			                    	
			                    	<div class="text-center white-text">
			                    		<h4>HIRE CONTRACTOR</h4>

			                    	</div>
			                	</div> <!-- END .carousel-item -->
			                	
			                	<!-- SERVICE #02 -->
			                	<div class="carousel-item">
			                    	<div class="text-center">
			                    		<img src="images/_search.png" >
			                    	</div>
			                    	
			                    	<div class="text-center white-text">
			                    		<h4>FIND JOB</h4>
			                    	</div>
			                	</div> <!-- END .carousel-item -->
			                	
			                	<!-- SERVICE #03 -->
			                	<div class="carousel-item">
			                    	<div class="text-center">
			                    		<img src="images/_phone.png" >
			                    	</div>
			                    	
			                    	<div class="text-center white-text">
			                    		<h4>FULL SUPPORT</h4>
			                    	</div>
			                	</div> <!-- END .carousel-item -->
			                	
			                
				
			                </div> <!-- END #services-carousel -->
					    </div><!-- END .CONTAINER -->
					</div>
			      <!-- END: PARALLAX CONTENTS -->	
				</div>
				<!-- END box-overlay-pattern -->
			</div>
		    <!-- END: PARALLAX -->
		</section>
		<!-- END: SERVICES SECTION -->
		
		
		
		
		
	<!-- BEGIN: CLIENTS SECTION -->
		<section id="clients" class="light-section nav-sections dark-text nopaddingbottom">
			
			<!-- BEGIN: ABOUT TITLE --> 
		    <div class="section-title row text-center">
				<div class="divider-vertical"></div>
				<h2>OUR CLIENTS</h2>
				<h4 class="sub-title">WE LOVE THEM ALL</h4>
				
			</div>
			<!-- END --> 
			
			<!-- BEGIN: TESTIMONIALS -->
			<div id="testimonials" class="container">
				
				<!-- CLIENT THUMBNAILS -->
				<div class="testimonial-box">
					<ul class="testimonial-box-nav">
						<li class="animated fadeInUp"><a class="active" href="#testimonial1">
							<img alt="" src="images/clients/1.jpg"></a>
						</li>
			
						<li class="animated fadeInUp delay-100"><a href="#testimonial2">
							<img alt="" src="images/clients/2.jpg"></a>
						</li>
			
						<li class="animated fadeInUp delay-200"><a href="#testimonial3">
							<img alt="" src="images/clients/3.jpg"></a>
						</li>
			
						<li class="animated fadeInUp delay-300"><a href="#testimonial4">
							<img alt="" src="images/clients/4.jpg"></a>
						</li>
						
						<li class="animated fadeInUp delay-400"><a href="#testimonial5">
							<img alt="" src="images/clients/5.jpg"></a>
						</li>
			
						<li class="animated fadeInUp delay-500"><a href="#testimonial6">
							<img alt="" src="images/clients/6.jpg"></a>
						</li>
			
						<li class="animated fadeInUp delay-600"><a href="#testimonial7">
							<img alt="" src="images/clients/7.jpg"></a>
						</li>
			
						<li class="animated fadeInUp delay-700"><a href="#testimonial8">
							<img alt="" src="images/clients/8.jpg"></a>
						</li>
						
					</ul>
				</div>
				
				<!-- CLIENT TESTIMONIALS -->
				<div class="testimonial" id="testimonial1">
					<p>“ I'm a testimonial. Click to edit me and add text that says something nice about you and your services. Let your customers review you and tell their friends how great you are.. ”</p>
					<span><b>Stephanie Davis</b> | <a href="#">FreeMed Inc</a></span>
				</div>
				
				<div class="testimonial" id="testimonial2">
					<p>“ I'm a testimonial. Click to edit me and add text that says something nice about you and your services. Let your customers review you and tell their friends how great you are.. ”</p>
					<span><b>Stephanie Davis</b> | <a href="#">FreeMed Inc</a></span>
				</div>
				<div class="testimonial" id="testimonial3">
					<p>“ I'm a testimonial. Click to edit me and add text that says something nice about you and your services. Let your customers review you and tell their friends how great you are.. ”</p>
					<span><b>Stephanie Davis</b> | <a href="#">FreeMed Inc</a></span>
				</div>
				<div class="testimonial" id="testimonial4">
					<p>“ I'm a testimonial. Click to edit me and add text that says something nice about you and your services. Let your customers review you and tell their friends how great you are.. ”</p>
					<span><b>Stephanie Davis</b> | <a href="#">FreeMed Inc</a></span>
				</div>
				<div class="testimonial" id="testimonial5">
					<p>“ I'm a testimonial. Click to edit me and add text that says something nice about you and your services. Let your customers review you and tell their friends how great you are.. ”</p>
					<span><b>Stephanie Davis</b> | <a href="#">FreeMed Inc</a></span>
				</div>
				<div class="testimonial" id="testimonial6">
					<p>“ I'm a testimonial. Click to edit me and add text that says something nice about you and your services. Let your customers review you and tell their friends how great you are.. ”</p>
					<span><b>Stephanie Davis</b> | <a href="#">FreeMed Inc</a></span>
				</div>
				<div class="testimonial" id="testimonial7">
					<p>“ I'm a testimonial. Click to edit me and add text that says something nice about you and your services. Let your customers review you and tell their friends how great you are.. ”</p>
					<span><b>Stephanie Davis</b> | <a href="#">FreeMed Inc</a></span>
				</div>
				<div class="testimonial" id="testimonial8">
					<p>“ I'm a testimonial. Click to edit me and add text that says something nice about you and your services. Let your customers review you and tell their friends how great you are.. ”</p>
					<span><b>Stephanie Davis</b> | <a href="#">FreeMed Inc</a></span>
				</div>
				
			</div>
			<!-- END: TESTIMONIALS -->
			
			<div class="divider-section-border"></div>
			
			<!-- BEGIN: CLIENTS TITLE -->
			<div class="text-center">
				<h4><b>Industries We Serve</b></h4>
				<p><span class="text_color">Lorem ipsum dolor sit amet, consectetur adipiscing elit egestas varius interdum</span></p>
			</div>
			
			<!-- BEGIN: CLIENTS LOGOS CAROUSEL -->
			<div class="container-logos">
				<div id="logos-carousel" class="owl-carousel light-text">
		          
					<div class="carousel-item">
		            	<a href="#" class="c-adj"><img alt="" src="images/logos/client1.png"></a>
		        	</div> <!-- END .carousel-item -->
			
		        	<div class="carousel-item">
		            	<a href="#" data-toggle="tooltip" data-placement="top" title="Client2"><img alt="" src="images/logos/client2.png"></a>
		        	</div> <!-- END .carousel-item -->
		        	
		        	<div class="carousel-item">
		            	<a href="#"><img alt="" src="images/logos/client3.png"></a>
		        	</div> <!-- END .carousel-item -->
		        	
		        	
		        	<div class="carousel-item">
		            	<a href="#" data-toggle="tooltip" data-placement="top" title="Client4"><img alt="" src="images/logos/client4.png"></a>
		        	</div> <!-- END .carousel-item -->
		        	
		        	
		        	<div class="carousel-item">
		            	<a href="#" class="c-adj" data-toggle="tooltip" data-placement="top" title="Client5"><img alt="" src="images/logos/client1.png"></a>
		        	</div> <!-- END .carousel-item -->
		        	
		        	<div class="carousel-item">
		            	<a href="#"><img alt="" src="images/logos/client3.png"></a>
		        	</div> <!-- END .carousel-item -->
		        	
		        	
		        	<div class="carousel-item">
		            	<a href="#"><img alt="" src="images/logos/client4.png"></a>
		        	</div> <!-- END .carousel-item -->
		        	
		        	
		        	<div class="carousel-item">
		            	<a href="#" class="c-adj"><img alt="" src="images/logos/client1.png"></a>
		        	</div> <!-- END .carousel-item -->
		        	
		        </div> <!-- END #services-carousel -->
			</div>
			<!-- END: CLIENTS LOGOS CAROUSEL -->
			
			
			
		</section>
		
		
		
		
		<!-- BEGIN: CONTACT SECTION -->
		<section id="contacts" class="light-section dark-text nopaddingbottom nav-sections">
			
			<!-- BEGIN: ABOUT TITLE --> 
		    <div class="section-title row text-center">
				<div class="divider-vertical"></div>
				<h2>CONTACTS</h2>
				<p class="small-pwide">Still confused? Feel free to fill this form.</p>
			</div>
			<!-- END --> 
			
			
			<!-- BEGIN: CONTACTS FORM -->
			<div class="container">
				<div class="col-xs-12 col-md-12">
			      	<!-- CONTACT FORM -->			
					<div id="contact_form" class="animated fadeInDown">
						
						<!-- Sucess Message -->
						<div class="form-success">
				        	<p><i class="fa fa-check"></i>Thank you, your message has been sent.</p>
				        </div>
				        
				        <!-- Begin form -->
						<div class="contact-form"> 
				    		<form action="http://designarethemes.net/themes/html/yunik/contact-form/send.php" method="post" class="form">   	
				            	<div class="name">
				            		<input class="text" type="text" name="name" placeholder="NAME"> 
				            	</div>
				            	<div class="email">  
				                	<input class="text" type="text" name="email" placeholder="EMAIL"> 
				            	</div>
				            	<div class="subject">    
				                	<input class="text" type="text" name="subject" placeholder="SUBJECT">
				            	</div>
				            	
				            	<input class="service-input" type="text" name="service" style="display:none;" >
				            	
				                <div class="message">    
					                <textarea name="message" rows="8" cols="60" placeholder="MESSAGE"></textarea> 
					                				                
				                </div>
				                
				                <div class="bt-contact">
				                	<a class="des-button-dark des-button-dark-1 des-button-dark-1d" id="submit" href="javascript:;"><span>SEND EMAIL</span></a>
				                </div>
				                    
					            <div class="loading"></div>
				                
				            </form> 
				        </div>
				        <!-- End form -->
					</div>
					<!-- END CONTACT FORM -->
				</div>
			</div>
			<!-- END: CONTACTS FORM -->
							
			
							
		</section>
		<!-- END: CONTACT SECTION -->
		
		

	</div>
	<!-- END .everything -->
		
	<!-- GO TOP BUTTON -->
	<p id="back-top"><a href="#home"><i class="fa fa-angle-up"></i></a></p>
	
	<!-- LOAD OTHER SCRIPTS -->
	<script src="js/yunik.js" type="text/javascript"></script>
		
	<!-- load main cubeportfolio plugin -->
	<script type="text/javascript" src="js/jquery.cubeportfolio.min.js"></script>

	<!-- load portfolio settings js -->
	<script type="text/javascript" src="js/portfolio-index.js"></script>
	<script type="text/javascript" src="js/SmoothScroll.js"></script>
	
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script src="js/owl.carousel.min.js" type="text/javascript"></script>
    
    <script type="text/javascript">
			var revapi;
			jQuery(document).ready(function() {

				   revapi = jQuery('.tp-banner').revolution(
					{
						delay:15000,
						startwidth:1170,
						startheight:500,
						hideThumbs:10,
						fullWidth:"off",
						stopAtSlide:1,
						fullScreen:"on",
						/* hideArrowsOnMobile:"on", */
						touchenabled:"on",
						fullScreenOffsetContainer: "#header, #footer"
					});
			});
		</script>
		
		
 
	
</body>

<!-- Mirrored from designarethemes.net/themes/html/yunik/ by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 19 Jun 2014 18:36:21 GMT -->
</html>