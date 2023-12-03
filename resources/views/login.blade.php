@extends('layouts.main')

@section('container')
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card text-center" style="border-color: black; border-radius: 20px">
                <h2 class="mt-3">Login</h2>
                <div class="card-body mx-auto">
                    <form action="/login" method="post">
                        @csrf
                        <div class="mb-3">
                            <input type="text" class="form-control" name="username" placeholder="Masukkan Username" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required>
                        </div>
                        <button class="button" style="border-radius: 10px; background: #4F772D; color: white" type="submit">Login</button>
                    </form>
                    <a href="/register" class="mt-3" style="color: black">Create an Account?</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection