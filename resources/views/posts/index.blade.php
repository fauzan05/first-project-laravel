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
        @php($post = explode("," , $post))
        <div class="container text-center">
            <div class="card mb-3">
                <div class="card-body">
                    <h5 class="card-title">{{ $post[0] }}</h5>
                    <p class="card-text">{{ $post[1] }}</p>
                    <p class="card-text">{{ $post[2] }}</p>
                    <p class="card-text"><small class="text-body-secondary">Last updated {{ date("d M Y H:i", strtotime($post[3])) }}</small></p>
                    <a href="{{ url("posts/$post[0]") }}" type="button" class="btn btn-primary">Selengkapnya</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

</body>

</html>