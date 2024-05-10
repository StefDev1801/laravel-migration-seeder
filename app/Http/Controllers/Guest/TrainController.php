<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;

class TrainController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(Train::all());
        $trains = Train::orderBy('orario_di_partenza')->get();
        return view('guests.trains.index', compact('trains'));
    }


    /**
     * Display the specified resource.
     */
    public function show(Train $train)
    {
        dd($train);
    }

}
