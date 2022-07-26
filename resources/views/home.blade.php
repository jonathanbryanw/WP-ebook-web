@extends('layout.site')
@section('title', 'Home Page')
@section('content')
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Author</th>
                <th scope="col">Title</th>
            </tr>
            </thead>
            <tbody class="table-secondary">
                @forelse ($e_books as $ebook)
                    <tr>
                        <td>{{$ebook->author}}</td>
                        <td><a href="/detail/{{$ebook->id}}">{{$ebook->title}}</a></td>
                    </tr>
                @empty
                   <tr>  <td colspan="2"> <p class="bg-warning">No data... </p> </td> <tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
