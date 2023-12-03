<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trash;

class TrashController extends Controller
{
    public function show()
    {
        $trash = Trash::all();
        return view('jenis-sampah', ['trash' => $trash]);
    }

    public function indextambah()
    {
        return view('tambah-sampah');
    }

    public function add(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
        ]);

        Trash::create([
            'name' => $request->name,
            'price' => $request->price,
        ]);

        return redirect('/sampah');
    }
}
