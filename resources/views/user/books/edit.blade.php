@extends('layouts.admin')
@section('content')
<div class="container-fluid" style="text-align: right;padding-right: 50px;padding-bottom: 10px;">
    <div class="row">
        <div class="col-lg-12">
            <a type="button" class="btn btn-success" href="{{route('yourbooking.index')}}">Back</a>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header" style="text-align: center">
        <h4>Update Room</h4>
    </div>
    <div class="card-body" style="padding-left: 25%; width: 70%;">
        <form action="{{ route('yourbooking.update',$book->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <strong>Title:</strong>
                <input class="form-control" type="text" name="title" value="{{ old('title', $book->title) }}" required>
                <span class="text text-danger">@error('title')
                    {{$message}}
                @enderror</span>
            </div>
            <div class="form-group">
                <strong>Start Time:</strong>
                <input class="form-control" type="datetime-local" name="start_time" value="{{ old('start_time', $book->start_time) }}" required>
                <span class="text text-danger">@error('start_time')
                    {{$message}}
                @enderror</span>
            </div>
            <div class="form-group">
                <strong>End Time:</strong>
                <input class="form-control" type="datetime-local" name="end_time" value="{{ old('end_time', $book->end_time) }}" required>
                <span class="text text-danger">@error('end_time')
                    {{$message}}
                @enderror</span>
            </div>
            <div class="form-group">
                <strong>Description:</strong>
                <input class="form-control" type="text" name="description" value="{{ old('description', $book->description) }}" required>
                <span class="text text-danger">@error('description')
                    {{$message}}
                @enderror</span>
            </div>
            <div class="form-group">
                <button class="btn btn-success" type="submit">Save</button>
            </div>
        </form>
    </div>
</div>
@endsection