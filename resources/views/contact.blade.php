<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Courses | Education</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="ihh/assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="ihh/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="ihh/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="ihh/assets/css/slicknav.css">
    <link rel="stylesheet" href="ihh/assets/css/animate.min.css">
    <link rel="stylesheet" href="ihh/assets/css/hamburgers.min.css">
    <link rel="stylesheet" href="ihh/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="ihh/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="ihh/assets/css/themify-icons.css">
    <link rel="stylesheet" href="ihh/assets/css/themify-icons.css">
    <link rel="stylesheet" href="ihh/assets/css/slick.css">
    <link rel="stylesheet" href="ihh/assets/css/nice-select.css">
    <link rel="stylesheet" href="ihh/assets/css/style.css">
</head>
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="ihh/assets/img/logo/loder.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<!-- Header Start -->
<div class="header-area header-transparent">
    <div class="main-header ">
        <div class="header-bottom  header-sticky">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <!-- Logo -->
                    <div class="col-xl-2 col-lg-2">
                        <div class="logo">
                            <a href="index.html"><img src="kamuaku/images/logo-custom.png" width="70px" height="50" alt=""></a>
                        </div>
                    </div>
                    <div class="col-xl-10 col-lg-10">
                        <div class="menu-wrapper d-flex align-items-center justify-content-end">
                            <!-- Main-menu -->
                            <div class="main-menu d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">  
                                        <li class="active" ><a href="{{ url('/') }}">Home</a></li>                                                                                        
                                        
                                        <!-- Button --> @if (Route::has('login'))
                                              @auth
                                              <li class="nav-item text-light">
                                                  <a href="{{ url('/home') }}" class="nav-link text-light">Home</a> 
                                              </li>
                                              @else
                                                  <li class="button-header">
                                                  <a href="{{ route('login') }}" class="btn btn3 mt-1">Login</a>
                                                  </li>
                                                  @if (Route::has('register'))
                                                  <li class="nav-item">
                                                      <a href="{{ route('register') }}" class="nav-link btn btn3">Register</a>
                                                  </li>
                                                  @endif
                                              @endauth
                                         @endif

                                        {{-- <li class="button-header margin-left "><a href="#" class="btn">Join</a></li>
                                        <li class="button-header"><a href="login.html" class="btn btn3">Log in</a></li> --}}
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
<main>
    <!--? slider Area Start-->
    <section class="slider-area slider-area2">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height2">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-11 col-md-12">
                            <div class="hero__caption hero__caption2">
                                <h1 data-animation="bounceIn" data-delay="0.2s">Kontak Kami Nichh</h1>
                                <!-- breadcrumb Start-->
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        
                                    </ol>
                                </nav>
                                <!-- breadcrumb End -->
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
        </div>
    </section>
    <!--?  Contact Area start  -->
    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d76817.97268728593!2d107.58236138501962!3d-6.978918480009677!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8deccecb6f1%3A0x658cc60fbe5017b9!2sSMK%20Assalaam%20Bandung!5e0!3m2!1sid!2sid!4v1659977188672!5m2!1sid!2sid" width="1200" height="700" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                <script>
                    function initMap() {
                        var uluru = {
                            lat: -25.363,
                            lng: 131.044
                        };
                        var grayStyles = [{
                            featureType: "all",
                            stylers: [{
                                saturation: -90
                            },
                            {
                                lightness: 50
                            }
                            ]
                        },
                        {
                            elementType: 'labels.text.fill',
                            stylers: [{
                                color: '#ccdee9'
                            }]
                        }
                        ];
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: {
                                lat: -31.197,
                                lng: 150.744
                            },
                            zoom: 9,
                            styles: grayStyles,
                            scrollwheel: false
                        });
                    }
                </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&amp;callback=initMap">
                </script>
                
            </div>
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">Berhubungan</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Pesanmu'" placeholder=" Masukan Pesanmu"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Namamu'" placeholder="Masukan Namamu">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Email Mu'" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Masukan Subject Mu'" placeholder="Masukan Subject">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Kirim</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Indonesia</h3>
                            <p>Bandung Jawa Barat</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>0897-1287-8799</h3>
                            <p>Bebas Tlp Dari jam 09.00 - 15.00</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>Dukung Sekolah Kami SmkAssalaamBandung</h3>
                            <p>Kirim Kan Pesan Jika Ada Yang Mau Dipesan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
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
                                   <a href="index.html"><img src="kamuaku/images/logo-custom.png" width="300px" height="130px" alt=""></a>
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
                               <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                 Copyright &copy; Dengan Teman Saya Dengan Hati
                                 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <!-- Footer End-->
     </div>
 </footer> 
  <div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>
<!-- JS here -->

<script src="ihh/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="ihh/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="ihh/assets/js/popper.min.js"></script>
<script src="ihh/assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="ihh/assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="ihh/assets/js/owl.carousel.min.js"></script>
<script src="ihh/assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="ihh/assets/js/wow.min.js"></script>
<script src="ihh/assets/js/animated.headline.js"></script>
<script src="ihh/assets/js/jquery.magnific-popup.js"></script>

<!-- Date Picker -->
<script src="ihh/assets/js/gijgo.min.js"></script>
<!-- Nice-select, sticky -->
<script src="ihh/assets/js/jquery.nice-select.min.js"></script>
<script src="ihh/assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="ihh/assets/js/jquery.counterup.min.js"></script>
<script src="ihh/assets/js/waypoints.min.js"></script>
<script src="ihh/assets/js/jquery.countdown.min.js"></script>
<script src="ihh/assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="ihh/assets/js/contact.js"></script>
<script src="ihh/assets/js/jquery.form.js"></script>
<script src="ihh/assets/js/jquery.validate.min.js"></script>
<script src="ihh/assets/js/mail-script.js"></script>
<script src="ihh/assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="ihh/assets/js/plugins.js"></script>
<script src="ihh/assets/js/main.js"></script>

</body>
</html>