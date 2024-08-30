<?php

namespace App\Http\Controllers;
use App\Models\Hotel;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();
        //  dd($rooms);
        return view ('rooms.index' , compact('rooms'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $hotels=Hotel::all();
        return view('rooms.create', compact('hotels')); 
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request->all());
        $validated_request = $request->validate([
           'hotel_id' => 'required|exists:hotels,id',
            'nom' => 'required|max:255',
            'prix'=> 'required',
            'nombre_lits' =>'required|integer',
            'max_adulte'=>'required|integer',
            'max_enfants'=> 'required|integer',
            'statut'=> 'required|boolean',
           
          ]);
         //   dd($validated_request);
          Room::create($validated_request);
          return redirect()->route('rooms.index');
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        $room=Room::find($id);
    return view('rooms.show' ,compact('room'));;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $room=Room::find($id);
    return view('rooms.edit' ,compact('room'));;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( Request $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'hotel_id'=>'required',
            'nom_hotel'=>'required|string',
            'nom'=>'required|max:255',
            'prix'=> 'required|integer',
            'nombre_lits' =>'required|integer',
            'max_adulte'=>'required|integer',
            'max_enfants'=> 'required|integer',
            'statut'=> 'required|boolean',
        ]);
        //dd($validated_request);
        $room=Room::find($id);
        $room->update($validatedData);
        return redirect()->route('rooms.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        $room=Room::find($id);
        $room->delete();
        return redirect()->route('rooms.index');
    }
   
}
