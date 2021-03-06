@extends('forumlayout.default')



@section('forum')
	<?php $i=0; ?>
	@foreach($forums as $forum)
	<tr>
		<td><a href="{{ URL::route('forum.show',array('id'=>$forum->id)) }}">{{ $forum->title }}</a><br><span class="sub_heading"> -- {{ $forum->description }}</span></td>
		<td>{{ count($forum->topics)}}</td>
		<td>{{ count($forum->topics)+ count($forum->replies) }}</td>
		@if(Auth::user()->role == 'Admin')
			<td>
				{{Form::open(array('method'=>'DELETE', 'url'=>'forum/'.$forum->id))}}
				<button>Remove</button>
				{{Form::close()}}
			</td>
			<td><a href="{{URL::route('forum.edit',array('id'=>$forum->id))}}">Edit</a></td>
			
		@endif
	</tr>
	<?php $i++; ?>
	@endforeach
@stop