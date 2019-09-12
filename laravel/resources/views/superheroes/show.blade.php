@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row my-3">
            <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Back</a>
        </div>

        <div class="row my-3">
            <div class="card bg-dark text-white">
                @if(isset($superhero->pictures[0]))
                    <img src="\{{$superhero->pictures[0]->thumbnail}}">
                @else
                    <img src="\{{"storage/images/no-img.png"}}" class="card-img-top">
                @endif
            </div>
        </div>

        <dl class="row my-3">
            <dt class="col-sm-3">Nickname</dt>
            <dd class="col-sm-9">{{ $superhero->nickname }}</dd>

            <dt class="col-sm-3">Real name</dt>
            <dd class="col-sm-9">{{ $superhero->real_name }}</dd>

            <dt class="col-sm-3">Origin description​</dt>
            <dd class="col-sm-9">{{ $superhero->origin_description​ }}</dd>

            <dt class="col-sm-3">Superpowers</dt>
            <dd class="col-sm-9">{{ $superhero->superpowers }}</dd>

            <dt class="col-sm-3">Catch phrase</dt>
            <dd class="col-sm-9">{{ $superhero->catch_phrase }}</dd>
        </dl>

        <div class="row my-3">
            @foreach($superhero->pictures as $picture)
                <div class="col-8 col-sm-6 col-md-4 col-lg-4 col-xl-3  my-3">
                    <div class="card bg-dark text-white">
                        <img src="\{{ $picture->thumbnail }}" class="card-img">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
