@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-10">
                        <a href="{{route('superheroes.index')}}"  class="btn btn-info">Back</a>
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
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
