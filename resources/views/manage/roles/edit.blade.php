@extends('layouts.manage')

<style>
	.list-group{
	}
	.list-group-item{
		font-size: 14px;
		padding: 5px 10px;
	}
</style>

@section('content')
	<div id="create">
		<div class="container">
			<div class="row pt-md-6 pb-md-6">
				<div class="col-md-12 text-center">
					<h2>Edit Role</h2>
				</div>
			</div>
			<div class="container">
				<form action="{{route('role.update', $role->id)}}" method="POST">
					<div class="row">
						<div class="col-md-6">
						    @csrf
						    @method('PUT')
							<div class="form-group">
								<div class="label">Name</div>
								<input type="text" name="name" id="name" class="form-control" value="{{$role->name}}">
							</div>
							<div class="form-group">
								<div class="label">Display Name</div>
								<input type="text" name="display_name" id="display_name" class="form-control" value="{{$role->display_name}}">
							</div>
							<div class="form-group">
								<div class="label">Description</div>
								<input type="text" name="description" id="dscription" class="form-control" value="{{$role->description}}">
							</div>					
							<input type="hidden" :value="permissionSelected" name="permissions">
							<button class="btn btn-success">Update Role</button>
						</div>
						<div class="col-md-6">
							<div class="container">
								{{-- <b-checkbox-group > --}}
									@foreach($permissions as $permission)
									<div class="row">
										<b-checkbox v-model="permissionSelected" native-value="{{$permission->name}}">{{$permission->display_name}} <em>{{$permission->description}}</em></b-checkbox>
										</div>
									@endforeach
								{{-- </b-checkbox-group> --}}
							</div>
							<br>
						</div>
					</div>
				</form>
			</div>
		</div>			
	</div>
@endsection


@section('scripts')
	<script>
	var app = new Vue({
		el:'#app',
		data:{
			permissionSelected:{!!$role->permissions->pluck('name')!!}
		}
	});
	</script>
@endsection