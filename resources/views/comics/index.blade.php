@extends('layouts.base')

@section('title')
    index
@endsection

@section('content')
<div class="container">
    <div class="row">
        
    </div>
    <div class="row align-items-center justify-content-between">
        <div class="col-4">
            <h1 class="h1">Admin - All Comics</h1>
        </div>
        <div class="col-2">
            <a href="{{ route('comics.create') }}" class="btn btn-primary">Add new Comics</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
             <table class="table table-primary">
                <thead>
                    <tr class="table-primary">
                        <th>Title</th>
                        <th>Author</th>
                        <th>Price</th>
                        <th>Exitdate</th>
                        <th>view</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td>{{ $comic->title }}</td>
                        <td>{{ $comic->author }}</td>
                        <td>{{ $comic->price }} €</td>
                        <td>{{ $comic->exitDate }}</td>
                        <td><a class="btn btn-primary" href="{{ route('comics.show', $comic) }}">View</a></td>
                        <td><a class="btn btn-primary" href="{{ route('comics.edit', $comic) }}">Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col">
            {{ $comics->links() }}
        </div>
    </div>
</div>
@endsection