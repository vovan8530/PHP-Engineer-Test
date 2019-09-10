@extends('layouts.index')

@section('content')
    <div class="container">
    <div class="row ">

        <div class="col-12 my-2">
            <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Back</a>
        </div>

        <dl class="col-12 my-2">
            <dt class="col-sm-3">Nickname</dt>
            <dd class="col-sm-9">{{ $superhero->nickname }}</dd>
        </dl>

        <dl class="col-12 my-2">
            <dt class="col-sm-3">Real name</dt>
            <dd class="col-sm-9">{{ $superhero->real_name }}</dd>
        </dl>

        <dl class="col-12 my-2">
            <dt class="col-sm-3">Origin description​</dt>
            <dd class="col-sm-9">{{ $superhero->origin_description​ }}</dd>
        </dl>

        <dl class="col-12 my-2">
            <dt class="col-sm-3">Superpowers</dt>
            <dd class="col-sm-9">{{ $superhero->superpowers }}</dd>
        </dl>

        <dl class="col-12 my-2">
            <dt class="col-sm-3">Catch phrase</dt>
            <dd class="col-sm-9">{{ $superhero->catch_phrase }}</dd>
        </dl>
    </div>
        <div class="row my-3">
            @foreach($superhero->pictures as $picture)
                <div class="col-12 col-sm-6 col-md-3 col-lg-3 my-3">
                    <div class="card bg-dark text-white">
                            <img src="\{{$picture->thumbnail}}"class="card-img" >
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
