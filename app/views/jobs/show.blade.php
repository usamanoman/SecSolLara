

@extends('joblayout.list')



@section('joblist')
	<div class="category">
			<div class="single_job">
		<h2 class="list_heading">{{$job->title}} </h2>
		
		<div class="row">
			<Div class="col-lg-9">
				<table class="job_details_table">

					<tr>
						<th>
							Date Posted On
						</th>
						<td>
							{{$job->created_at}}
						</td>
					</tr>


					<tr>
						<th>
							Company Status
						</th>
						<td>
							@if($job->user->ispremium==0)
								Not Verified
							@else
								Verified
							@endif
						</td>
					</tr>

					<tr>
						<th>
							Skills
						</th>
						<td>
							{{$job->skills}}
						</td>
					</tr>


					
					
					<tr>
						<th>
							Location
						</th>
						<td>
							{{$job->location}}
						</td>
					</tr>
					

					<tr>
						<th>
							Contract Type
						</th>
						<td>
							{{$job->contract_type}}
						</td>
					</tr>
					

					<tr>
						<th>
							Type
						</th>
						<td>
							{{$job->type}}
						</td>
					</tr>
					

				</table>
					
				<p>
					{{$job->content}}
				</p>
				<br>
				@if(Auth::user()->role == 'Admin' || Auth::user()->id == $job->user->id)
						<a href="{{URL::route('job.edit',array('id'=>$job->id))}}">Edit</a>
						<h4>Want to remove this posting?</h4>
						{{Form::open(array('method'=>'DELETE', 'url'=>'job/'.$job->id))}}
							<button>Delete</button>
						{{Form::close()}}
											
				@endif


			</Div>
			<div class="col-lg-3">
				<p><b>COMPANY</b></p>
				<p>{{$job->user->company}}</p>
				<p><b>COMPANY Logo</b></p>
				<p>{{ HTML::image('logo/'.$job->user->company_logo, "COMPANY LOGO", array('class' => 'logo')) }}</p>
				<p><b>JOB TYPE</b></p>
				<p>Project</p>
				<p><b>LOCATION</b></p>
				<p>{{$job->location}}</p>
				<p><b>BUDGET / SALARY</b></p>
				<p>{{$job->expected_sal}}</p>
				<h5><b>POINT OF CONTACT</b></h5>
				<ul>
				<li><b>POC Email :</b> {{$job->poc_email}}</li>
				<li><b>POC Phone :</b> {{$job->poc_phone}}</li>
				<li><b>Application Page :</b> {{$job->application_page}}</li>
				</ul>
			</div>
		</div>


	</div>

		


		

	</div>
	
					

@stop


