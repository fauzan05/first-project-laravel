@extends('layouts.app')

@section('title', 'Buat Postingan')

@section('button', 'Logout')

@section('content')
<div class="container">
<div class="row justify-content-center align-items-center p-0" style="height: 70vh;">
        <h1 class="text-center col-lg-12">Buat Postingan Baru</h1>
        <div class="col-lg-5">
            <form method="post" action="{{ url('posts') }}">
                @csrf
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
@endsection