@extends('layouts.form')


@section('content')
    <Div class="heading">
    </Div>
    <div>
    	@if(isset($message))
			<p class="notfiy">
				{{$message}}
			</p>
		@endif


		
    	<ul class="notfiy">
    	@foreach($errors->all() as $error)
            <li >{{ $error }}</li>
        @endforeach
    	</ul>    
		

		{{ Form::open(array('url'=>'user/login', 'role'=>'form','class'=>'well')) }}
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		   {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
		  </div>
		  {{ Form::submit('Login', array('class'=>'btn btn-large btn-primary btn-block'))}}
		{{ Form::close() }}


    </div>
@stop