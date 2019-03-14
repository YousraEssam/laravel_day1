@extends('layouts.app')

@section('content')
<a href="{{route('posts.create')}}" class="btn btn-success">Create Post</a>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Creator Name</th>
      <th scope="col">Actions</th>

    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->title}}</td>
      <td>{{$post->description}}</td>
      <td>{{isset($post->user) ? $post->user->name : 'Not Found'}}</td>
      <td>
        <a href="{{route('posts.show', [$post->id])}}" class="btn btn-success">View</a>
        <a href="{{route('posts.edit', [$post->id])}}" class="btn btn-success">Edit</a>
        <form action="{{route('posts.destroy', [$post->id])}}" method="POST">
          @csrf
          @method('delete')
          <button class="btn btn-danger"> Delete </button>
        </form>
      </td>
    </tr>
    @endforeach

  </tbody>
</table>
@endsection