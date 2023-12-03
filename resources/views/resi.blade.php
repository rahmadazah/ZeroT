@extends('layouts.main')

@section('container')
<div class="container">
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <h1>Resi Penarikan</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>Jumlah</th>
                            <th>Lokasi Bank Sampah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($earnings->last() ? [$earnings->last()] : [] as $earning)
                            <tr>
                                <td>{{ $earning->created_at }}</td>
                                <td>{{ $earning->total }}</td>
                                <td>{{ $earning->location->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection