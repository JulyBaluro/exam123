<?php

namespace App\Http\Controllers;

use App\Models\roomexam;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RoomexamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('dashboard', ['products' => roomexam::query()->latest()->get(),]);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.

    public function store(Request $request)
    {
        $data = $request->validate([
            'room_name' => ['required', 'string', 'max:100'],
            'room_number' => ['required', 'integer'],
            'condition' => ['required', 'string', 'max:100'],
            'room_floor' => ['required', 'string', 'max:100'],
            'room_type' => ['required', 'string', 'max:100'],
        ]);
        roomexam::create($data);
        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(roomexam $roomexam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(roomexam $roomexam)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, roomexam $roomexam)
    {
        $data = $request->validate([
            'room_name' => ['required', 'string', 'max:100'],
            'room_number' => ['required', 'integer'],
            'condition' => ['required', 'string', 'max:100'],
            'room_floor' => ['required', 'string', 'max:100'],
            'room_type' => ['required', 'string', 'max:100'],
        ]);
        $roomexam->update($data);
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(roomexam $roomexam)
    {
        $roomexam->delete();
        return redirect()->route('dashboard');
    }
}
