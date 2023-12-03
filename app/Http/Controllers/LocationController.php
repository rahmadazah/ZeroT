<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function show()
    {
        $location = Location::all();
        return view('location', ['location' => $location]);
    }

    public function indextambah()
    {
        return view('tambah-lokasi');
    }

    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
        ]);

        Location::create([
            'name' => $request->name,
            'address' => $request->address,
        ]);

        return redirect('/location');
    }
}
