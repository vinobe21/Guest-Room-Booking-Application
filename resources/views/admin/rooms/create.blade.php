@extends('layouts.admin')
@section('content')
<div class="container-fluid" style="text-align: right;padding-right: 50px;padding-bottom: 10px;">
    <div class="row">
        <div class="col-lg-12">
            <a type="button" class="btn btn-success" href="{{route('rooms.index')}}">Back</a>
        </div>
    </div>
</div>
<div class="card">
    <div class="card-header" style="text-align: center">
        <h4>Create New Room</h4>
    </div>
    <div class="card-body" style="padding-left: 25%; width: 70%;">
        <form action="{{route('rooms.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <strong>Room Number:</strong>
                <input class="form-control" type="text" name="room_number" required>
                <span class="text text-danger">@error('room_number')
                    {{$message}}
                @enderror</span>
            </div>
            <div class="form-group">
                <strong>Capacity:</strong>
                <input class="form-control" type="text" name="capacity" required>
                <span class="text text-danger">@error('capacity')
                    {{$message}}
                @enderror</span>
            </div>
            <div class="form-group">
                <strong>Room Name:</strong>
                <input class="form-control" type="text" name="room_name" required>
                <span class="text text-danger">@error('room_name')
                    {{$message}}
                @enderror</span>
            </div>
            <div class="form-group">
                <strong>Amount:</strong>
                <input class="form-control" type="text" name="room_rate" required>
                <span class="text text-danger">@error('room_rate')
                    {{$message}}
                @enderror</span>
            </div>
            <div class="form-group">
                <strong>Time:</strong>
                <input class="form-control" type="text" name="time" required>
                <span class="text text-danger">@error('time')
                    {{$message}}
                @enderror</span>
            </div>
            <div class="form-group">
                <strong>Discription:</strong>
                <input class="form-control" type="text" name="description" required>
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