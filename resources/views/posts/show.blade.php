<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog | {{ $post[1] }}</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.0-dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <script src="{{ asset('bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <article class="blog-post">
            <h2 class="display-5 link-body-emphasis mb-1">{{ $post[1] }}</h2>
            <p class="blog-post-meta">{{ date("d M Y H:i", strtotime($post[3])) }}<a href="#">Mark</a></p>
            <p>{{ $post[2] }}</p>
            <a href="{{ url("posts/") }}" type="button" class="btn btn-secondary">Kembali</a>
        </article>
    </div>
</body>

</html>