<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Jika pengguna tidak terautentikasi, redirect ke halaman login
        if (!Auth::check()) {
            return redirect('/login');
        }

        // Memeriksa peran pengguna
        $user = Auth::user();
        if ($user->role !== 'admin') {
            // Jika peran pengguna bukan "admin", Anda dapat mengarahkannya ke halaman lain
            // Atau memblokir akses dan memberikan pesan kesalahan
            abort(403, 'Unauthorized action.');
        }

        return $next($request);
    }
}