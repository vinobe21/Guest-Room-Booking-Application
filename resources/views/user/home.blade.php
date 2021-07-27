<x-app-layout>
<div class="container">
    <div class="row" style="text-align: center">
        <h1><strong>Well done!</strong></h1>
        <h1>You Successfully Logged in..</h1>
        <h1>This is User Account</h1><br>
        <strong>MAIN FEATURES</strong><br>
        <ul>
            <li>You Can See Available Rooms and Book Now</li>
            <li><x-jet-nav-link href="{{url('/rooms')}}" type="button">
            <span><strong>Go To Rooms</strong></span></x-jet-nav-link></li>
        </ul><br>
        <ul>
            <li>You Can See Your Booking Status</li>
            <li><x-jet-nav-link href="{{url('/yourbooking')}}" type="button">
            <span><strong>View My Booking Status</strong></span></x-jet-nav-link></li>
        </ul><br>
        <ul>
            <li>You Can See Your Events</li>
            <li><x-jet-nav-link href="{{url('/myevent')}}" type="button">
            <span><strong>Go To My Events</strong></span></x-jet-nav-link></li>
        </ul>
    </div>
</div>
</x-app-layout>
