@extends('layouts.manage')

@section('content')

<style>
	.list-group{
		padding-top: 70px;
	}
	.list-group-item{
		font-size: 14px;
		padding: 5px 10px;
	}
</style>

<div id="show">
	<div class="container">
		<h1 class="text-center pt-md-6">Role Details</h1>
		<div class="row">
			<div class="col-md-6">
				<br>
				<div class="form-group">
					<br>
					<label for="">Role Name</label>
					<input type="text" class="form-control" readonly value="{{$role->name}}">
				</div>
				<div class="form-group">
					<br>
					<label for="">Role Display Name</label>
					<input type="text" class="form-control" readonly value="{{$role->display_name}}">
				</div>
				<div class="form-group">
					<br>
					<label for="">Role Description</label>
					<input type="text" class="form-control" readonly value="{{$role->description}}">
				</div>
				{{-- <form action="{{route('permission.destroy', $permission->id)}}" method="post"> --}}
					{{-- @csrf --}}
					{{-- @method('DELETE') --}}
					<a href="{{route('role.edit', $role->id)}}" class="btn btn-primary">EDIT</a>
					{{-- <button class="btn btn-danger">DELETE</button> --}}
					<a href="{{route('role.index')}}" class="btn btn-primary">CANCEL</a>
				{{-- </form> --}}
			</div>
			<div class="col-md-6">
				<div class="container">
					<ul class="list-group list-group-flush">
					@foreach($role->permissions as $r)
						<li class="list-group-item">X - {{$r->name}} <em> ( {{$r->description}} ) </em></li>
					@endforeach
					</ul>
				</div>
			</div>
		</div>
		

{{-- <img src="{{$employee->image}}" alt="" height="500px"> --}}
	</div>
</div>

@endsection