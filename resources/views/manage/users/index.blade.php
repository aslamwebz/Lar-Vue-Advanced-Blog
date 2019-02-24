@extends('layouts.manage')
    
@section('content')


<div id="user-table">
	<div class="container pt-md-4">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1 class="title">Manage Users</h1>
			</div>
			<div class="col-md-12">
				<a href="{{route('users.create')}}" class="btn btn-primary"><i class="fa fa-user-plus"></i> Create User</a>
			</div>
		</div>


		<table class="table table-bordered table-condensed mt-md-4">
			<thead class="thead-dark text-light">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Date Created</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($users as $user)
					<tr>
						<td>{{$user->id}}</td>
						<td><a href="{{route('users.show', $user->id)}}">{{$user->name}}</a></td>
						<td>{{$user->email}}</td>
						<td>{{$user->created_at}}</td>
						<td><a href="{{route('users.show', $user->id)}}" class="btn btn-info btn-sm">View User</a><a href="{{route('users.edit', $user->id)}}" class="btn btn-info btn-sm">Edit User</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{-- {{$users->links()}} --}}
	</div>
</div>













@endsection