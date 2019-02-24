@extends('layouts.manage')
    
@section('content')


<div id="user-table">
	<div class="container pt-md-4">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1 class="title">Manage Roles</h1>
			</div>
			<div class="col-md-12">
				<a href="{{route('role.create')}}" class="btn btn-primary"><i class="fa fa-user-plus"></i> Create Role</a>
			</div>
		</div>


		<table class="table table-bordered table-condensed mt-md-4">
			<thead class="thead-dark text-light">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Display Name</th>
					<th>Description</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				@foreach($roles as $role)
					<tr>
						<td>{{$role->id}}</td>
						<td><a href="{{route('role.show', $role->id)}}">{{$role->name}}</a></td>
						<td>{{$role->display_name}}</td>
						<td>{{$role->description}}</td>
						<td><a href="{{route('role.show', $role->id)}}" class="btn btn-primary btn-sm">View role</a><a href="{{route('role.edit', $role->id)}}" class="btn btn-info btn-sm">Edit Role</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{-- {{$permissions->links()}} --}}
	</div>
</div>


@endsection


