<!doctype html>
<html class="no-js')}}" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Aplikasi Absensi Broo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('ihh/assets/img/favicon.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('ihh/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ihh/assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ihh/assets/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('ihh/assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('ihh/assets/css/progressbar_barfiller.css') }}">
    <link rel="stylesheet" href="{{ asset('ihh/assets/css/gijgo.css') }}">
    <link rel="stylesheet" href="{{ asset('ihh/assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ihh/assets/css/animated-headline.css') }}">
    <link rel="stylesheet" href="{{ asset('ihh/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('ihh/assets/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('ihh/assets/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('ihh/assets/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('ihh/assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('ihh/assets/css/style.css') }}">

</head>

<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('kamuaku/images/logo-custom.png') }}" alt="">

                    {{-- <img src="{{asset('ihh/assets/img/logo/loder.png')}}" alt=""> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    <header>
        <!-- Header Start -->
        <div class="header-area header-transparent">
            <div class="main-header ">
                <div class="header-bottom  header-sticky">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <!-- Logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="{{ asset('kamuaku/images/logo-custom.png') }}"
                                            width="150px" height="70" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10">
                                <div class="menu-wrapper d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                        <nav>
                                            <ul id="navigation">

                                                @if (Route::has('login'))
                                                    @auth
                                                        <li class="nav-item text-light">
                                                            <a href="{{ url('/home') }}"
                                                                class="nav-link text-light">Home</a>
                                                        </li>
                                                    @else
                                                        <li class="button-header">
                                                            <a href="{{ route('login') }}" class="btn btn3 mt-1">Masuk</a>
                                                        </li>
                                                        @if (Route::has('register'))
                                                            <li class="nav-item">
                                                                <a href="{{ route('register') }}"
                                                                    class="nav-link  text-light">Register</a>
                                                            </li>
                                                        @endif
                                                    @endauth
                                                @endif

                                                <li><a href="{{ url('/contact') }}">Kontak</a></li>
                                                <!-- Button -->

                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            <!-- Mobile Menu -->
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
    </header>
    <main>
        <!--? slider Area Start-->
        <section class="slider-area ">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-7 col-md-12">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.7s">Situs web<br>Absensi</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.8s">Mudah Digunakan Dan Cepat</p>
                                    <p data-animation="fadeInLeft" data-delay="0.8s">Pokonyamah Gaskeunss Buakaaarrrrr
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ? services-area -->
        <div class="services-area">
            <div class="container">
                <div class="row justify-content-sm-center">
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="{{ asset('ihh/assets/img/icon/icon1.svg') }}" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Menjadi Mudah</h3>
                                <p>Proses Absensi Lebih Menjadi Mudah</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="{{ asset('ihh/assets/img/icon/icon2.svg') }}" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Proses</h3>
                                <p>Memproses Data Secara Otomatis</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-8">
                        <div class="single-services mb-30">
                            <div class="features-icon">
                                <img src="{{ asset('ihh/assets/img/icon/icon3.svg') }}" alt="">
                            </div>
                            <div class="features-caption">
                                <h3>Efisien</h3>
                                <p>Efisien Dalam Melakukan Absensi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Courses area start -->

        <!-- Courses area End -->
        <!--? About Area-1 Start -->

        <!-- About Area End -->
        <!--? top subjects Area Start -->

        <!-- top subjects End -->
        <!--? About Area-3 Start -->

        <!-- About Area End -->
        <!--? Team -->
        <section class="team-area section-padding40 fix">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-8">
                        <div class="section-tittle text-center mb-55">
                            <h2>Community experts</h2>
                        </div>
                    </div>
                </div>
                <div class="team-active">

                    <div class="single-cat text-center">
                        <div class="cat-icon">
                            <img src="{{ asset('ihh/assets/img/gallery/sur.jfif') }}" width="194px" height="190px"
                                style="border-radius: 128px; border: 12px solid #efefef;" alt="">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">Mr. Surr</a></h5>
                            <p>Rekayasa Perangkat lunak XII Rpl 3</p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Services End -->
        <!--? About Area-2 Start -->

        <!-- About Area End -->
    </main>
    <footer>
        <div class="footer-wrappper footer-bg">
            <!-- Footer Start-->
            <div class="footer-area footer-padding">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-xl-4 col-lg-5 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="single-footer-caption mb-30">
                                    <!-- logo -->
                                    <div class="footer-logo mb-25 mr-10">
                                        <a href="index.html"><img src="{{ asset('kamuaku/images/logo-custom.png') }}"
                                                width="300px" height="130px" alt=""></a>
                                    </div>
                                    <div class="footer-tittle">
                                        <div class="footer-pera">
                                            <p>Sekolah Idaman Dan Terfavorit Se Bandung Raya</p>
                                        </div>
                                    </div>
                                    <!-- social -->
                                    <div class="footer-social">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="https://bit.ly/sai4ull"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-5">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Best</h4>
                                    <ul>
                                        <li><a href="#">Designer And Kreatf</a></li>
                                        <li><a href="#">Telecommunication</a></li>
                                        <li><a href="#">Kami Adalah Programmer</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-4 col-md-4 col-sm-6">
                            <div class="single-footer-caption mb-50">
                                <div class="footer-tittle">
                                    <h4>Support</h4>
                                    <ul>
                                        <li><a href="https://www.instagram.com/khiuzy/">Follow Instagram Kami</a></li>
                                        <li><a href="https://www.instagram.com/kwnadd/">Follow Instagram Kami</a></li>
                                        <li><a href="https://smkassalaambandung.sch.id/">Lihat Sekolah Saya</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- footer-bottom area -->
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="footer-border">
                        <div class="row d-flex align-items-center">
                            <div class="col-xl-12 ">
                                <div class="footer-copy-right text-center">
                                    <p>
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                        Copyright &copy; Dengan Teman Saya Dengan Hati
                                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End-->
        </div>
    </footer>
    <!-- Scroll Up -->
    <div id="back-top">
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>

    <!-- JS here -->
    <script src="{{ asset('ihh/assets/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('ihh/assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('ihh/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('ihh/assets/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('ihh/assets/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('ihh/assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('ihh/assets/js/slick.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('ihh/assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('ihh/assets/js/animated.headline.js') }}"></script>
    <script src="{{ asset('ihh/assets/js/jquery.magnific-popup.js') }}"></script>

    <!-- Date Picker -->
    <script src="{{ asset('ihh/assets/js/gijgo.min.js') }}"></script>
    <!-- Nice-select, sticky -->
    <script src="{{ asset('ihh/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('ihh/assets/js/jquery.sticky.js') }}"></script>
    <!-- Progress -->
    <script src="{{ asset('ihh/assets/js/jquery.barfiller.js') }}"></script>

    <!-- counter , waypoint,Hover Direction -->
    <script src="{{ asset('ihh/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('ihh/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('ihh/assets/js/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('ihh/assets/js/hover-direction-snake.min.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('ihh/assets/js/contact.js') }}"></script>
    <script src="{{ asset('ihh/assets/js/jquery.form.js') }}"></script>
    <script src="{{ asset('ihh/assets/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('ihh/assets/js/mail-script.js') }}"></script>
    <script src="{{ asset('ihh/assets/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('ihh/assets/js/plugins.js') }}"></script>
    <script src="{{ asset('ihh/assets/js/main.js') }}"></script>

</body>

</html>
