@extends('layouts.index')

@section('content')
        <div class="container">
            <div class="row">
                <div class="col">
                <h1>Pictures list</h1>
                </div>
            </div>
        <div class="row">
            <div class="col-12 my-3">
                <a href="{{ route('pictures.create') }}" class="btn btn-success">Create Pictures</a>
            </div>
        </div>
        <div class="row my-3">
            @foreach($pictures as $picture)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3 my-3">
                    <div class="card bg-dark text-white">
                        <img src="{{$picture->thumbnail}}" class="card-img">
                        <a href="{{ route('pictures.destroy',[$picture->id]) }}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
        @endforeach
        </div>
        <div class="row my-3">
            {{$pictures->links()}}
        </div>
    </div>
@endsection
