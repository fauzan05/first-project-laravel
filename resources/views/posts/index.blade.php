<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.0-dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <title>Blog</title>
</head>

<body>

    <h1 class="text-center">My Blog</h1>
    <div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
        @php($number=1)
        @foreach($posts as $post)
        <div class="container text-center">
            <div class="border border-primary m-3">
                <h3>{{ $post[0] }}</h3>
                <p>{{ $number }}</p>
                <p>{{ $post[1] }}</p>
            </div>
            @php($number++)
            @endforeach
        </div>
    </div>

</body>

</html>