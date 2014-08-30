

@extends('joblayout.list')



@section('joblist')
	<div class="category">
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

		<h2 class="list_heading">{{$title}} </h2>
		
		<div class="row">
			<div class="col-lg-12">
				{{Form::open(array('route' => array('job.update',$job->id),'method'=>'PATCH' , 'role'=>'form','class'=>'form-horizontal'))}}
				  <div class="form-group">
				    <label for="title" class="col-sm-2 control-label">Title</label>
				    <div class="col-sm-10">
				      {{ Form::text('title', $job->title, ['class' => 'form-control','id'=>'title','placeholder'=>'Title']) }}
				    </div>
				  </div>

				  <div class="form-group">
				    <label for="content" class="col-sm-2 control-label">Description</label>
				    <div class="col-sm-10">
				      {{ Form::textarea('content', $job->content, ['class' => 'form-control','id'=>'content','placeholder'=>'Job Description']) }}
				    </div>
				  </div>
				  
				  <div class="form-group">
				    <label for="location" class="col-sm-2 control-label">Location</label>
				    <div class="col-sm-10">
				      {{ Form::text('location', $job->location, ['class' => 'form-control','id'=>'location','placeholder'=>'Job Location']) }}
				    </div>
				  </div>
				  


				  <div class="form-group">
				    <label for="skills" class="col-sm-2 control-label">Skill Set</label>
				    <div class="col-sm-10">
				      {{ Form::text('skills', $job->skills, ['class' => 'form-control','id'=>'skills','placeholder'=>'Skill Set Required (Separated by comma)']) }}
				    </div>
				  </div>
				  


				  <div class="form-group">
				    <label for="category" class="col-sm-2 control-label">Category</label>
				    <div class="col-sm-10">
				    	<select class='form-control' name='category'>
				    		<option>Security/PSD</option>
				    		<option>Security/PSD Management</option>
				    		<option>Medical</option>
				    		<option>Intel</option>
				    		<option>K-9</option>
				    		<option>Executive Protection</option>
				    		<option>DDM/Sniper</option>
				    		<option>Administrative</option>
				    		<option>Business Development</option>
				    		<option>Facility Services (CONUS)</option>
				    		<option>Facility Services (OCONUS)</option>
				    		<option>Human Resources</option>
				    		<option>Instructors</option>
				    		<option>Facility Services</option>
				    		<option>Motor-pool Operations</option>
				    		<option>Truck Drivers</option>
				    		<option>Interpreter/Linguist</option>
				    		<option>Aviation Operations</option>
				    		<option>Recruiters</option>
				    		<option>IT Technicians</option>
				    		<option>Maritime Security</option>
				    	</select>
				    </div>
				  </div>
				  


				  <div class="form-group">
				    <label for="type" class="col-sm-2 control-label">Type</label>
				    <div class="col-sm-10">
				      {{ Form::text('type', $job->type, ['class' => 'form-control','id'=>'type','placeholder'=>'Type (Full Time, Part Time)']) }}
				    </div>
				  </div>

				  
				  <div class="form-group">
				    <label for="contract_type" class="col-sm-2 control-label">Contract Type</label>
				    <div class="col-sm-10">
				      {{ Form::text('contract_type', $job->contract_type, ['class' => 'form-control','id'=>'contract_type','placeholder'=>'Contract Type']) }}
				    </div>
				  </div>
				  	
					
				  <div class="form-group">
				    <label for="expected_sal" class="col-sm-2 control-label">Expected Salary</label>
				    <div class="col-sm-10">
				      {{ Form::text('expected_sal', $job->expected_sal, ['class' => 'form-control','id'=>'expected_sal','placeholder'=>'Expected Salaray ($xxxxxx)']) }}
				    </div>
				  </div>



				  <div class="form-group">
				    <label for="lastdate" class="col-sm-2 control-label">Last Date</label>
				    <div class="col-sm-10">
				      {{ Form::text('lastdate', $job->lastdate, ['class' => 'form-control','id'=>'lastdate','placeholder'=>'Last Date of Application']) }}
				    </div>
				  </div>
				  



				  <div class="form-group">
				    <label for="how_to_apply" class="col-sm-2 control-label">How To Apply</label>
				    <div class="col-sm-10">
				      {{ Form::text('how_to_apply', $job->how_to_apply, ['class' => 'form-control','id'=>'how_to_apply','placeholder'=>'How to apply']) }}
				    </div>
				  </div>
				  
				  	

				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				     	{{ Form::submit('Edit Job', array('class'=>'btn btn-large btn-primary btn-block'))}}

				    </div>
				  </div>
				{{Form::close()}}
			</div>
		</div>


		


		

	</div>
	
					

@stop


