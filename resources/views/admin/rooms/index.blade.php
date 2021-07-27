@extends('layouts.admin')
@section('content')
@if (Auth::user()->role==1)
    <div class="container-fluid" style="text-align: right;padding-right: 50px;padding-bottom: 10px;">
    <div class="row">
        <div class="col-lg-12">
            <a type="button" class="btn btn-success" href="{{route('rooms.create')}}">Add Room</a>
        </div>
    </div>
</div>
@endif

<div class="card" style="padding: 5px">
    <div class="card-header" style="text-align: center">
        <h4>Available Rooms</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover datatable datatable-Room">
                <thead>
                    <tr>
                        
                        <th>Room Number</th>
                        <th>Capacity</th>
                        <th>Room Name</th>
                        <th>Amount</th>
                        <th>Time</th>
                        <th>Description</th>
                        @if(Auth::user()->role==1)
                        <th> </th>
                        @else
                        <th>Book Room</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rooms as $room)
                    <tr>
                       
                        <td>{{$room['room_number']}}</td>
                        <td>{{$room['capacity']}}</td>
                        <td>{{$room['room_name']}}</td>
                        <td>{{$room['room_rate']}}</td>
                        <td>{{$room['time']}}</td>
                        <td>{{$room['description']}}</td>
                        
                        @if(Auth::user()->role==1)
                    <td>
                <form action="{{ route('rooms.destroy',$room->id) }}" method="POST">
                    
                    <a class="btn btn-info btn-sm" href="{{ route('rooms.show',$room->id) }}">Show</a>
    
                    <a class="btn btn-primary btn-sm" href="{{ route('rooms.edit',$room->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form>
            </td>
            @else
            <td>
                <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#bookRoom">Book Now</button>
            </td>

            @endif
                    
      
                    
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
  <div class="modal" id="bookRoom">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Book My Room</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form action="{{route('yourbooking.store')}}" method="POST" id="bookingForm">
            @csrf
            <div class="form-group">
                <strong>Title:</strong>
                <input class="form-control" type="text" name="title" required>
                <span class="text text-danger">@error('title')
                    {{$message}}
                @enderror</span>
            </div>
            <div class="form-group">
                <strong>Start Time:</strong>
                <input class="form-control" type="datetime-local" name="start_time" required>
                <span class="text text-danger">@error('start_time')
                    {{$message}}
                @enderror</span>
            </div>
            <div class="form-group">
                <strong>End Time:</strong>
                <input class="form-control" type="datetime-local" name="end_time" required>
                <span class="text text-danger">@error('end_time')
                    {{$message}}
                @enderror</span>
            </div>
            <div class="form-group">
                <strong>Description:</strong>
                <input class="form-control" type="text" name="description" required>
                <span class="text text-danger">@error('description')
                    {{$message}}
                @enderror</span>
            </div>
            <button type="submit" style="display: none;"></button>
          </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
            <button class="btn btn-outline-primary" id="submitBooking">Submit</button>
          <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
        </div>
        
      </div>
    </div>
  </div>
  

@endsection
