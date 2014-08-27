@extends('forumlayout.single')



@section('forum')
	<div class="job_listing" >
		<div class="left_floated_heading_forum">
		<h2 class="post_heading">{{$forum->title}}</h2>
	</div>
	<div class="right_floated_heading_forum">
		<h2  class="post_heading"><a href="{{ URL::route('topic.create') }}">{{HTML::image('images/android_count_icon.png','Count Icon',array('class'=>'count-icon'))}} Create A New Post</a></h2>
	</div>
			
		<div class="forum_table_container" style="clear:both;">
			<table class="forum_table">
				<tr>
					<th>Topic</th>
					<th>Posts</th>
					<th>Started By</th>
				</tr>
				
				
		
	@foreach($forum->topics as $topic)
	<tr>
		<td><a href="{{ URL::route('topic.show',array('id'=>$topic->id)) }}">{{$topic->title}}</a></td>
		<td>{{count($topic->replies) + 1}}</td>
		<td>{{ $topic->user->firstname . " " . $topic->user->lastname  }}</td>
	</tr>
	@endforeach

	</table>
		</div>
	</div>

@stop