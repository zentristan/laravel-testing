<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vokara</title>

    <link rel="icon" type="image/png" href="{{ asset('images/fav.png') }}">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&family=Outfit:wght@100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/navbarno.css') }}">
</head>

<body>
    <div class="nav-body">
        <header class="navbar d-flex justify-content-between align-items-center">
            <div class="nav-logo-wrap">
                <img class="nav-logo" src="{{ asset('images/VokaraLight.png') }}" width="110" height="50">
            </div>
            <nav id="nav-link" class="text-center d-flex gap-4 align-items-center">
                <a href="#">Pasar Jasa</a>
                <a href="#">Lowongan Jasa</a>
                <a href="#">Placeholder</a>
            </nav>
            <div class="masuk d-flex align-items-center gap-3">
                <a href="#">Masuk</a>
                <button>Mulai Daftar</button>
            </div>
        </header>
    </div>
</body>
</html>