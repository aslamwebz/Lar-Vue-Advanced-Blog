@extends('layouts.manage')

@section('content')

<style>

</style>

<div id="post-index">
	<div class="container pt-md-6">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1 class="title">Manage Posts</h1>
			</div>
			@permission('create-posts')
			<div class="col-md-12">
				<a href="{{route('posts.create')}}" class="btn btn-primary"><i class="fa fa-user-plus"></i> Create Blog Post</a>
			</div>
			@endpermission
		</div>
		<div class="row pt-md-3">
			<div class="card-columns">
				@foreach($posts as $post)
					<div class="card">
						<div class="card-header">
							{{$post->title}} by {{$users[$post->author_id - 1]->name}}
						</div>
						<div class="card-body">
							{{$post->excerpt}}
						</div>
						<div class="card-footer">
							{{$post->created_at}}
						</div>
						<div class="card-footer">
							<form action="{{route('posts.destroy', $post->id)}}" method="POST">
								@csrf
								@method('delete')
							<a href="{{route('posts.edit', $post->id)}}" class="btn btn-info btn-sm">Edit Post</a>
							<button class="btn btn-danger btn-sm">Delete Post</button>
							</form>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>

@endsection