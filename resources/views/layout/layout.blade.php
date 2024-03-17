<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>KASIR</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>

<body>
    <ul class="nav">
        <li class="nav-item">
            <a href="{{ route('dashboard.index') }}" class="nav-link">Dashboard</a>
        </li>

        <li class="nav-item">
            <a href="{{ route('produk.index') }}" class="nav-link">Produk</a>
        </li>
        <li class="nav-item">
            <a href="{{ route('penjualan.index') }}" class="nav-link">Penjualan</a>
        </li>
    </ul>
    <div class="p-3">
        @yield('content')
    </div>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
