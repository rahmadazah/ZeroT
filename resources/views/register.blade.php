@extends('layouts.main')

@section('container')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card text-center" style="border-color: black; border-radius: 20px">
                <h2 class="mt-3">Register</h2>
                <div class="card-body mx-auto">
                    <form action="/register" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Masukkan Nama" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                        </div>
                        
                        <button class="button" style="border-radius: 10px; background: #4F772D; color: white" type="submit">Register</button>
                    </form>
                    <a href="/login" class="mt-3" style="color: black">Have an Account?</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection