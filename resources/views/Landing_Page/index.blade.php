<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Vokara</title>

    <!-- Jakarta Plus Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    <!-- Outfit Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">

    <!-- Cormant Garamound -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/ef1f748698.js" crossorigin="anonymous"></script>

    <!-- CONNECTING CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/LandingPage.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('images/fav.png') }}">
</head>

<body>
    <nav class="navbar">
        <div class="container">
            <div class="nav-content">
                <div class="nav-logo-wrap">
                    <a href="#" class="logo-link">
                        <img src="{{ asset('images/LightLogoFull.png') }}" alt="Vokara Logo" class="logo-image">
                    </a>
                </div>
                <div class="nav-menu d-flex">
                    <a href="#" class="nav-link">Jelajahi Jasa</a>
                    <a href="#" class="nav-link">Cari Talenta</a>
                </div>
                <div class="nav-button d-flex">
                    <a href="#" class="btn-primary">Daftar Gratis</a>
                    <a href="#" class=btn-secondary>Masuk</a>
                </div>
                <div class="hamburger" id="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </nav>

    <section class="hero d-flex align-items-center">
        <div class="container">
            <div class="hero-content">
                <div class="row">
                    <div class="col text-center ">
                        <h1 class="HeroTagline-Text"><span id="typed-text"></span></h1>
                        <p class="HeroDescription-Text">“Platform untuk siswa SMK mengerjakan project real dari klien & membangun portofolio profesional”</p>
                        <div class="d-flex justify-content-center gap-3 mt-4">
                            <a href="#" class="btn-primary fs-5 fw-light">Jelajahi Jasa</a>
                            <a href="#" class="btn-secondary fs-5 fw-light">Cari Talenta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tentang-kami">
        <div class="container">
            <div class="tentang-kami-content">
                <div class="row">
                    <div class="col">
                        <div>
                            <h1 class="heading-tentang">TENTANG</h1>
                            <h3 class="heading-kami">KAMI</h3>
                        </div>
                        <div>
                            <tr></tr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="keahlian">
        <div class="container">

        </div>
    </section>

    <section class="testimonials">
        <div class="container">

        </div>
    </section>

    <section class="starting">
        <div class="container">

        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script src="{{ asset('js/LandingPage.js') }}"></script>
</body>

</html>