@extends('layouts.base')

@section('title')
    Edit
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{route("comics.update", $comic)}}" method="post">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="title" class="form-label">Title Comic</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}">
                  </div>
                  <div class="mb-3">
                    <label for="photo" class="form-label">photo</label>
                    <input type="text" class="form-control" id="photo" name="photo" value="{{$comic->photo}}">
                  </div>
                  <div class="mb-3">
                      <label for="author" class="form-label">Author</label>
                      <input type="text" class="form-control" id="author" name="author" value="{{$comic->author}}" rows="3">
                  </div>
                  <div class="mb-3">
                    <label for="genre" class="form-label">genre</label>
                    <input type="text" class="form-control" id="genre" name="genre" value="{{$comic->genre}}">
                  </div>

                  <div class="mb-3">
                    <label for="description" class="form-label">description</label>
                    <textarea class="form-control" id="description" name="description">{{$comic->description}}</textarea>
                  </div>
                  
                  <div class="mb-3">
                    <label for="exitDate" class="form-label">exitDate</label>
                    <input type="date" class="form-control" id="exitDate" name="exitDate" value="{{$comic->exitDate}}">
                  </div>

                  <div class="mb-3">
                    <label for="price" class="form-label">price</label>
                    <input step="0.01" type="number" class="form-control" id="price" name="price" value="{{$comic->price}}">
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
</div>
@endsection