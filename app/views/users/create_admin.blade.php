@extends('layouts.form')


@section('content')
    <div>
		@if(isset($message))
			<p class="notify">
				{{$message}}
			</p>
		@endif


		
    	<ul class="notify">
    	@foreach($errors->all() as $error)
            <li >{{ $error }}</li>
        @endforeach
    	</ul>
		{{Form::open(array('action' => 'UsersController@storeAdmin', 'method' => 'post','class'=>'well'))}}
		  

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
		    <label for="userrole">Role</label>
		    <select class="form-control" id="userrole" name="role" >
				<option>Admin</option>
		    </select>
		  </div>

		  
		  

		   {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
		{{Form::close()}}


    </div>
@stop