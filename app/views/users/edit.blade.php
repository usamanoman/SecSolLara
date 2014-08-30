@extends('layouts.form')


@section('content')
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
		{{Form::open(array('action' => 'UsersController@store', 'method' => 'post','class'=>'well'))}}
		  

		  <div class="form-group">
		    <label for="firstname">First Name</label>
		   {{ Form::text('firstname', $user->firstname, array('class'=>'form-control', 'placeholder'=>'First Name')) }}
		  </div>
		  <div class="form-group">
		    <label for="lastname">Last Name</label>
		   {{ Form::text('lastname', $user->lastname, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}
		  </div>
		  <div class="form-group">
		    <label for="email">Email address</label>
		   {{ Form::email('email', $user->email, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
		  </div>

		  <div class="form-group">
		    <label for="company">Company</label>
		    {{ Form::password('company', array('class'=>'form-control', 'placeholder'=>'Company Name')) }}
		  </div>
		  

		  <div class="form-group">
		    <label for="password">Company Logo</label>
		    {{ Form::file('company_logo','',array('id'=>'company_logo','class'=>'form-control')) }}
		  </div>
		  	

		  <div class="form-group">
		    <label for="userrole">Role</label>
		    <p>{{$user->role}}</p>
		  </div>

		  
		  

		   {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
		{{Form::close()}}


    </div>
@stop