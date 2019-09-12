@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row my-3">
            <a href="{{route('superheroes.index')}}"  class="btn btn-info">Back</a>
        </div>

        <div class="row my-3">
            <div class="card bg-dark text-white">
                @if(isset($superhero->pictures[0]))
                    <img src="\{{$superhero->pictures[0]->thumbnail}}" class="card-img-top ">
                @else
                    <img src="\{{"storage/images/no-img.png"}}" class="card-img-top ">
                @endif
            </div>
        </div>

        <form action="{{route('superheroes.update',[$superhero->id])}}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Nickname</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nickname" id="nickname" value="{{$superhero->nickname}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Real name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="real_name" id="real_name" value="{{$superhero->real_name}}">
                </div>
            </div>

            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Origin description</label>
                <div class="col-sm-10">
                    <textarea type="description" class="form-control " name="origin_description​" id="origin_description​">{{$superhero->origin_description​}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Superpowers</label>
                <div class="col-sm-10">
                    <textarea type="description" class="form-control " name="superpowers" id="superpowers">{{$superhero->superpowers}}</textarea>
                </div>
            </div>

            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Catch phrase</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="catch_phrase" id="catch_phrase" value="{{$superhero->catch_phrase}}">
                </div>
            </div>

            <div class="form-group row">
                <div class="col d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </form>

        <form action="{{route('pictures.store')}}" method="post" enctype="multipart/form-data">
            <input type="hidden" name="superhero_id" value="{{$superhero->id}}">
            @csrf
            <div class="form-group">
                <label for="exampleFormControlFile1">Select picture</label>
                <input  name="file" type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Add picture</button>
                </div>
            </div>
        </form>

        <div class="row my-3">
            @foreach($superhero->pictures as $picture)
                <div class="col-8 col-sm-6 col-md-4 col-lg-4 col-xl-3 my-3">
                    <div class="card bg-dark text-white">
                        <img src="\{{$picture->thumbnail}}" class="card-img">
                        <form action="{{route('pictures.destroy', [$picture->id])}}" method="post">
                            <input type="hidden" name="_method" value="DELETE">
                            @csrf
                            <button class="col btn btn-danger">Remove</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
