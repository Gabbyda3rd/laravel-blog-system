<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog System</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <!-- Blog Title -->
                <h2 class="text-center mb-4 fw-bold">📝 Blog Management</h2>

                <!-- Create Post Form -->
                <div class="card shadow-sm p-4 mb-4">
                    <form action="{{ route('posts.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-bold">Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter post title">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Content</label>
                            <textarea name="content" class="form-control" rows="3" placeholder="Write your post here..."></textarea>
                        </div>
                        <button type="submit" class="btn btn-success w-100 fw-bold">+ Create Post</button>
                    </form>
                </div>

                <!-- Display All Posts -->
                <h3 class="mb-3 fw-bold">📌 All Posts</h3>
                @foreach($posts as $post)
                    <div class="card shadow-sm p-3 mb-3">
                        <h5 class="fw-bold">{{ $post->title }}</h5>
                        <p class="text-muted">{{ $post->content }}</p>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
