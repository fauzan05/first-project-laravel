<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.3.0-dist/css/bootstrap.min.css') }}">
    <script src="{{ asset('bootstrap-5.3.0-dist/js/bootstrap.bundle.min.js') }}" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <title>Blog | Buat Postingan</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="height: 100vh;">
        <h1 class="text-center col-md-12">Buat Postingan Baru</h1>
            <div class="col-md-5">
                <form method="get">
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" name="title" class="form-control" id="judul">
                    </div>
                    <div class="mb-3">
                        <label for="konten" class="form-label">Konten</label>
                        <input type="text" name="content" class="form-control" id="konten">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>