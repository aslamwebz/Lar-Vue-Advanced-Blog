@extends('layouts.manage')

@section('content')

<div id="show">
	<div class="container">
		<h1 class="text-center pt-md-6">User Details</h1>
		<div class="row">
			<div class="col-md-6">
				<br>
				<div class="form-group">
					<br>
					<label for="">Full Name</label>
					<input type="text" class="form-control" readonly value="{{$user->name}}">
				</div>
				<div class="form-group">
					<br>
					<label for="">E-mail</label>
					<input type="text" class="form-control" readonly value="{{$user->email}}">
				</div>
				<div class="form-group">
					<br>
					<label for="">Create Date</label>
					<input type="text" class="form-control" readonly value="{{$user->created_at}}">
				</div>
				<form action="{{route('users.destroy', $user->id)}}" method="post">
					@csrf
					@method('DELETE')
					<a href="{{route('users.edit', $user->id)}}" class="btn btn-primary">EDIT</a>
					<button class="btn btn-danger">DELETE</button>
					<a href="{{route('users.index')}}" class="btn btn-primary">CANCEL</a>
				</form>
			</div>
			<div class="col-md-6 pt-md-6">
				<div class="container">
					<ul class="list-group list-group-flush">
					<li class="list-group-item">{{$user->roles->count() == 0 ? 'This user has no roles assigned yet':''}}</li>
					@foreach($user->roles as $r)
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