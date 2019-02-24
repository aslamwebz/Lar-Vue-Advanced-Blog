@extends('layouts.manage')


@section('content')
	<div id="create">
		<div class="container">
			<div class="row pt-md-6 pb-md-6">
				<div class="col-md-12 text-center">Create New Role</div>
			</div>
			<form action="{{route('role.store')}}" method="POST">
				<div class="row">
					    @csrf
					<div class="col-md-6">
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
						<input type="hidden" name="permissions" :value="permissionSelected">				
						<button class="btn btn-success">Create Role</button>
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
@endsection


@section('scripts')
	<script>
	var app = new Vue({
		el:'#app',
		data:{
			permissionSelected:[]
		}
	});
	</script>
@endsection


