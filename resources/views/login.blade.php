@extends('layout.guest')
@section('title', 'Login Page')
@section('header')
    <p class="fs-1 fw-bold">Amazing E-Book</p>
@endsection
@section('content')
    <div>
        <div class="container d-flex justify-content-center">
            <p class="fs-3 fw-bold" style="text-decoration: underline">Log In</p>
          </div>
        <form action="/login" method="POST" class="w-25 m-auto">
            {{ csrf_field() }}
            <div class="form-group mb-3">
                Email address:
                <input type="email" name="email" class="form-control" aria-describedby="emailHelp" placeholder="example@mail.com">
            </div>
            <div class="form-group mb-3">
                Password:
                <input type="password" name="password" class="form-control" placeholder="Password">
            </div>
            <div class="d-flex flex-column justify-content-center mb-3">
                <button type="submit" class="btn btn-outline-primary">Submit</button>
            </div>
            <a href="/signup">Don't have an account? click here to sign up</a>
        </form>

    </div>
@endsection
