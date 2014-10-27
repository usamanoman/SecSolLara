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
	{{HTML::style('css/style.css')}}    	
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
	  	
	  <div class="search_row">	
	  <div class="container"> 
	  	<div class="row">
	  		<div class="col-lg-12">
	  			
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
						@foreach($forums as $forum)
							@foreach($forum->topics as $topic)
								<li><a href="#">{{$topic->title}}</a></li>
							@endforeach
						@endforeach
						
						
					</ul>
				</div>

			</div> 
			<div class="col-lg-9">
				<div class="job_listing">
					
					<h2 class="list_heading">Forums</h2>
					<div class="forum_table_container">
						<table class="forum_table">
							<tr>
								<th>Categories</th>
								<th>Topics</th>
								<th>Posts</th>
								@if(Auth::user()->role == 'Admin')
									<th>Delete</th>
									<th>Modify</th>
								@endif

							</tr>
							@yield('forum')
							
							
							
						</table>
					</div>
				</div>
				
			</div> 
			
		</div> 






	</div>
	    </div>






	     <Div class="footer">	
	  <div class="container"> 
	  	<div class="row">
	  		<div class="col-lg-3">
	  			<h2 class="list_heading">Category One</h2>
	  			<ul>
	  				<li><a href="#" / >Sign Up</a></li>
	  				<li><a href="#" / >Login</a></li>	

	  				<li><a href="#" / >Sign Up</a></li>
	  				<li><a href="#" / >Login</a></li>
	  				<li><a href="#" / >Sign Up</a></li>
	  				<li><a href="#" / >Login</a></li>
	  				
	  			</ul>
	  		</div>



			<div class="col-lg-3">
				<h2 class="list_heading">Category One</h2>
	  			<p>

	  			I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
						
	  		</div>

	  		

	  		<div class="col-lg-3">
	  			<h2 class="list_heading">Category One</h2>
	  			<p>
	  				
	  			I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
				
	  		</div>

	  		

	  		<div class="col-lg-3">
	  			<h2 class="list_heading">Category One</h2>
	  			<p>
	  				
	  			I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click me to add your own content and make changes to the font. I’m a great place for you to tell a story and let your users know a little more about you.</p>
				
	  		</div>

	  		

	  	</div>
	  </div>
	</div>
	    
	
		
		
	
	
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
    
		
		
 
	
</body>

<!-- Mirrored from designarethemes.net/themes/html/yunik/ by HTTrack Website Copier/3.x [XR&CO'2013], Thu, 19 Jun 2014 18:36:21 GMT -->
</html>