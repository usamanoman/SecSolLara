@extends('layouts.form')


@section('content')
    <h1>User Sign Up</h1>
    <div>

    	<ul class="notfiy">
    	@foreach($errors->all() as $error)
            <li >{{ $error }}</li>
        @endforeach
    	</ul>
		{{Form::open(array('action' => 'UsersController@store', 'method' => 'post'))}}
		  
			
    
    
    
   

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
		   {{ Form::text('email', null, array('class'=>'form-control', 'placeholder'=>'Email Address')) }}
		  </div>
		  <div class="form-group">
		    <label for="password">Password</label>
		    {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
		  </div>
		  <div class="form-group">
		    <label for="userrole">Role</label>
		    <select class="form-control" id="userrole" name="role" >
				<option>Admin</option>
				<option>Moderator</option>
				<option>User</option>
				<option>Contractor</option>
		    </select>
		  </div>
		  

		   {{ Form::submit('Register', array('class'=>'btn btn-large btn-primary btn-block'))}}
		{{Form::close()}}


    </div>
@stop