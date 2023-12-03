@extends('layouts.profile')

@section('container')
<div class="container">
    <div class="justify-content-center mt-3">
        <h1 class="text-center">Data Profil</h1>
        <h3 class="mb-4 text-center">{{ $user->username }}</h3>
        <div class="row">
            <div class="col-lg-6">
                <div class="col-md-10">
                    <div class="form-group mb-2">
                        <label for="name"><strong>Nama</strong></label>
                        <div class="border p-1" style="border-radius: 10px">
                            <p id="name">{{ $user->name }}</p>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="email"><strong>Email</strong></label>
                        <div class="border p-1" style="border-radius: 10px">
                            <p id="email">{{ $user->email }}</p>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="phone"><strong>Nomor Telepon</strong></label>
                        <div class="border p-1" style="border-radius: 10px">
                            <p id="phone">{{ $user->phone }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="col-md-10">
                    <div class="form-group mb-2">
                        <label for="address"><strong>Alamat</strong></label>
                        <div class="border p-1" style="border-radius: 10px">
                            <p id="address">{{ $user->address }}</p>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="subdistrict"><strong>Kecamatan</strong></label>
                        <div class="border p-1" style="border-radius: 10px">
                            <p id="subdistrict">{{ $user->subdistrict }}</p>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="district"><strong>Kabupaten</strong></label>
                        <div class="border p-1" style="border-radius: 10px">
                            <p id="district">{{ $user->district }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>         
@if(auth()->user()->role === 'user')
<div class="text-center mt-5">
    <div class="button">
        <form action="/lihatpendapatan" method="get">
            @csrf
            <button class="button" style="border-radius: 10px; background-color: #90A955; color:white">Lihat Pendapatan</button>
        </form>
    </div>
    <div class="button mt-3">
        <form action="/tarikpendapatan" method="get">
            @csrf
            <button class="button" style="border-radius: 10px; background-color: #90A955; color:white">Penarikan Pendapatan</button>
        </form>
    </div>
@endif
    <div class="button mt-3">
        <form action="/logout" method="post">
            @csrf
            <button class="button" style="border-radius: 10px; border-color: #90A955">Logout</button>
        </form>
    </div>
</div>

@endsection