@extends('layouts.manage')


@section('content')
	<div id="create">
		<div class="container">
			<div class="row pt-md-6 pb-md-6">
				<div class="col-md-12 text-center">Edit Permission</div>
			</div>

			<div class="col-md-6 offset-md-3">
				<form action="{{route('permission.update', $permission->id)}}" method="POST">
					    @csrf
					    @method('PUT')
					<div class="form-group">
						<div class="label">Name</div>
						<input type="text" name="name" id="name" class="form-control" value="{{$permission->name}}">
					</div>
					<div class="form-group">
						<div class="label">Display Name</div>
						<input type="text" name="display_name" id="display_name" class="form-control" value="{{$permission->display_name}}">
					</div>
					<div class="form-group">
						<div class="label">Description</div>
						<input type="text" name="description" id="dscription" class="form-control" value="{{$permission->description}}">
					</div>					
					<button class="btn btn-success">Update Permission</button>
				</form>
			</div>

		</div>
	</div>
@endsection


