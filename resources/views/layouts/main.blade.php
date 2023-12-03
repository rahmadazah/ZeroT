<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZeroT</title>
    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark" style="background-color: #90A955">
        <div class="container-fluid">
        @guest
            <a class="navbar-brand" href="/">ZeroT</a>
            <button class="button" style="border-radius: 10px; background: #90A955; border-color: white">
                <a href="/login" style="color: white">Login</a>
            </button>
        @else
            <a class="navbar-brand" href="/home">ZeroT</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link" href="/sampah">Jenis Sampah</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/location">Lokasi Penjualan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/jual">Jual Sampah</a>
                    </li>
                </ul>
            </div>
                <button class="button" style="border-radius: 10px; background: #90A955; border-color: white">
                    <a href="/profile" style="color: white">Profile</a>
                </button>
        @endguest
        </div>
    </nav>
    <div class="container">
        @yield('container')
    </div>
</body>
</html>