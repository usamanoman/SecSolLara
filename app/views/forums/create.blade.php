@extends('layouts.pro')



@section('getPro')

	<div>
		<div class="error_messages">
			<ul class="notify">
	    	@foreach($errors->all() as $error)
	            <li >{{ $error }}</li>
	        @endforeach
	    	</ul>
			


			@if(isset($message))
				<p class="notify">{{$message}}</p>
			@endif
		</div>
		<div>
			{{Form::open(array('action' => 'ForumsController@store', 'role'=>'form','class'=>'form-horizontal'))}}
			  
			  <div class="form-group">
			    <label for="title" class="col-sm-2 control-label">Title</label>
			    <div class="col-sm-10">
			      {{ Form::text('title', null, ['class' => 'form-control','id'=>'title','placeholder'=>'Title']) }}
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="description" class="col-sm-2 control-label">Description</label>
			    <div class="col-sm-10">
			      {{ Form::textarea('description', null, ['class' => 'form-control','id'=>'description','placeholder'=>'Description']) }}
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			     	{{ Form::submit('Create Forum', array('class'=>'btn btn-large btn-primary btn-block'))}}

			    </div>
			  </div>
			
			{{Form::close()}}
		</div>
	</div>
@stop