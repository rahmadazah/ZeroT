@extends('layouts.main')

@section('container')
<div class="container">
    <div class="justify-content-center mt-3">
        <h1 class="text-center">Data Pendapatan</h1>
        <h3 class="mb-4 text-center">{{ $user->username }}</h3>
        <div class="row">
            <div class="mt-3 text center">
                <div class="form-group mb-2">
                    <label for="name"><strong>Total Pendapatan</strong></label>
                    <div class="border p-1" style="border-radius: 10px">
                        <p id="name">{{ $user->earnings }}</p>
                    </div>
                </div>
            </div>
        </div>
        <h1 class="text-center mt-3">Histori Transaksi</h1>
        @if(count($transactions) > 0)
            <table>
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Jumlah</th>
                        <th>Jenis Sampah</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($transactions as $transaction)
                        <tr>
                            <td>{{ $transaction->created_at }}</td>
                            <td>{{ $transaction->quantity }}kg</td>
                            <td>{{ $transaction->trash->name }}</td>
                            <td>{{ $transaction->total }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Belum ada data.</p>
        @endif
        <div class="button">
            <form action="/tarikpendapatan" method="get">
                @csrf
                <button class="button" style="border-radius: 10px; background-color: #90A955; color:white">Penarikan Pendapatan</button>
            </form>
        </div>
    </div>
</div>
@endsection
