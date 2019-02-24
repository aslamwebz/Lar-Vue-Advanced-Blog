@extends('layouts.manage')


@section('content')
	<div id="create">
		<div class="container">
			<div class="row pt-md-6 pb-md-6">
				<div class="col-md-12 text-center title">Edit User</div>
			</div>
			<div class="col-md-12">
				<form action="{{route('users.update', $user->id)}}" method="POST">
				    @csrf
				    @method('PUT')
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<div class="label">Name</div>
								<input type="text" name="name" id="name" class="form-control" value="{{$user->name}}">
							</div>
							<div class="form-group">
								<div class="label">Email</div>
								<input type="text" name="email" id="email" class="form-control" value="{{$user->email}}">
							</div>
						
						<br>
						<div class="col-md-12">
							<b-radio v-model="password_options" native-value="keep">Do not change password</b-radio>
						</div>
						<div class="col-md-12">
							<b-radio v-model="password_options" native-value="auto">Auto generate new password</b-radio>
						</div>
						<div class="col-md-12">
							<b-radio v-model="password_options" native-value="manual">Manyally set new password</b-radio>
							
						</div>
						<div class="col-md-12">
								<input type="text" class="form-control" id="password" name="password" v-if="password_options == 'manual'">
							</div>
						<input type="hidden" name="roles" :value="roleSelected">
						<div class="col-md-12">
							<br>
							<button class="btn btn-success">Update User</button>
						</div>
						</div>
						<div class="col-md-6">
							<div class="container">
								{{-- <b-checkbox-group > --}}
									@foreach($roles as $role)
									<div class="row">
										<b-checkbox v-model="roleSelected" native-value="{{$role->name}}">{{$role->display_name}} <em>{{$role->description}}</em></b-checkbox>
										</div>
									@endforeach
								{{-- </b-checkbox-group> --}}
							</div>
						</div>
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
			password_options:'keep',
			roleSelected:{!!$user->roles->pluck('name') !!}
		}
		});
</script>

@endsection