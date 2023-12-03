<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Location;
use App\Models\Earning;

class EarningController extends Controller
{
    public function show()
    {
        $user = User::find(auth()->id());
        $transactions = $user->transactions()->get();
        return view('pendapatan', ['user' => $user], ['transactions' => $transactions]);
    }

    public function indextarik()
    {
        $earnings = User::find(auth()->id())->earnings()->get();
        $locations = Location::all();
        return view('ambil-pendapatan', ['earnings' => $earnings], ['locations' => $locations]);
    }

    public function indexresi()
    {
        $earnings = User::find(auth()->id())->earnings()->get();
        return view('resi', ['earnings' => $earnings]);
    }

    public function tarik(Request $request)
    {
        $request->validate([
            'earnings' => 'required',
            'location_id' => 'required|integer',
        ]);

        $earnings = $request->input('earnings');
        $locationId = $request->input('location_id');

        Earning::create([
            'user_id' => auth()->user()->id,
            'location_id' => $locationId,
            'total' => $earnings,
        ]);
        
        return redirect('/resi');
    }
}
