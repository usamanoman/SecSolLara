@extends('joblayout.list')



@section('joblist')
	<div class="category">
		<?php $k=0; ?>
		@for($i=count($jobs)-1;$i>=0;$i--)
			<div class="category" id="<?php echo str_replace(" " , "-", $jobs[$k]->category); ?>">
				
				<div class="left_floated_heading">
					<h2 class="list_heading">{{$counts[$k]->category}} </h2>
				</div>
				<div class="right_floated_heading">
					<h2 > <img src="images/android_count_icon.png" class="count-icon">{{$counts[$k]->cnt}} Jobs </h2>
				</div>
				
		
				<div class="job_list">
					<table style="width:100%" >
						<tr>
							<th>Date Posted On</th> <th>Title</th> <th>Job Type</th> <th>Location</th>
						</tr>
						@for($j=$counts[$k]->cnt;$j>0;$j--)
							<tr>
								<td>{{ $jobs[$i]->created_at }}</td><td><a href="{{ URL::route('job.show',array('id'=>$jobs[$i]->id)) }}">{{$jobs[$i]->title}}</a></td> <td>{{ $jobs[$i]->type }}</td> <td>{{$jobs[$i]->location}}</td>
							</tr>

							<?php $i--; ?>	
						@endfor
						
					
					</table>
				</div>

				


				

			</div>




			
			
			<?php $k++; 
				$i++;
			?>
			<br>

		@endfor
		


		

	</div>
	
					

@stop