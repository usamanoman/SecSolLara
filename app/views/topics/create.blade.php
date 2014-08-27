@extends('forumlayout.single')



@section('forum')

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
			{{Form::open(array('action' => 'TopicsController@store', 'role'=>'form','class'=>'form-horizontal'))}}
			  <div class="form-group">
			    <label for="forum_id" class="col-sm-2 control-label">Select Forum</label>
			    <div class="col-sm-10">
			    	<select class="form-control" name="forum_id">
			    		<option value="0">Select Forum To Post The Topic
			    		</option>
			    		@foreach($forums as $forum)
							<option value="{{$forum->id}}">
							{{$forum->title}}
							</option>
			    		@endforeach
			    	</select>
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <label for="title" class="col-sm-2 control-label">Title</label>
			    <div class="col-sm-10">
			      {{ Form::text('title', null, ['class' => 'form-control','id'=>'title','placeholder'=>'Title']) }}
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="content" class="col-sm-2 control-label">Description</label>
			    <div class="col-sm-10">
			      {{ Form::textarea('content', null, ['class' => 'form-control','id'=>'content','placeholder'=>'Description']) }}
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="keywords" class="col-sm-2 control-label">Keywords</label>
			    <div class="col-sm-10">
			      {{ Form::text('keywords', null, ['class' => 'form-control','id'=>'keywords','placeholder'=>'Keywords (Comma separated)']) }}
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-10">
			     	{{ Form::submit('Create Topic', array('class'=>'btn btn-large btn-primary btn-block'))}}

			    </div>
			  </div>
			
			{{Form::close()}}
		</div>
	</div>
@stop