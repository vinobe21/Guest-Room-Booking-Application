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
        <h4>Room List</h4>
    </div>
    <div class="card-body" style="padding-left: 25%; width: 70%;">
        
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <tbody>
                    
                    <tr>
                        <th>
                            Room Number
                        </th>
                        <td>
                            {{ $room->room_number }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Capacity
                        </th>
                        <td>
                            {{ $room->capacity }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Room Name
                        </th>
                        <td>
                            {{ $room->room_name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Amount
                        </th>
                        <td>
                            {{ $room->room_rate }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Time
                        </th>
                        <td>
                            {{ $room->time }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            Discription
                        </th>
                        <td>
                            {{ $room->description }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
