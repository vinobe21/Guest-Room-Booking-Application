@extends('layouts.admin')
@section('content')

    <div class="container-fluid" style="text-align: right;padding-right: 50px;padding-bottom: 10px;">
    <div class="row">
        <div class="col-lg-12">
            <a type="button" class="btn btn-success" href="{{route('yourbooking.create')}}">More Booking</a>
        </div>
    </div>
</div>


<div class="card" style="padding: 5px">
    <div class="card-header" style="text-align: center">
        <h4>Booking</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover datatable datatable-Room">
                <thead>
                    <tr>
                        
                        <th>Title</th>
                        <th>Start Time</th>
                        <th>End Time</th>
                        <th>Description</th>
                        <th></th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($books as $book)
                    <tr>
                       
                        <td>{{$book['title']}}</td>
                        <td>{{$book['start_time']}}</td>
                        <td>{{$book['end_time']}}</td>
                        <td>{{$book['description']}}</td>
                    <td>
                        <form action="{{ route('yourbooking.destroy',$book->id) }}" method="POST">
                   
                    <a class="btn btn-primary btn-sm" href="{{ route('yourbooking.edit',$book->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                </form></td>
                
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
