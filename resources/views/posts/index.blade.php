@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Blog Management</h2>
    <form action="/post" method="POST">
        @csrf
        <div class="mb-3">
            <input type="text" name="title" class="form-control" placeholder="Title">
        </div>
        <div class="mb-3">
            <textarea name="content" class="form-control" placeholder="Content"></textarea>
        </div>
        <button type="submit" class="btn btn-success">+ Create Post</button>
    </form>

    <h3 class="mt-4">All Posts</h3>
    @foreach($posts as $post)
    <div class="card mt-3">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>
            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
    @endforeach
</div>
@endsection
