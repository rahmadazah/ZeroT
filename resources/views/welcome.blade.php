@extends('layouts.main')

@section('container')
<div class="row">
    <div class="col-lg-5">
        <h1 class="justify-content-center mt-5">Selamat datang di ZeroT</h1>
        <p>Satu Tindakan, Seribu Manfaat</p>
        <button class="button" style="border-radius: 10px; background: #4F772D;">
            <a href="/login" style="color: white">Mulai</a>
        </button>
    </div>
    <div class="col-lg-7">
        <img src="images/welcome-page-right.png" class="img-fluid" width="600" height="400">
    </div>
</div>

<div class="testimonial">
    <div class="row justify-content-center">
        <div class="col-lg-6 text-center mt-5">
            <h2>Layanan</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-4 text-center">
            <img src="images/welcome-page-1.png" alt="Jenis Sampah" class="img-main" width="400" height="300">
            <h3>Jenis Sampah</h3>
            <p>Lihat semua jenis sampah yang kami terima untuk di daur ulang</p>
        </div>
        <div class="col-lg-4 text-center">
            <img src="images/welcome-page-2.png" alt="Jual Sampah" class="img-main" width="300" height="300">
            <h3>Jual Sampah</h3>
            <p>Anda kini dapat menjual sampah kalian untuk kami daur ulang</p>
        </div>
        <div class="col-lg-4 text-center">
            <img src="images/welcome-page-3.png" alt="Lihat Bank Sampah" class="img-main" width="300" height="300">
            <h3>Lihat Bank Sampah</h3>
            <p>Lihat lokasi bank sampah terdekat dari tempat Anda</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6 text-center mt-5">
            <h2>About</h2>
            <p>ZeroT adalah sebuah platform di mana kita 
                dapat menjual berbagai jenis sampah daur ulang 
                ke bank sampah terdekat.</p>
        </div>
    </div>
</div>
@endsection