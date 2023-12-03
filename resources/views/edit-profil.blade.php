@extends('layouts.profile')

@section('container')
<div class="container">
    <div class="justify-content-center mt-3">
        <h1 class="text-center">Edit Profil</h1>
        <div class="row">
            <form method="post" action="{{ url('/profile/edit') }}">
                @csrf
                <div class="col-lg-5">
                    <div class="col-md-8">
                        <div class="form-group mb-2">
                            <label for="name"><strong>Nama</strong></label>
                            <div class="border p-1" style="border-radius: 10px">
                                <input type="text" name="name" value="{{ $user->name }}" required>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="name"><strong>Username</strong></label>
                            <div class="border p-1" style="border-radius: 10px">
                                <input type="text" name="username" value="{{ $user->username }}" required>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="email"><strong>Email</strong></label>
                            <div class="border p-1" style="border-radius: 10px">
                                <input type="email" name="email" value="{{ $user->email }}" required>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="phone"><strong>Password</strong></label>
                            <div class="border p-1" style="border-radius: 10px">
                                <input type="password" name="password" value="{{ $user->password }}" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="col-md-8">
                        <div class="form-group mb-2">
                            <label for="phone"><strong>Nomor Telepon</strong></label>
                            <div class="border p-1" style="border-radius: 10px">
                                <input type="text" name="phone" value="{{ $user->phone }}" required>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="address"><strong>Alamat</strong></label>
                            <div class="border p-1" style="border-radius: 10px">
                                <input type="text" name="address" value="{{ $user->address }}" required>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="subdistrict"><strong>Kecamatan</strong></label>
                            <div class="border p-1" style="border-radius: 10px">
                                <input type="text" name="subdistrict" value="{{ $user->subdistrict }}" required>
                            </div>
                        </div>
                        <div class="form-group mb-2">
                            <label for="district"><strong>Kabupaten</strong></label>
                            <div class="border p-1" style="border-radius: 10px">
                                <input type="text" name="district" value="{{ $user->district }}" required>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit">Simpan Perubahan</button>
            </form>
        </div>
    </div>
</div>         

@endsection