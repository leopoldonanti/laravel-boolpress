@extends('layouts.app')

@section('content')

  <div class="container">
    <h1>I miei post</h1>
    <table class="table">
      <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th colspan="3">Actions</th>
      </tr>
      </thead>
      <tbody>
        @foreach($posts as $post)
          <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>
              <a class="btn btn-primary" href="{{ route('admin.posts.show', $post) }}">SHOW</a>
            </td>
            <td><a class="btn btn-info" href="{{ route('admin.posts.edit', $post) }}">EDIT</a></td>
            <td>DELETE</td>
            
          </tr>
        @endforeach
      </tbody>
    </table>
  </div>

@endsection