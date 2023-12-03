@extends('layouts.admin')

@section('container')
@if(count($trash) > 0)
<div class="container mt-3">
    <div class="row justify-content-center">
        <h2>List Jenis Sampah</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trash as $trash)
                    <tr>
                        <td>{{ $trash->name }}</td>
                        <td>Rp{{ $trash->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@else
    <p>Belum ada data.</p>
@endif
@if(auth()->user()->role === 'admin')
<div class="button mt-3">
    <form action="/sampah/add" method="get">
        @csrf
        <button class="button" style="border-radius: 10px; background-color: #90A955; color:white">Tambah Jenis Sampah</button>
    </form>
</div>
@endif
@endsection