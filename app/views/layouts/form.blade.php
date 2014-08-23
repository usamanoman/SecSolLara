<html>
	<head>
		<title>{{ $title }}</title>
		{{HTML::style('css/bootstrap.min.css');}}
		{{HTML::style('css/yunik.css');}}
		{{HTML::style('css/style.css');}}
		
		
		{{HTML::script('js/jquery.min.js')}}
		{{HTML::script('js/bootstrap.min.js')}}
		<style type="text/css">
				body
				{
					background:url('../img/blurred.jpg')  !important;
					background-repeat: no-repeat;
					background-size: 100% 100% !important;
					background-color: transparent;
					-webkit-backface-visibility: visible;
				}
		</style>
	</head>
	<body>
		@include('layouts.navbar')
		


		<div class="wide_margin">
		</div>
		<div class="container">
            <div class="row">
            	<div class="col-lg-4 col-lg-offset-4">
            		@yield('content')
	
            	</div>
            </div>

		</div>
        

	</body>
</html>