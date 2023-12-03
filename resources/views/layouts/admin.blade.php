<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ZeroT | Admin</title>
    <link rel="stylesheet" href="/bootstrap-5.3.2-dist/css/bootstrap.css">
</head>
<body>
    <nav class="navbar navbar-expand-lg sticky-top navbar-dark" style="background-color: #90A955">
        <div class="container-fluid">
            <a class="navbar-brand" href="/dashboard">ZeroT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <button class="button" style="border-radius: 10px; background: #90A955; border-color: white">
                <a href="/profile" style="color: white">Profil Admin</a>
            </button>
        </div>
    </nav>
    <div class="container">
        @yield('container')
    </div>
</body>
</html>