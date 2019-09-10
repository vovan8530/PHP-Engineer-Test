@extends('layouts.index')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row">
                    <div class="col-sm-10">
                        <a href="{{route('pictures.index')}}"  class="btn btn-info">Back</a>
                    </div>
                </div>
                <form action="{{route('pictures.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Select picture</label>
                        <input  name="image" type="file" class="form-control-file" id="exampleFormControlFile1">
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Create picture</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
