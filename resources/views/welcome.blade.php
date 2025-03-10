<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Blog Management</h2>

        <form action="/posts" method="POST">
            @csrf
            <input type="text" name="title" class="form-control mb-2" placeholder="Title">
            <textarea name="content" class="form-control mb-2" placeholder="Content"></textarea>
            <button type="submit" class="btn btn-success">➕ Create Post</button>
        </form>

        <hr>

        <h3>All Posts</h3>
        <ul class="list-group">
            @foreach ($posts as $post)
                <li class="list-group-item">
                    <strong>{{ $post->title }}</strong> <br>
                    {{ $post->content }}
                </li>
            @endforeach
        </ul>
    </div>
</body>
</html>
