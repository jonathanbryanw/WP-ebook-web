@extends('layout.guest')
@section('title', 'Index Page')
@section('header')
    <p class="fs-1 fw-bold">Amazing E-Book</p>
    <a class="btn btn-warning" role="button" href="/signup">Sign Up</a>
    <a class="btn btn-warning" role="button" href="/login">Log In</a>
@endsection
@section('content')
<span class="border border-5 rounded-circle">
    <div class="container-fluid">
        <h1 class="text-center">Find and Rent Your E-Book Here</h1>
    </div>
</span>
@endsection
