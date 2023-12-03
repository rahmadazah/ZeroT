@extends('layouts.admin')

@section('container')
<div class="container">
    <form action="/sampah/add" method="post">
        @csrf
        <div class="col-lg-6">
            <div class="col-md-10">
                <h2>Tambah Item Sampah</h2>
                <label for="name"><strong>Kategori Sampah</strong></label>
                <div class="border p-1" style="border-radius: 10px">
                    <input type="text" class="form-control" name="name" required>
                </div>
                <label for="name"><strong>Harga per kg</strong></label>
                <div class="border p-1" style="border-radius: 10px">
                    <input type="text" class="form-control" name="price" required>
                </div>
            </div>
        </div>
        <button type="submit">Tambah Jenis Sampah</button>
    </form>
</div>
@endsection