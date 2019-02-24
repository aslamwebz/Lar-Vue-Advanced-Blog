@extends('layouts.manage')

@section('content')
@permission('create-posts')
<div id="post-index">
	<div class="container-fluid pt-md-6">
		<div class="row">
			<div class="col-md-12">
				<h1 class="title">Add a new Blog Post</h1>
			</div>
		</div>
		<br>
		<form action="{{route('posts.store')}}" method="POST">
			<div class="row ">
				@csrf
				<div class="col-md-9 ">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Post Title" v-model="title" name="title">
					</div>
					<div class="form-group">
						<label for="">Slug</label>
						<p><span><strong>@{{slug}}</strong></span></p>
						<input type="hidden" v-model="slug" name="slug">
					</div>
				</div>
				<div class="col-md-9 ">
					<div class="form-group">
						<textarea name="content" class="editor" placeholder="Compose Your Ideas" id="" cols="30" rows="30" class="form-control"></textarea>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Post Excerpt" name="excerpt">
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

@endpermission
@endsection


@section('scripts')
	<script>
		// var app = new Vue({
		// 	el:'#app',
		// 	data:{
		// 		title:''
		// 	}
		// });

		var app = new Vue({
		  el: '#app',
		  data: {
		    title: '',
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
		      // // Letter "e"
		      // slug = titleLower.replace(/e|é|è|ẽ|ẻ|ẹ|ê|ế|ề|ễ|ể|ệ/gi, 'e');
		      // // Letter "a"
		      // slug = slug.replace(/a|á|à|ã|ả|ạ|ă|ắ|ằ|ẵ|ẳ|ặ|â|ấ|ầ|ẫ|ẩ|ậ/gi, 'a');
		      // // Letter "o"
		      // slug = slug.replace(/o|ó|ò|õ|ỏ|ọ|ô|ố|ồ|ỗ|ổ|ộ|ơ|ớ|ờ|ỡ|ở|ợ/gi, 'o');
		      // // Letter "u"
		      // slug = slug.replace(/u|ú|ù|ũ|ủ|ụ|ư|ứ|ừ|ữ|ử|ự/gi, 'u');
		      // // Letter "d"
		      // slug = slug.replace(/đ/gi, 'd');
		      // Trim the last whitespace
		      slug = slug.replace(/\s*$/g, '');
		      // Change whitespace to "-"
		      slug = slug.replace(/\s+/g, '-');
		      
		      return slug;
		    }
		  }
		});
	</script>
@endsection