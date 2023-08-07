<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.0-dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <title>My Blog</title>
</head>

<body>

    <h1 class="text-center">My Blog
        <a href="{{ url('posts/create') }}" type="button" class="btn btn-primary mx-5">+ Buat Postingan</a>
    </h1>
    <div class="d-flex align-items-center justify-content-center" style="height: auto;">
        @foreach($posts as $post)
        <div class="container text-center">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ $post->content }}</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated {{ date("d M Y H:i", strtotime($post->created_at)) }}</small></p>
                    <a href="{{ url("posts/$post->id") }}" type="button" class="btn btn-primary">Selengkapnya</a>
                    <a href="{{ url("posts/$post->id/edit") }}" type="button" class="btn btn-success">Edit</a>
                </div>
                <form method="post" action="{{ url("posts/$post->id") }}">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Hapus</button>
                </form>
            </div>
            @endforeach
        </div>
    </div>

</body>

</html>