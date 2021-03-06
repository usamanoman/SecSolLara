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
				
				
		
	@for($i=count($forum->topics)-1;$i>=0;$i--)
	<tr>
		<td><a href="{{ URL::route('topic.show',array('id'=>$forum->topics[$i]->id)) }}">{{$forum->topics[$i]->title}}</a></td>
		<td>{{count($forum->topics[$i]->replies) + 1}}</td>
		<td>{{ $forum->topics[$i]->user->firstname . " " . $forum->topics[$i]->user->lastname  }}</td>
	</tr>
	@endfor

	</table>
		</div>
	</div>

@stop