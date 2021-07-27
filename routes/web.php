<?php

use App\Http\Controllers\HomeController;

use App\Http\Controllers\EventController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/login');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::get('home', [HomeController::class,'index'])->name('home');

Route::resource('rooms','App\Http\Controllers\RoomsController');

Route::resource('yourbooking','App\Http\Controllers\RoomBooking');

Route::get('myevent', [EventController::class, 'index']);
Route::post('myevent/events', [EventController::class, 'events']);