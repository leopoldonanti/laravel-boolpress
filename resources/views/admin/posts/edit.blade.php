@extends('layouts.app')

@section('content')

  <div class="container">
    <h1>Modifica:{{ $post->title  }}</h1>
    <div>
      <form action="{{route('admin.posts.update',$post)}}" method="POST ">
        @csrf
        @method('PATCH')

        <div class="mb-3">
          <label class="label-control" for="title">TITLE</label>
          <input type="text" id="title" name="title" value="{{ $post->title }}" class="form-control">
        </div>

      </form>
    

    </div>
    <a class="btn btn-primary" href="{{ route('admin.posts.show', $post) }}">SHOW</a>
  </div>
  

@endsection