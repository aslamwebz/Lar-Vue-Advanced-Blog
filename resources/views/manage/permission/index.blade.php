@extends('layouts.manage')
    
@section('content')


<div id="user-table">
	<div class="container pt-md-4">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1  class="title">Manage Permissions</h1>
			</div>
			<div class="col-md-12">
				<a href="{{route('permission.create')}}" class="btn btn-primary"><i class="fa fa-user-plus"></i> Create Permission</a>
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
				@foreach($permissions as $permission)
					<tr>
						<td>{{$permission->id}}</td>
						<td><a href="{{route('permission.show', $permission->id)}}">{{$permission->name}}</a></td>
						<td>{{$permission->display_name}}</td>
						<td>{{$permission->description}}</td>
						<td><a href="{{route('permission.show', $permission->id)}}" class="btn btn-primary btn-sm">View Permission</a><a href="{{route('permission.edit', $permission->id)}}" class="btn btn-info btn-sm">Edit Permission</a></td>
					</tr>
				@endforeach
			</tbody>
		</table>
		{{-- {{$permissions->links()}} --}}
	</div>
</div>
@endsection