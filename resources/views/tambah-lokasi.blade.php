@extends('layouts.admin')

@section('container')
<div class="container">
    <form action="/location/add" method="post">
        @csrf
        <div class="col-lg-6">
            <div class="col-md-10">
                <h2>Tambah Lokasi Bank Sampah</h2>
                <label for="name"><strong>Nama Bank Sampah</strong></label>
                <div class="border p-1" style="border-radius: 10px">
                    <input type="text" class="form-control" name="name" required>
                </div>
                <label for="address "><strong>Alamat</strong></label>
                <div class="border p-1" style="border-radius: 10px">
                    <input type="text" class="form-control" name="address" required>
                </div>
            </div>
        </div>
        <button type="submit">Tambah Lokasi Bank Sampah</button>
    </form>
</div>
@endsection