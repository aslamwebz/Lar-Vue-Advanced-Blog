@extends('layouts.manage')


@section('content')
	<div id="create">
		<div class="container">
			<div class="row pt-md-6 pb-md-6">
				<div class="col-md-12 text-center">Create New User</div>
			</div>

			<div class="col-md-6 offset-md-3">
				<form action="{{route('users.store')}}" method="POST">
					    @csrf
					<div class="form-group">
						<div class="label">Name</div>
						<input type="text" name="name" id="name" class="form-control">
					</div>
					<div class="form-group">
						<div class="label">Email</div>
						<input type="text" name="email" id="email" class="form-control">
					</div>
					<div class="form-group">
						<div class="label">Password</div>
						<input type="text" name="password" id="password" class="form-control" {{-- v-if="!auto_password" --}}>
						{{-- <div class="custom-control custom-checkbox">
							  <input type="checkbox" name="auto_generate" v-model="auto_password" class="custom-control-input" id="customCheck1" placeholder="Check this box">
							  <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
						</div> --}}
					</div>

					<div class="form-group">
						<div class="label">Confirm Password</div>
						<input type="text" name="password_confirmation" id="password-confirm" class="form-control" {{-- v-if="!auto_password" --}}>
						<div class="{{-- custom-control custom-checkbox --}}">
							  <input type="checkbox" name="auto_generate"{{--  v-model="auto_password" --}} class="{{-- custom-control-input --}}" id="customCheck1" placeholder="Check this box">
							  <label class="{{-- custom-control-label --}}" for="customCheck1">Check this custom checkbox</label>
						</div>
					</div>

				{{-- 	<input v-model="message" placeholder="edit me">
					<p>Message is: @{{ message }}</p> --}}

					<button class="btn btn-success">Create User</button>
				</form>
			</div>

		</div>
	</div>


{{-- <div id="app-2">
  <span v-bind:title="message">
    Hover your mouse over me for a few seconds
    to see my dynamically bound title!
  </span>
</div> --}}


@endsection


