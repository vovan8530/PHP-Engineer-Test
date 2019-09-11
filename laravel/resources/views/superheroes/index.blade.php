@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Superheroes list</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12 my-3">
                <a href="{{ route('superheroes.create') }}" class="btn btn-success">Create Superheroes</a>
            </div>
        </div>
        <div class="row">
            @foreach($superheroes as $superhero)
                <div class="card mb-3 mr-3" style="max-width: 440px;">
                    <div class="row no-gutters ">
                        <div class="col-md-4">
                            @if(isset($superhero->pictures[0]))
                                <img src="\{{$superhero->pictures[0]->thumbnail}}" class="card-img-top " width="300">
                            @else
                                <img src="{{"storage/images/no-img.png"}}" class="card-img-top " width="300">
                            @endif
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title">{{$superhero->nickname}}</h5>
                                <p class="card-text">{{$superhero->superpowers}}</p>
                                <div class="d-flex justify-content-end">
                                    <a href="{{ route('superheroes.show',['id' => $superhero]) }}" class="btn btn-primary mr-2">Show more</a>
                                    <a href="{{ route('superheroes.edit',['id' => $superhero]) }}" class="btn btn-warning mr-2">Edit</a>
                                    <form action="{{ route('superheroes.destroy', ['id' => $superhero]) }}" method="post">
                                        <input type="hidden" name="_method" value="DELETE">
                                         @csrf
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            {{$superheroes->links()}}
        </div>
    </div>
@endsection
