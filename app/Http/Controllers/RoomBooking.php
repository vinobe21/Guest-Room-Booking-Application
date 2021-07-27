<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class RoomBooking extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $books = Booking::all();
        return view('user.books.index',compact('books'));
            
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'title'=>'required',
            'start_time'=>'required',
            'end_time'=>'required',
            'description'=>'required'
        ]);
        Booking::create($request->all());

        return redirect()->route('yourbooking.index')->with('success','Room Booked');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Booking $book, $id)
    {
        //
        $book = Booking::find($id);
        return view('user.books.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Booking $book, $id)
    {
        //
        $request->validate([
            'title'=>'required',
            'start_time'=>'required',
            'end_time'=>'required',
            'description'=>'required'
        ]);
        $book = Booking::find($id);
        $book->update($request->all());

        return redirect()->route('yourbooking.index')->with('success','updated your booking status');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Booking $book, $id)
    {
        //
        $book = Booking::find($id);
        $book->delete();
        return redirect()->route('yourbooking.index')->with('success','Your booking deleted');
    }
}
