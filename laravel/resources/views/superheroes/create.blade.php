@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row">
            <a href="{{route('superheroes.index')}}" class="btn btn-info">Back</a>
        </div>

        <div class="row my-3">
            <div class="card bg-dark text-white">
                @if(isset($superhero->pictures[0]))
                    <img src="\{{$superhero->pictures[0]->thumbnail}}" class="card-img-top">
                @else
                    <img src="\{{"storage/images/no-img.png"}}" class="card-img-top">
                @endif
            </div>
        </div>

        <form action="{{route('superheroes.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Nickname</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nickname" id="nickname">
                    @if($errors->has('nickname'))
                        <div class="error">{{$errors->first('nickname')}}</div>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Real name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="real_name" id="real_name">
                    @if($errors->has('real_name'))
                        <div class="error">{{$errors->first('real_name')}}</div>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Origin description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="origin_description​" name="origin_description​" rows="6"></textarea>
                    @if($errors->has('origin_description​'))
                        <div class="error">{{$errors->first('origin_description​')}}</div>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Superpowers</label>
                <div class="col-sm-10">
                    <textarea class="form-control" id="superpowers" name="superpowers" rows="6"></textarea>
                    @if($errors->has('superpowers'))
                        <div class="error">{{$errors->first('superpowers')}}</div>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="title" class="col-sm-2 col-form-label">Catch phrase</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="catch_phrase" id="catch_phrase">
                    @if($errors->has('catch_phrase'))
                        <div class="error">{{$errors->first('catch_phrase')}}</div>
                    @endif
                </div>
            </div>

            <div class="form-group row">
                <div class="col d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
@endsection
