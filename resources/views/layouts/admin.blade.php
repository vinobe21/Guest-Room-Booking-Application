<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ url('/css/main.css') }}" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.10.2/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>



    
    

    
</head>
<body>
    <div class="app header-fixed">
            <nav class="navbar navbar-expand-sm bg-light">
  
        <ul class="navbar-nav ml-auto">
            <li class="nav-item btn-secondary" style="padding-right: 100px">
                <a class="nav-link" href="{{route('home')}}" style="color: white;
    font-weight: bold;">
                  Go To Home
                </a>
            </li>
        </ul>
    </nav>
</div><br>

<div class="app-body">
    <div class="main">
        @yield('content')
    </div>

</div>
</body>
</html>
<script>
$('#bookRoom').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var roomId = button.data('room-id');
    var modal = $(this);
    modal.find('#room_id').val(roomId);
    modal.find('.modal-title').text('Booking of a room ' + button.parents('tr').children('.room-name').text());
    $('#submitBooking').click(() => {
        modal.find('button[type="submit"]').trigger('click');
    });
});



</script>