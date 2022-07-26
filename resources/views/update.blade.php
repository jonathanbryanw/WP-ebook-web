@extends('layout.site')
@section('title', 'Update Page')
@section('content')
    <div>
        <p class="fs-3" style="text-decoration: underline">{{$account->first_name}} {{$account->middle_name}} {{$account->last_name}}</p>
        <form action="/update/{{$account->id}}" method="post" class="d-flex justify-content-center">
            {{ method_field('put') }}
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
            <button type="button" class="btn btn-warning mt-3">Save</button>
        </div>
        </form>
    </div>
@endsection
