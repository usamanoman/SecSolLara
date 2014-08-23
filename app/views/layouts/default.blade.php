<html>
	<head>
		<title>{{ $title }}</title>
		{{HTML::style('css/bootstrap.min.css');}}
		{{HTML::style('css/style.css');}}
		
		{{HTML::script('js/jquery.min.js')}}
		{{HTML::script('js/bootstrap.min.js')}}
		
	</head>
	<body>
		@include('layouts.navbar')
		
		<div class="container">
            @yield('content')
	
		</div>
        

	</body>
</html>