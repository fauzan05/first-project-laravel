<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.0-dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <title>@yield('title')</title>
</head>

<body>
    @include('layouts.app.header')
    @yield('content')
    @include('layouts.app.footer')
    </div>
</body>

</html>