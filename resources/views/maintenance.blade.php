@extends('layout.site')
@section('title', 'Maintenance Page')
@section('content')
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Account</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody class="table-secondary">
                @forelse ($accounts as $account)
                    <tr>
                        <td>{{$account->first_name}} {{$account->middle_name}} {{$account->last_name}} - {{$account->role->role_desc}}</td>
                        <td>
                            <a href="/update/{{$account->id}}">Update Role</a>
                            <a href="/delete/{{$account->id}}">Delete</a>
                        </td>
                    </tr>
                @empty
                   <tr>  <td colspan="2"> <p class="bg-warning">No data... </p> </td> <tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
