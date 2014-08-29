

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
							Skills
						</th>
						<td>
							{{$job->skills}}
						</td>
					</tr>


					<tr>
						<th>
							Last Date
						</th>
						<td>
							{{$job->lastdate}}
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
			</Div>
			<div class="col-lg-3">
				<p><b>COMPANY</b></p>
				<p>{{$job->company}}</p>
				<p><b>JOB TYPE</b></p>
				<p>Project</p>
				<p><b>LOCATION</b></p>
				<p>{{$job->location}}</p>
				<p><b>BUDGET / SALARY</b></p>
				<p>{{$job->expected_sal}}</p>
				<p><b>HOW TO APPLY</b></p>
				<p>{{$job->how_to_apply}}</p>
			</div>
		</div>


	</div>

		


		

	</div>
	
					

@stop


