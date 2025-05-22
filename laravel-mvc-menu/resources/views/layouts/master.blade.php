<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Laravel MVC</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">MVC Laravel</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item"><a class="nav-link" href="/produk">Produk</a></li>
                <li class="nav-item"><a class="nav-link" href="/penjualan">Penjualan</a></li>
                <li class="nav-item"><a class="nav-link" href="/laporan">Laporan</a></li>
            </ul>
        </div>
    </div>
</nav>
<div class="container mt-4">
    @yield('content')
</div>
</body>
</html>
