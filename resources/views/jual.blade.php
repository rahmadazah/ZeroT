@extends('layouts.profile')

@section('container')
<div class="container">
    <div class="justify-content-center mt-3">
        <h1 class="text-center">Jual Sampah</h1>
        <form action="/jual" method="post">
        @csrf
        <div class="row">
            <div class="col-lg-6">
                <div class="col-md-10">
                    <div class="form-group mb-2">
                        <label for="quantity"><strong>Jumlah</strong></label>
                        <div class="border p-1" style="border-radius: 10px">
                            <input type="text" class="form-control" name="quantity" placeholder="Jumlah (dalam kg)" required>
                        </div>
                    </div>
                    <div class="form-group mb-2">
                        <label for="location"><strong>Pilih Jenis Sampah</strong></label>
                        <div class="border p-1" style="border-radius: 10px">
                            <select name="trash_id" id="trash_id">
                                @foreach($trashes as $trash)
                                    <option value="{{ $trash->id }}">{{ $trash->name }} {{ $trash->price }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button class="button" style="border-radius: 10px; background: #4F772D; color: white" type="submit">Jual</button>
            </div>
        </div> 
        </form>
    </div>
</div>
@endsection
        