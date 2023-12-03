@extends('layouts.admin')

@section('container')
@if(count($location) > 0)
<div class="container mt-3">
    <div class="row justify-content-center">
        <h2> Lokasi Bank Sampah</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama Bank Sampah</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($location as $location)
                    <tr>
                        <td>{{ $location->name }}</td>
                        <td>{{ $location->address }}</td>
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
    <form action="/location/add" method="get">
        @csrf
        <button class="button" style="border-radius: 10px; background-color: #90A955; color:white">Tambah Lokasi Bank Sampah</button>
    </form>
</div>  
@endif
@endsection