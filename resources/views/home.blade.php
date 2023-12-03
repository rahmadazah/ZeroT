@extends('layouts.main')

@section('container')
<div class="justify-content-center mt-5">
    <img src="images/home-user-main.png" class="img-fluid" width="1000" height="500">
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
</div>
@endsection