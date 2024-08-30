<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hotels=Hotel::all();
        return view('hotels.index' , compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        Hotel::create($validatedData);
        return redirect()->route('hotels.index');
    }
    

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $hotel=Hotel::find($id);
        return view('hotels.show' , compact('hotel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $hotel=Hotel::find($id);
        return view('hotels.edit' , compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        
        $validatedData = $request->validate([
            'nom' => 'required|max:255',
            'description' => 'required|max:255',
        ]);
        $hotel = Hotel::find($id);
        $hotel->update($validatedData);
        return redirect()->route('hotels.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $hotel=Hotel::find($id);
        $hotel->delete();
        return redirect()->route('hotels.index');
    }
}
