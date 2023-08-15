@extends('layouts.app')

@section('title', 'Login')


@section('content')
<div class="container">
    <div class="row justify-content-center align-items-center" style="height: 70vh;">
        <div class="col-lg-5">
            <h1 class="text-center">Login Page</h1>
            @if(session()->has('error_message'))
            <div class="alert alert-danger">
                {{ session()->get('error_message') }}
            </div>
            @endif
            <form method="post" action="{{ url('login') }}">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-5">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary" style="width: 100%;">Login</button>
            </form>
        </div>
    </div>
    @endsection