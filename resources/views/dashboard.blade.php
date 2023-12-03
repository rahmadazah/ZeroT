@extends('layouts.admin')

@section('container')
<div class="testimonial">
    <div class="row justify-content-center">
        <div class="col-lg-4 text-center mt-5">
            <form action="/pengguna" method="get">
                @csrf
                <button class="button" style="border-radius: 10px; background-color: #90A955; color:white">Daftar Pengguna</button>
            </form>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-lg-4 text-center mt-5">
            <form action="/sampah" method="get">
                @csrf
                <button class="button" style="border-radius: 10px; background-color: #90A955; color:white">Jenis Sampah</button>
            </form>
        </div>
    </div>
    
    <div class="row justify-content-center">
        <div class="col-lg-4 text-center mt-5">
            <form action="/location" method="get">
                @csrf
                <button class="button" style="border-radius: 10px; background-color: #90A955; color:white">Lokasi Bank Sampah</button>
            </form>
        </div>
    </div>
</div>
@endsection