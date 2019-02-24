@extends('layouts.manage')

@section('content')

<div id="post-index">
	<div class="container-fluid pt-md-6">
		<div class="row">
			<div class="col-md-12">
				<h1 class="title">Edit Post</h1>
			</div>
		</div>
		<br>

{{$post->title}}

		<form action="{{route('posts.update', $post->id)}}" method="POST">
			<div class="row">
				@csrf
				@method('put')
				<div class="col-md-9 ">
					<div class="form-group">
						<input type="text"  class="form-control" v-model="title" name="title">
					</div>
					<p>{{url('/blog')}}/@{{slug}}</span></p>
					<input type="hidden" v-model="slug" name="slug">
				</div>
				<div class="col-md-9 ">
					<div class="form-group">
						<textarea name="content"  id="" cols="30" rows="30" class="form-control" >{{$post->content}}</textarea>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Post Excerpt" name="excerpt" value="{{$post->excerpt}}">
					</div>
				</div>
				<div class="col-md-3 pt-md-2">
				 	<div class="card">
				 		<div class="card-body">
				 			<div class="media align-items-center">
								<span class="avatar avatar-sm rounded-circle">
							  		<img alt="Image placeholder" src="{{asset('assets/img/theme/team-4-800x800.jpg')}}">
								</span>

								<div class="media-body ml-2 d-none d-lg-block">
									<span class="mb-0 text-sm font-weight-bold">{{ Auth::user()->name }} </span>
									<h5>({{ Auth::user()->name }})</h5>
								</div>
							</div>
							<div class="media align-items-center">
								<span class="avatar avatar-sm rounded-circle">
									<i class="fa fa-sticky-note"></i>
								</span>

								<div class="media-body ml-2 d-none d-lg-block">
									<span class="mb-0 text-sm font-weight-bold"><strong>Draft</strong> Saved</span>
									<h5>(A few minutes ago)</h5>
								</div>
							</div>
							<div class="row">
							<div class="col-md-6">
								<button class="btn btn-default">Save Draft</button>
							</div>
							<div class="col-md-6">
								<button class="btn btn-success">Publish</button>
							</div>
							</div>
				 		</div>
				 	</div>
				</div>
			</div>
		</form>

	</div>
</div>


@endsection


@section('scripts')
	<script>
		var app = new Vue({
		  el: '#app',
		  data: {
		    title: '{!!$post->title!!}',
		  },
		  computed: {
		    slug: function() {
		      var slug = this.sanitizeTitle(this.title);
		      return slug;
		    }
		  },
		  methods: {
		    sanitizeTitle: function(title) {
	    	var url ="{!!url('/blog')!!}/";
	    	console.log(url);
		      var slug = url;
		      // Change to lower case
		      var slug = slug + title.toLowerCase();
		      slug = slug.replace(/\s*$/g, '');
		      slug = slug.replace(/\s+/g, '-');
		      return slug;
		    }
		  }
		});
	</script>
@endsection