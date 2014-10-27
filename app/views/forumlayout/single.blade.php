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
    {{HTML::style('css/bootstrap.css')}}
    {{HTML::style('css/yunik.css')}}
    {{HTML::style('css/retina.css')}}
    {{HTML::style('css/owl.carousel.css')}}
    {{HTML::style('css/icons-font.css')}}
    {{HTML::style('css/YTPlayer.css')}}
    {{HTML::style('css/cubeportfolio.css')}}
        
    <!-- SLIDER REVOLUTION 4.x DESIGNARE CSS SETTINGS -->
	{{HTML::style('rs-plugin/css/designare-settings.css')}}

    <!-- COLORS -->
	{{HTML::style('css/color-variations/river.css')}}
    

    <!-- USED FOR RESPONSIVE ADJUSTMENTS -->
	{{HTML::style('css/resize.css')}}
    {{HTML::style('css/style.css')}}
    
    <!-- LOAD GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,300,600,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:100,300,600,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Vollkorn:400italic,400' rel='stylesheet' type='text/css'>
      
    
    {{HTML::script('js/jquery.min.js')}}
    {{HTML::script('js/jquery.mb.YTPlayer.js')}}
    {{HTML::script('js/utils.js')}}
    
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
	  	
	   <div class="search_row">	
	  <div class="container"> 
	  	<div class="row">
	  		<div class="col-lg-12">
	  			<div class="search_option">
	  			
	  			</div>
	  		</div>
	  	</div>
	  </div>
	</div>


	<div class="content_jobs">

	<div class="container">
		<div class="row">
			<div class="col-lg-3">
				<div class="side_bar">
					<h2 class="list_heading">
						Hot Topics
					</h2>
					<ul>
					@if(isset($forums))
						@foreach($forums as $forum)
							@foreach($forum->topics as $topic)
								<li><a href="#">{{$topic->title}}</a></li>
							@endforeach
						@endforeach

					@endif
					</ul>
				</div>

			</div> 
			<div class="col-lg-9">

				
				@yield('forum')
				
			</div> 
			
		</div> 






	</div>
	    </div>





 	@include('forumlayout.footer')
	    
	
		
		
	
	
	<!-- GO TOP BUTTON -->
	<p id="back-top"><a href="#home"><i class="fa fa-angle-up"></i></a></p>
	
	<!-- LOAD OTHER SCRIPTS -->
	{{HTML::script('js/yunik.js')}}
    	
	<!-- load main cubeportfolio plugin -->
	{{HTML::script('js/jquery.cubeportfolio.min.js')}}
    
	<!-- load portfolio settings js -->
	{{HTML::script('js/portfolio-index.js')}}
    {{HTML::script('js/SmoothScroll.js')}}
    
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    {{HTML::script('rs-plugin/js/jquery.themepunch.plugins.min.js')}}
    {{HTML::script('rs-plugin/js/jquery.themepunch.revolution.min.js')}}
    {{HTML::script('js/owl.carousel.min.js')}}
    	
		
 
	
</body>

<!-- Mirrored from designarethemes.net/themes/html/yunik/ by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 19 Jun 2014 18:36:21 GMT -->
</html>