@extends('layouts.app')

@section('content')

  <div class="container">
    <h1>{{ $post->title  }}</h1>
    <h5>{{ $post->content  }}</h5>
    <div>
    <a class="btn btn-info" href="{{ route('admin.posts.edit', $post) }}">EDIT</a>
  </div>
  </div>
  

@endsection