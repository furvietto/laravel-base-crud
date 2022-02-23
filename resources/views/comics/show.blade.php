@extends('layouts.base')

@section('title')
    show
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{$comic->photo}}" alt="{{$comic->title}}">
                    <div class="card-body">
                      <h5 class="card-title">{{$comic->title}}</h5>
                      <p class="card-text">{{$comic->description}}</p>
                      <a href="{{route("comics.index")}}" class="btn btn-primary">go indietro</a>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection