@extends('layouts.admin')

@section('container')
@if(count($user) > 0)
<div class="container mt-3">
    <div class="row justify-content-center">
        <h2>Daftar Pengguna</h2>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Kecamatan</th>
                    <th>Kabupaten</th>
                    <th>Role</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->username }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->phone }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->subdistrict }}</td>
                        <td>{{ $user->district }}</td>
                        <td>{{ $user->role }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@else
    <p>Belum ada data.</p>
@endif  
@endsection