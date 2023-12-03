<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrashController;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\EarningController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware('auth')->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'checkAdmin'])->name('dashboard');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'register']);
Route::get('/regis', [RegisterController::class, 'indexregis'])->middleware('guest');
Route::post('/regis', [RegisterController::class, 'regis']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LogoutController::class, 'logout'])->middleware('web');

Route::get('/profile', [ProfileController::class, 'show'])->middleware('auth')->name('profile');
Route::get('/profile/edit', [ProfileController::class, 'indexedit'])->middleware('auth');
Route::post('/profile/edit', [ProfileController::class, 'edit'])->middleware('auth');

Route::get('/sampah', [TrashController::class, 'show'])->name('sampah');
Route::get('/sampah/add', [TrashController::class, 'indextambah'])->middleware(['auth', 'checkAdmin']);
Route::post('/sampah/add', [TrashController::class, 'add'])->middleware(['auth', 'checkAdmin']);

Route::get('/location', [LocationController::class, 'show'])->name('location');
Route::get('/location/add', [LocationController::class, 'indextambah'])->middleware(['auth', 'checkAdmin']);
Route::post('/location/add', [LocationController::class, 'add'])->middleware(['auth', 'checkAdmin']);

Route::get('/lihatpendapatan', [EarningController::class, 'show'])->middleware('auth');
Route::get('/tarikpendapatan', [EarningController::class, 'indextarik'])->middleware('auth');
Route::post('/tarikpendapatan', [EarningController::class, 'tarik'])->middleware('auth');
Route::get('/resi', [EarningController::class, 'indexresi'])->middleware('auth');

Route::get('/pengguna', [UserController::class, 'show'])->name('pengguna')->middleware(['auth', 'checkAdmin']);

Route::get('/jual', [TransactionController::class, 'index'])->middleware('auth');
Route::post('/jual', [TransactionController::class, 'jual'])->middleware('auth');