@extends('layouts.form')


@section('content')
    <div>
		@if(isset($message))
			<p class="notfiy">
				{{$message}}
			</p>
		@endif

		<h2 class="center_align">SIGN UP</h2>
		
    	<ul class="notfiy">
    	@foreach($errors->all() as $error)
            <li >{{ $error }}</li>
        @endforeach
    	</ul>
		{{Form::open(array('action' => 'UsersController@store', 'method' => 'post','class'=>'well'))}}
		  

		  <div class="form-group">
		    <label for="firstname">First Name</label>
		   {{ Form::text('firstname', null, array('class'=>'form-control', 'placeholder'=>'First Name')) }}
		  </div>
		  <div class="form-group">
		    <label for="lastname">Last Name</label>
		   {{ Form::text('lastname', null, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}
		  </div>
		  <div class="form-group">
		    <label for="email">Email address</label>
		   {{ Form::email('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
		  </div>
		  <div class="form-group">
		    <label for="userrole">I am</label>
		    <select class="form-control" id="userrole" name="role" >
				<option>Company</option>
				<option>Contractor</option>
		    </select>
		  </div>
		
		  <div class="form-group">
		    <label for="userrole">By clicking this check, I agree with the privacy policies.</label>
		    {{Form::checkbox('privacy_policy',null,array('class'=>'form-control'))}}
		    <a class="fancybox" href="#inline1" title="Privacy Policy">Read Privacy Policy, Terms and Conditions</a>
		  </div>



		  
		  

		   {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
		{{Form::close()}}


    </div>


    <div id="inline1" style="width:600px;display: none;">
		<h3>Etiam quis mi eu elit</h3>
		<p>
			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam quis mi eu elit tempor facilisis id et neque. Nulla sit amet sem sapien. Vestibulum imperdiet porta ante ac ornare. Nulla et lorem eu nibh adipiscing ultricies nec at lacus. Cras laoreet ultricies sem, at blandit mi eleifend aliquam. Nunc enim ipsum, vehicula non pretium varius, cursus ac tortor. Vivamus fringilla congue laoreet. Quisque ultrices sodales orci, quis rhoncus justo auctor in. Phasellus dui eros, bibendum eu feugiat ornare, faucibus eu mi. Nunc aliquet tempus sem, id aliquam diam varius ac. Maecenas nisl nunc, molestie vitae eleifend vel, iaculis sed magna. Aenean tempus lacus vitae orci posuere porttitor eget non felis. Donec lectus elit, aliquam nec eleifend sit amet, vestibulum sed nunc.
		</p>
	</div>

		<!-- Add fancyBox -->
	{{HTML::style('css/jquery.fancybox.css')}}
	{{HTML::script('js/jquery.fancybox.js')}}
	{{HTML::script('js/jquery.fancybox.pack.js')}}
	
	
	
	<!-- Optionally add helpers - button, thumbnail and/or media -->
	<!--<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5" type="text/css" media="screen" />
	<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
	<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>

	<link rel="stylesheet" href="/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7" type="text/css" media="screen" />
	<script type="text/javascript" src="/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
-->
    <script type="text/javascript">
		$('.fancybox').fancybox();

	</script>
@stop