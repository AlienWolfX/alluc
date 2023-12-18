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

        @include('layouts.resources.header')

        <main class="py-4" id="main">
            <section id="hero" class="d-flex justify-cntent-center align-items-center">
                <div id="heroCarousel" data-bs-interval="5000" class="container carousel carousel-fade"
                    data-bs-ride="carousel">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <div class="carousel-container">
                            <h2 class="animate__animated animate__fadeInDown">ALLUC</h2>
                            <p class="animate__animated animate__fadeInUp">
                                Embark on a journey of unparalleled freedom and convenience with
                                ALLUC Car Rental Company. Our mission is to redefine your travel
                                experience by offering a fleet of top-notch vehicles, unbeatable
                                rates, and a commitment to delivering exceptional service. Whether
                                you're planning a weekend escape or a cross-country adventure,
                                we've got the keys to make it unforgettable. Explore the world on
                                your terms, and let us be your trusted companion on the road.
                                Welcome to a new era of car rental excellence.
                            </p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>

                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <div class="carousel-container">
                            <h2 class="animate__animated animate__fadeInDown">Benefits</h2>
                            <p class="animate__animated animate__fadeInUp">
                                Discover the freedom of hassle-free travel with our car rental
                                service. Enjoy the convenience of no long-term commitments and the
                                flexibility to go wherever you desire, whenever you please. Our
                                affordable rates make adventures accessible to all, and our
                                diverse fleet ensures you have the perfect vehicle for every
                                occasion. Say goodbye to maintenance worries, as we take care of
                                that for you. Safety and reliability are our top priorities, so
                                you can journey with peace of mind. Save both time and money on
                                your trips, and experience the joy of instant mobility. Your
                                adventures await – all you have to do is choose a car and hit the
                                road.
                            </p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>

                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <div class="carousel-container"></div>
                    </div>

                    <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
                    </a>

                    <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
                    </a>
                </div>
            </section>
            <section id="icon-boxes" class="icon-boxes">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
                            <div class="icon-box text-center">
                                <div class="icon"><i class="bi bi-cash-coin"></i></div>
                                <h4 class="title text-center">
                                    <a href="">Budget-friendly</a>
                                </h4>
                                <p class="description text-justify">
                                    Unlock affordable adventures with us. Low rates, no hidden
                                    fees. Drive more, pay less. Your journey, your budget. Visit
                                    today.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                            data-aos-delay="100">
                            <div class="icon-box text-center">
                                <div class="icon"><i class="bi bi-check-lg"></i></div>
                                <h4 class="title"><a href="">Trusted</a></h4>
                                <p class="description">
                                    Count on our trusted service. Safety, reliability, and
                                    customer satisfaction are our priorities. Your journey, our
                                    commitment. Explore with confidence.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                            data-aos-delay="200">
                            <div class="icon-box text-center">
                                <div class="icon"><i class="bi bi-car-front-fill"></i></div>
                                <h4 class="title"><a href="">Quality</a></h4>
                                <p class="description">
                                    Experience top-quality rentals. Immaculate vehicles,
                                    exceptional service. Your journey, our excellence. Drive in
                                    style and comfort. Discover premium car rentals today.
                                </p>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up"
                            data-aos-delay="300">
                            <div class="icon-box text-center">
                                <div class="icon"><i class="bi bi-geo-alt"></i></div>
                                <h4 class="title"><a href="">Accessible</a></h4>
                                <p class="description">
                                    Enjoy easy access to our rentals. Convenient pick-up and
                                    drop-off. Your journey, our flexibility. Unlock seamless
                                    travel with us today.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="portfolio" class="portfoio">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Available Cars</h2>
                        <p>
                            Discover our diverse fleet. From compact to luxury, we have the
                            perfect car for your journey. Choose your ride today
                        </p>
                    </div>

                    {{-- <div class="row">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <ul id="portfolio-flters">
                                <li data-filter="*" class="filter-active">All</li>
                                <li data-filter=".filter-app">High-demand vehicles</li>
                                <li data-filter=".filter-web">Preferred Choice</li>
                                <li data-filter=".filter-card">Popular picks</li>
                            </ul>
                        </div>
                    </div> --}}

                    <div class="row portfolio-container">
                        @foreach($cars as $car)
                        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                            <img src="{{ asset('storage/' . $car->image) }}" class="img-fluid" alt="{{ $car->car_name }}" />
                            <div class="portfolio-info">
                                <h4>{{ $car->car_name }}</h4>
                                <a href="{{ asset('storage/' . $car->image) }}" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="{{$car->car_name}}" contents="sfdf">
                                    <i class="bx bx-plus"></i>
                                </a>
                                <a href="{{ route('car.show', ['id' => $car->car_id]) }}" class="details-link" title="More Details">
                                    <i class="bx bx-link"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </section>
            <section id="contact" class="contact">
                <div class="container" data-aos="fade-up">
                    <div class="section-title">
                        <h2>Contact Us</h2>
                    </div>

                    <div class="row mt-1 d-flex justify-content-end" data-aos="fade-right" data-aos-delay="100">
                        <div class="col-lg-5">
                            <div class="info">
                                <div class="address">
                                    <i class="bi bi-geo-alt"></i>
                                    <h4>Location:</h4>
                                    <p>
                                        KM 7 NH1, Butuan City, Agusan Del Norte, Philippines 8600
                                    </p>
                                </div>

                                <div class="email">
                                    <i class="bi bi-envelope"></i>
                                    <h4>Email:</h4>
                                    <p>ALLUC@gmail.com</p>
                                </div>

                                <div class="phone">
                                    <i class="bi bi-phone"></i>
                                    <h4>Call:</h4>
                                    <p>09631922544</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="100">
                            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <input type="text" name="name" class="form-control" id="name"
                                            placeholder="Your Name" required />
                                    </div>
                                    <div class="col-md-6 form-group mt-3 mt-md-0">
                                        <input type="email" class="form-control" name="email" id="email"
                                            placeholder="Your Email" required />
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject" required />
                                </div>
                                <div class="form-group mt-3">
                                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                                </div>
                                <div class="my-3">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">
                                        Your message has been sent. Thank you!
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="submit">Send Message</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            @include("layouts.resources.footer")
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

</body>

</html>
