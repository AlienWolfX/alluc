<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png" rel="icon') }}" />


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet" />
    <!-- Include the flatpickr library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

</head>

<body>
    <div id="app">
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top d-flex align-items-center header-inner-pages">
            <div class="container d-flex align-items-center justify-content-between">
                <h1 class="logo"><a href="index.html">ALLUC </a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href=index.html" class="logo"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav id="navbar" class="navbar">
                    <ul>
                        <li><a class="nav-link scrollto" href="{{ route('home') }}">Home</a></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>

            </div>
        </header>

        <main class="py-4" id="main">
            <section id="breadcrumbs" class="breadcrumbs">
                <div class="container">
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li>{{$car->car_name}}</li>
                    </ol>
                    <h2>{{$car->car_name}}</h2>
                </div>
            </section>

            <section id="portfolio-details" class="portfolio-details">
                <div class="container">
                    <div class="row gy-4">
                        <div class="container">
                            <div class="row">

                                @if ($car)
                                    <div class="col-lg-8">
                                        <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->car_name }}"
                                            style="width: 500px; height: 300px; object-fit: cover;" />
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="portfolio-info">
                                            <h3>Car Information</h3>
                                            <ul>
                                                <li><strong>Plate Number</strong>: {{ $car->plate_number }}</li>
                                                <li><strong>Car Name</strong>: {{ $car->car_name }}</li>
                                                <li><strong>Description</strong>: {{ $car->description }}</li>
                                                <li><strong>Model Year</strong>: {{ $car->car_model_year }}</li>
                                                <li><strong>Color</strong>: {{ $car->color }}</li>
                                                <li><strong>Rate</strong>: {{ $car->rate }}</li>
                                                <li><strong>Status</strong>: {{ $car->status }}</li>
                                            </ul>
                                            <br>
                                            <div style="display: flex; justify-content: center; align-items: center;">
                                                <button id="bookNowButton" class="btn btn-primary">Book Now</button>
                                                <input type="text" id="bookingDateTime" style="display: none;">
                                            </div>
                                        </div>

                                    </div>
                                @else
                                    <div class="col-lg-12">
                                        <p>Car not found.</p>
                                    </div>
                                @endif

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @include('layouts.resources.footer')
        </main>


    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        document.getElementById('bookNowButton').addEventListener('click', function() {
            flatpickr('#bookingDateTime', {
                enableTime: true,
                dateFormat: "Y-m-d H:i",
            }).open();
        });
    </script>

</body>

</html>
