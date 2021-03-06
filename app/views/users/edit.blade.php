@extends('layouts.form')


@section('content')
    <div>
    	@if(isset($message))
    		<p class="notify">
    		{{$message}}
    		</p>
    	@endif


    	
		<h2 class="center_align">Edit Profile</h2>
		
    	<ul class="notify">
    	@foreach($errors->all() as $error)
            <li >{{ $error }}</li>
        @endforeach
    	</ul>
		{{Form::open(array('method'=>'PATCH','route' => array('user.update', $user->id) ,'class'=>'well',"enctype"=>"multipart/form-data"))}}
		  

		  <div class="form-group">
		    <label for="firstname">First Name</label>
		   {{ Form::text('firstname', $user->firstname, array('class'=>'form-control', 'placeholder'=>'First Name')) }}
		  </div>
		  <div class="form-group">
		    <label for="lastname">Last Name</label>
		   {{ Form::text('lastname', $user->lastname, array('class'=>'form-control', 'placeholder'=>'Last Name')) }}
		  </div>
		  
		  <div class="form-group">
		    <label for="password">Password</label>
		    {{ Form::password('password', array('class'=>'form-control', 'placeholder'=>'Password')) }}
		  </div>

		  @if(Auth::user()->role == 'Company')
		  <div class="form-group">
		    <label for="company">Company</label>
		    {{ Form::text('company', $user->company,array('class'=>'form-control', 'placeholder'=>'Company Name')) }}
		  </div>
		  
		  <div class="form-group">
		    <label for="company_logo">Company Logo</label>
		    {{ Form::file('company_logo',null,array('id'=>'company_logo','class'=>'form-control')) }}
		  </div>
		  @endif


		  @if(Auth::user()->role == 'Admin' && Auth::user()->id != $user->id)
		  	 <label for="ispremium">Premium?</label>
		     <select class='form-control' name="ispremium">
		    	 <option value="0">Non Premium </option>
		    	 <option value="1">Premium </option>
		    	 
		     </select>
		  @endif

		  <div class="form-group">
		    <label for="userrole">Role</label>
		    <p>{{$user->role}}</p>
		  </div>

		  
		  <label>Don't Like The Service?</label>
			<p>
				<A HREF="https://www.paypal.com/cgi-bin/webscr?cmd=_subscr-find&alias=RVUAR4BPK6S9L">
				<IMG SRC="https://www.paypalobjects.com/en_US/i/btn/btn_unsubscribe_LG.gif" BORDER="0">
				</A>
			</p>
		

		   {{ Form::submit('Update Profile', array('class'=>'btn btn-large btn-primary btn-block'))}}
		{{Form::close()}}


    </div>
@stop