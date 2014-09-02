@extends('layouts.default')



@section('content')
	<div class="category" style="margin-top:100px">
		<table class="table table-bordered">
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Role</th>
				<th>Premium</th>
				<th>Delete</th>
				<th>Edit</th>
			</tr>
			@foreach($users as $user)
			<tr>
				<td>{{ $user->firstname . " " . $user->lastname }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->role }}</td>
				<td><?php if($user->ispremium==0){echo "No"; } else  { echo "Yes"; } ?></td>
				<td>
				{{Form::open(array('method'=>'DELETE', 'url'=>'user/'.$user->id))}}
				<button>Remove</button>
				{{Form::close()}}
				</td>
				<td><a class="nav-to" href="{{ URL::route('user.edit',array('id'=> $user->id)) }}">Edit Profile</a></td>
			</tr>
			@endforeach

		</table>
		
		

	</div>
	
					

@stop