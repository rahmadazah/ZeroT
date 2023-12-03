@extends('layouts.main')

@section('container')
<div class="container">
    <div class="justify-content-center mt-3">
        <h1 class="text-center">Penarikan Pendapatan</h1>
        <form action="/tarikpendapatan" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="col-md-10">
                    <div class="form-group mb-2">
                        <label for="earnings"><strong>Nominal Penarikan</strong></label>
                        <div class="border p-1" style="border-radius: 10px">
                            <input type="text" class="form-control" name="earnings" placeholder="Nominal Penarikan" required>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="location"><strong>Pilih Lokasi Bank Sampah</strong></label>
                        <div class="border p-1" style="border-radius: 10px">
                            <select name="location_id" id="location_id">
                                @foreach($locations as $location)
                                    <option value="{{ $location->id }}">{{ $location->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="button" style="border-radius: 10px; background: #4F772D; color: white" type="submit">Konfirmasi</button>
            </div>
        </div> 
        </form>
    </div>
    <div class="justify-content-center mt-5">
        <h1 class="text-center">History Penarikan</h1>
        @if(count($earnings) > 0)
        <table>
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Jumlah</th>
                    <th>Lokasi Bank Sampah</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($earnings as $earning)
                    <tr>
                        <td>{{ $earning->created_at }}</td>
                        <td>{{ $earning->total }}</td>
                        <td>{{ $earning->location->name }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        @else
            <p>Belum ada data.</p>
        @endif
    </div>
</div>
@endsection
        