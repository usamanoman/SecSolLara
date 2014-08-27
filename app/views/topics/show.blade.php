@extends('forumlayout.single')



@section('forum')
<div class="job_listing" >
		<div class="left_floated_heading_forum">
		<h2 class="post_heading">{{$topic->title}}</h2>
	</div>
	<div class="right_floated_heading_forum">
		<h2  class="post_heading"><a href="#user_reply_form">{{HTML::image('images/android_count_icon.png','Count Icon',array('class'=>'count-icon'))}} Reply</a></h2>
	</div>

		
					<div class="full_topic_content" style="clear:both;">
						<div class="user_forum_post">
								<div class="row">
									<div class="col-lg-4">
										<p><b>{{ $topic->user->firstname . " " .  $topic->user->lastname }}</b></p>
										<p><b>Date Posted On: {{$topic->created_at}}</b></p>
									</div>
									<div class="col-lg-8">
										<p>				
											{{$topic->content;}}
										</p>
									</div>
									
								</div>
						</div>
						

						@foreach($topic->replies as $reply)
						<div class="user_forum_reply">
								<div class="row">
									<div class="col-lg-4">
										<p><b>{{$reply->user->firstname . " " . $reply->user->lastname}}</b></p>
										<p><b>Date Posted On: {{$reply->created_at}}</b></p>
									</div>
									<div class="col-lg-8">
										<p>				
											{{$reply->content}}
										</p>
									</div>
									
								</div>
						</div>

						@endforeach



						




						<?php $getting_topicid=$topic->id; ?>
						<div id="user_reply_form" class="user_reply_form">
								{{Form::open(array('action' => 'RepliesController@store', 'role'=>'form','class'=>'form-horizontal'))}}
								  <div class="form-group">
								    <label for="reply" class="col-sm-2 control-label">Reply</label>
								    <div class="col-sm-10">
								      {{ Form::textarea('content', null, ['class' => 'form-control','id'=>'reply']) }}
								    </div>
								  </div>
								  <div class="form-group">
								    <div class="col-sm-offset-2 col-sm-10">
								       {{ Form::text('topic_id',$getting_topicid ,array('style'=>'display:none;'))}}
								       {{ Form::submit('Reply', array('class'=>'btn btn-large btn-primary btn-block'))}}

								    </div>
								  </div>
								
								{{Form::close()}}
						</div>
						
					</div>



				
				
			
	</div>

@stop