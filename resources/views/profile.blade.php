@extends('layout.site')
@section('title', 'Home Page')
@section('content')
<div class="container">
    <form action="/updateProfile/{{$account->id}}" method="post" class="d-flex justify-content-center">
        {{ method_field('put') }}
        <div class="container">
            <div class="row row-cols-2">
                <div class="form-group mb-3 col">
                    First Name:
                    <input type="text" name="firstn" class="form-control" value="{{$account->first_name}}">
                </div>
                <div class="form-group mb-3 col">
                    Middle Name:
                    <input type="text" name="middlen" class="form-control" value="{{$account->middle_name}}">
                </div>
                <div class="form-group mb-3 col">
                    Last Name:
                    <input type="text" name="lastn" class="form-control" value="{{$account->last_name}}">
                </div>
                <div class="form-group mb-3 col">
                    Email address:
                    <input type="email" name="email" class="form-control" value="{{$account->email}}">
                </div>
                <div class="form-group mb-3 col">
                    Gender:
                    <div class="flex-column">
                        @if ($account->gender_id == 1)
                            <input class="form-check-input" type="radio" value="1" id="radio1" checked>
                        @else
                            <input class="form-check-input" type="radio" value="1" id="radio1">
                            <label class="form-check-label" for="radio1">
                        @endif
                        Male
                        </label>
                        @if ($account->gender_id == 2)
                            <input class="form-check-input" type="radio" value="2" id="radio2" checked>
                        @else
                            <input class="form-check-input" type="radio" value="2" id="radio2">
                            <label class="form-check-label" for="radio2">
                        @endif
                        Female
                        </label>
                    </div>
                </div>
                <div class="form-group mb-3 col">
                    Role:
                    <select class="form-select">
                        @if($account->role_id == 1)
                            <option value="1" selected>Admin</option>
                            <option value="2">User</option>
                        @else
                            <option value="1">Admin</option>
                            <option value="2" selected>User</option>
                        @endif
                    </select>
                </div>
                <div class="form-group mb-3 col">
                    Password
                    <input type="password" name="password" class="form-control" value="{{$account->password}}">
                </div>
                <div class="form-group mb-3 col">
                    Display Picture:
                    <input type="file" class="form-control" id="inputGroupFile01">
                </div>
            </div>
            <div class="d-flex flex-column justify-content-center">
                <button type="submit" class="btn btn-outline-primary">Save</button>
            </div>
        </div>
    </form>
</div>
@endsection
