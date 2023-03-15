<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use App\Models\Room;
use App\Http\Requests\StoreRoomRequest;
use App\Http\Requests\UpdateRoomRequest;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        $hotels = Hotel::with('hotels')->get();
        return view('resources.habitaciones.index', compact('rooms', 'hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hoteles = Hotel::all();
        return view('resources.habitaciones.create', compact('hoteles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoomRequest $request)
    {
        $room = Hotel::where('id', $request->toArray()['hotel_id'])->get();
        if ($room->toArray()[0]['room'] >= $request->toArray()['quantity']){
            Hotel::where('id', $request->toArray()['hotel_id'])->update(array('room' => $room->toArray()[0]['room'] - $request->toArray()['quantity']));
            Room::create($request->toArray());
            alert()->success('Asigando', 'Se asignaron las habitaciones correctamente');
            return to_route('room.index');
        } else {
            alert()->error('Error', 'La cantidad de habitaciones para asignar no puede ser mayor a '.$room->toArray()[0]['room']);
            return to_route('room.index');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRoomRequest $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}
