@extends('layouts.manage')


@section('content')
	<div id="create">
		<div class="container">
			<div class="row pt-md-6 pb-md-6">
				<div class="col-md-12 text-center">Create New Permission</div>
			</div>

			<div class="col-md-6 offset-md-3">
				<form action="{{route('permission.store')}}" method="POST">
					    @csrf
					<div class="form-group">
						<div class="label">Name</div>
						<input type="text" name="name" id="name" class="form-control">
					</div>
					<div class="form-group">
						<div class="label">Display Name</div>
						<input type="text" name="display_name" id="display_name" class="form-control">
					</div>
					<div class="form-group">
						<div class="label">Description</div>
						<input type="text" name="description" id="dscription" class="form-control">
					</div>					
					<button class="btn btn-success">Create Permission</button>
				</form>
			</div>

		</div>
	</div>
@endsection


