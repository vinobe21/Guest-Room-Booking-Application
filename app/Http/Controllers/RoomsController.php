<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    //
    public function index()
    {
        
        $rooms = Room::all();
        return view('admin.rooms.index', compact('rooms'));
    }
    public function create()
    {
        return view('admin.rooms.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'room_number' => 'required',
            'capacity' => 'required',
            'room_name' => 'required',
            'room_rate' => 'required',
            'time' => 'required',
            'description' => 'required',
        ]);
    
        Room::create($request->all());
     
        return redirect()->route('rooms.index')
                        ->with('success','room created successfully.');
    }

    public function show(Room $room)
    {
        
        return view('admin.rooms.show', compact('room'));
    }

    public function edit(Room $room)
    {
        
        return view('admin.rooms.edit',compact('room'));
        
    }

    public function update(Request $request, Room $room)
    {
        $request->validate([
            'room_number' => 'required',
            'capacity' => 'required',
            'room_name' => 'required',
            'room_rate' => 'required',
            'time' => 'required',
            'description' => 'required',
        ]);
    
        $room->update($request->all());
    
        return redirect()->route('rooms.index')
                        ->with('success','room updated successfully');
        
    }
    public function destroy(Room $room)
    {
        
        $room->delete();
        
        return redirect()->route('rooms.index')
                        ->with('success','room deleted successfully');
    }
}
