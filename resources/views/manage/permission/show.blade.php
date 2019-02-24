@extends('layouts.manage')

@section('content')

<div id="show">
	<div class="container">
		<h1 class="text-center pt-md-6">Permission Details</h1>
		<div class="row">
			<div class="col-md-8">
				<br>
				<div class="form-group">
					<br>
					<label for="">Permission Name</label>
					<input type="text" class="form-control" readonly value="{{$permission->name}}">
				</div>
				<div class="form-group">
					<br>
					<label for="">Permission Display Name</label>
					<input type="text" class="form-control" readonly value="{{$permission->display_name}}">
				</div>
				<div class="form-group">
					<br>
					<label for="">Permission Description</label>
					<input type="text" class="form-control" readonly value="{{$permission->description}}">
				</div>
				{{-- <form action="{{route('permission.destroy', $permission->id)}}" method="post"> --}}
					{{-- @csrf --}}
					{{-- @method('DELETE') --}}
					<a href="{{route('permission.edit', $permission->id)}}" class="btn btn-primary">EDIT</a>
					{{-- <button class="btn btn-danger">DELETE</button> --}}
					<a href="{{route('permission.index')}}" class="btn btn-primary">CANCEL</a>
				{{-- </form> --}}
			</div>
		</div>
		

{{-- <img src="{{$employee->image}}" alt="" height="500px"> --}}
	</div>
</div>

@endsection