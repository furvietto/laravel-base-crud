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
                        <label for="name" class="form-label">Name Keyboard</label>
                        <input type="text" class="form-control" id="name" name="name">
                      </div>
                      <div class="mb-3">
                        <label for="sku" class="form-label">sku</label>
                        <input type="text" class="form-control" id="sku" name="sku">
                      </div>
                      <div class="mb-3">
                          <label for="features" class="form-label">Features</label>
                          <textarea class="form-control" id="features" name="features" rows="3"></textarea>
                      </div>
                      <div class="mb-3">
                        <label for="switches" class="form-label">switches</label>
                        <input type="text" class="form-control" id="switches" name="switches">
                      </div>
                      <div class="mb-3">
                        <label for="photo" class="form-label">photo</label>
                        <input type="text" class="form-control" id="photo" name="photo">
                      </div>
                      <div class="mb-3">
                        <label for="keycaps" class="form-label">keycaps</label>
                        <input type="text" class="form-control" id="keycaps" name="keycaps">
                      </div>
                      <div class="mb-3">
                        <label for="keycaps" class="form-label">price</label>
                        <input type="number" class="form-control" id="price" name="price">
                      </div>
                      
                      <button type="submit" class="btn btn-primary">Save</button>
                </form>
            </div>
        </div>
    </div>
@endsection