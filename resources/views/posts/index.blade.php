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
            <div class="card shadow-sm p-3 mb-3 bg-light">
                <h4 class="fw-bold">{{ $post->title }}</h4>
                <p class="text-secondary">{{ $post->content }}</p>
            </div>
            <div class="d-flex gap-2">
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">
                    <i class="fas fa-edit"></i> Edit
                </a>
            
                <form action="{{ route('posts.delete', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this post?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">
                        <i class="fas fa-trash-alt"></i> Delete
                    </button>
                </form>
            </div>
            
        </div>
    </div>
    @endforeach
</div>
@endsection
