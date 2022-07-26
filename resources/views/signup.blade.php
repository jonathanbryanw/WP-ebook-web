@extends('layout.guest')
@section('title', 'Sign Up Page')
@section('header')
    <p class="fs-1 fw-bold">Amazing E-Book</p>
@endsection
@section('content')
    <div>
        <div class="container d-flex justify-content-center">
            <p class="fs-3 fw-bold" style="text-decoration: underline">Sign Up</p>
        </div>
        <form action="/signup" method="post" class="d-flex justify-content-center">
            <div class="container">
                <div class="row row-cols-2">
                    <div class="form-group mb-3 col">
                        First Name:
                        <input type="text" name="firstn" class="form-control">
                    </div>
                    <div class="form-group mb-3 col">
                        Middle Name:
                        <input type="text" name="middlen" class="form-control">
                    </div>
                    <div class="form-group mb-3 col">
                        Last Name:
                        <input type="text" name="lastn" class="form-control">
                    </div>
                    <div class="form-group mb-3 col">
                        Email address:
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group mb-3 col">
                        Gender:
                        <div class="flex-column">
                            <input class="form-check-input" type="radio" value="1" id="radio1">
                            <label class="form-check-label" for="radio1">
                            Male
                            </label>
                            <input class="form-check-input" type="radio" value="2" id="radio2">
                            <label class="form-check-label" for="radio2">
                            Female
                            </label>
                        </div>
                    </div>
                    <div class="form-group mb-3 col">
                        Role:
                        <select class="form-select">
                            <option selected></option>
                            <option value="1">Admin</option>
                            <option value="2">User</option>
                        </select>
                    </div>
                    <div class="form-group mb-3 col">
                        Password
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group mb-3 col">
                        Display Picture:
                        <input type="file" class="form-control" id="inputGroupFile01">
                    </div>
                </div>
                <div class="d-flex flex-column justify-content-center">
                    <button type="submit" class="btn btn-outline-primary">Submit</button>
                </div>
                <a href="/login/">Already have an account? click here to log in</a>
            </div>
        </form>
    </div>
@endsection
