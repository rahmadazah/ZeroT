<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Trash;
use App\Models\Transaction;

class TransactionController extends Controller
{
    public function index()
    {
        $trashes = Trash::all();
        return view('jual', ['trashes' => $trashes]);
    }

    public function jual(Request $request)
    {
        $request->validate([
            'trash_id' => 'required',
            'quantity' => 'required|integer',
        ]);

        $trashId = $request->input('trash_id');
        $quantity = $request->input('quantity');

        $trash = Trash::find($trashId);

        $total = $trash->price * $quantity;

        $user = User::find(auth()->id());
         
        $user->update([
            'earnings' => $user->earnings + $total
        ]);
        
        Transaction::create([
            'user_id' => $user->id,
            'trash_id' => $trashId,
            'quantity' => $quantity,
            'total' => $total,
        ]);

        return redirect('/lihatpendapatan');
    }
}
