@extends('layouts.app')

@section('content')
<a href="{{route('posts.index')}}" class="btn btn-danger">Back</a>

    @csrf
    <div class="card">
        <div class="card-header">
            Post Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text"> {{$post->title}} </p>

            <h5 class="card-title">Description</h5>
            <p class="card-text"> {{$post->description}} </p>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Post Creator Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Name</h5>
            <p class="card-text"> {{$post->user->name}} </p>

            <h5 class="card-title">Email</h5>
            <p class="card-text"> {{$post->user->email}} </p>

            <h5 class="card-title">Created at</h5>
            <p class="card-text">{{date('l jS \of F, Y, g:i:s A', strtotime($post->created_at))}} </p>
        </div>
    </div>

@endsection
