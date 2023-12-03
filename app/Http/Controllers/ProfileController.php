<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    public function indexedit()
    {
        $user = Auth::user();
        return view('edit-profil', ['user' => $user]);
    }

    public function edit(Request $request)
    {
        $user = User::find(auth()->id());

        $request->validate([
            'name' => 'required|min:5|max:255',
            'username' => 'required|min:5|max:255|unique:users,username,' . $user->id,
            'email' => 'required|email:dns|unique:users,email,' . $user->id,
            'password' => 'required|min:8|max:255',
            'phone' => 'required|max:255',
            'address' => 'required|max:255',
            'subdistrict' => 'required|max:255',
            'district' => 'required|max:255',
        ]);

        $user->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            'phone' => $request->phone,
            'address' =>  $request->address,
            'subdistrict' => $request->subdistrict,
            'district' => $request->district,
        ]);

        return redirect('/profile');
    }
}
