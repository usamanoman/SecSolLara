@extends('forumlayout.default')



@section('forum')
	<?php $i=0; ?>
	@foreach($forums as $forum)
	<tr>
		<td><a href="{{ URL::route('forum.show',array('id'=>$forum->id)) }}">{{ $forum->title }}</a><br><span class="sub_heading"> -- {{ $forum->description }}</span></td>
		<td>{{ count($forum->topics)}}</td>
		<td>{{ count($forum->topics)+ count($forum->replies) }}</td>
	</tr>
	<?php $i++; ?>
	@endforeach
@stop