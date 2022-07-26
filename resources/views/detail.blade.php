@extends('layout.site')
@section('title', 'EBook Detail Page')
@section('content')
<div>
    <p class="fs-3" style="text-decoration: underline">E-Book Detail</p>
    <p>Title : {{$e_books->title}}</p>
    <p>Author : {{$e_books->author}}</p>
    <p>Description : {{$e_books->description}}</p>
    <button type="button" class="btn btn-warning">Rent</button>
</div>
@endsection
