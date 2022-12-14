@extends('layouts.app')
@section('content')

<div class="container">
  <div class="row">
    @foreach($tag->posts()->orderBy('title','desc')->get() as $post)
    <div class="col-4">
      <article class="card">
        <a href="{{route('admin.posts.show',$post)}}">
          <h3>{{$post->title}}</h3>
          <p>{{$post->slug}}</p>
        </a>
      </article>
      
    </div>
    @endforeach
  </div>
</div>
@endsection