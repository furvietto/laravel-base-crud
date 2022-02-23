@extends('layouts.base')

@section('title')
    create
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form action="{{route("comics.store")}}" method="post">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="title" class="form-label">Title Comic</label>
                        <input type="text" class="form-control" id="title" name="title">
                      </div>
                      <div class="mb-3">
                        <label for="photo" class="form-label">photo</label>
                        <input type="text" class="form-control" id="photo" name="photo">
                      </div>
                      <div class="mb-3">
                          <label for="author" class="form-label">Author</label>
                          <input type="text" class="form-control" id="author" name="author" rows="3">
                      </div>
                      <div class="mb-3">
                        <label for="genre" class="form-label">genre</label>
                        <input type="text" class="form-control" id="genre" name="genre">
                      </div>

                      <div class="mb-3">
                        <label for="description" class="form-label">description</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                      </div>
                      
                      <div class="mb-3">
                        <label for="exitDate" class="form-label">exitDate</label>
                        <input type="date" class="form-control" id="exitDate" name="exitDate">
                      </div>

                      <div class="mb-3">
                        <label for="price" class="form-label">price</label>
                        <input type="number" class="form-control" id="price" name="price">
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection