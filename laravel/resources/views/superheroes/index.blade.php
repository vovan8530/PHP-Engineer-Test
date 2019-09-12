@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row my-2">
            <h1>Superheroes list</h1>
        </div>

        <div class="row my-3">
            <a href="{{ route('superheroes.create') }}" class="btn btn-success">Create Superheroes</a>
        </div>

        <div class="row my-3">
            @foreach($superheroes as $superhero)
                <div class="card mb-3 mr-3" style="max-width: 520px;">
                    <div class="row no-gutters">
                        <div class="col">
                            @if(isset($superhero->pictures[0]))
                                <img src="\{{$superhero->pictures[0]->thumbnail}}" class="card-img-top">
                            @else
                                <img src="{{"storage/images/no-img.png"}}" class="card-img-top">
                            @endif
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h3 class="card-title pb-3">{{$superhero->nickname}}</h3>
                                <div class="d-flex justify-content-end mt-5">
                                    <a href="{{route('superheroes.show',['id' => $superhero])}}" class="btn btn-primary mr-2">Show more</a>
                                    <a href="{{route('superheroes.edit',['id' => $superhero])}}" class="btn btn-warning mr-2">Edit</a>

                                    <form action="{{route('superheroes.destroy', ['id' => $superhero])}}" method="post">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE">
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
