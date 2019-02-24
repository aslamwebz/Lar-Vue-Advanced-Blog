@extends('layouts.app')

<style>
    .card{
        border:none !important;
         -webkit-box-shadow: -1px 0px 53px 3px rgba(0,0,0,0.21);
        -moz-box-shadow: -1px 0px 53px 3px rgba(0,0,0,0.21);
        box-shadow: -1px 0px 53px 3px rgba(0,0,0,0.21) !important;
    }

    .card .card-body{
        min-height:140px;
    }   

    .card a{
        color:black;
        text-decoration: none !important;
    }
</style>

@section('content')
<div class="container ">
    <div class="row">
        <div class="col-md-12  pt-md-4 pb-md-4">
            <h1 class="title text-center">OUR LATEST BLOGS</h1>
        </div>
    </div>
   <div class="card-columns">
    @foreach($posts as $post)
      <div class="card">
        <a href="#">
        <img class="card-img-top" src="{{asset('assets/img/theme/team-4-800x800.jpg')}}" alt="Card image cap">
        <div class="card-body">
          <h3 class="card-title">{{$post->title}}</h3>
          <p class="card-text">{{$post->excerpt}}</p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated {{$post->created_at}}</small>
        </div>
        </a>
      </div>
    @endforeach
    </div>

</div>
@endsection
