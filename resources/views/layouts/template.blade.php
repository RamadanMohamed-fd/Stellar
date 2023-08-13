<!DOCTYPE html>
<html lang="zxx">

<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template Geekfolio Multi-Purpose themeforest">
    <meta name="description" content="Geekfolio - Multi-Purpose HTML5 Template">
    <meta name="author" content="">

    <!-- Title  -->
    <title>Steller of Qatar | Brand Secrets</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('front-assets/assets/imgs/Large-Logo-white.png')}}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&amp;display=swap"
          rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Epilogue:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
          rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('front-assets/assets/css/plugins.css')}}">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{asset('front-assets/assets/css/style.css')}}">

</head>

<body class="home-main-crev main-bg">



<!-- ==================== Start Loading ==================== -->

<div class="loader-wrap">
    <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
        <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
    </svg>

    <div class="loader-wrap-heading">
        <div class="load-text">
            <span>S</span>
            <span>T</span>
            <span>E</span>
            <span>L</span>
            <span>L</span>
            <span>A</span>
            <span>R</span>
        </div>
    </div>
</div>

<!-- ==================== End Loading ==================== -->


<div class="cursor"></div>


<!-- ==================== Start progress-scroll-button ==================== -->

<div class="progress-wrap cursor-pointer">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
</div>

<!-- ==================== End progress-scroll-button ==================== -->



<div id="smooth-wrapper">

    <!-- ==================== Start Navbar ==================== -->

    <nav class="navbar navbar-expand-lg bord main-bg">
        <div class="container">

            <!-- Logo -->
            <a class="logo icon-img-100" href="#">
                <img src="{{asset('front-assets/assets/imgs/Large-Logo-white.png')}}" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('stellar/innovation/home')}}"><span class="rolling-text">Home</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('stellar/innovation/about')}}"><span class="rolling-text">About Us</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('stellar/innovation/portfolio')}}"><span class="rolling-text">Portfolio</span></a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button"
                           aria-haspopup="true" aria-expanded="false"><span class="rolling-text">Services</span></a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{url('stellar/innovtion/marketing-consulting')}}">Marketing Consulting</a>
                            <a class="dropdown-item" href="{{url('stellar/innovtion/brand-development')}}">Brand Development</a>
                            <a class="dropdown-item" href="{{url('stellar/innovtion/video-production')}}">Video Production </a>
                            <a class="dropdown-item" href="{{url('stellar/innovtion/photography')}}">Photography</a>
                            <a class="dropdown-item" href="{{url('stellar/innovtion/social-media-management')}}">Social Media Management </a>
                            <a class="dropdown-item" href="{{url('stellar/innovation/social-media-marketing')}}">Digital Marketing</a>
                            <a class="dropdown-item" href="{{url('stellar/innovtion/ecommerce')}}">E-Commerce</a>


                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('stellar/innovation/contact')}}"><span class="rolling-text">Contact</span></a>
                    </li>



                </ul>
            </div>


    </nav>

    <!-- ==================== End Navbar ==================== -->

    <div id="smooth-content">

        <main class="main-bg">

            <!-- ==================== Start Slider ==================== -->



            <!-- ==================== End Slider ==================== -->



            @yield('content')


        </main>


        <!-- ==================== Start Footer ==================== -->

        <footer class="sub-bg">
            <div class="footer-container">
                <div class="container pb-80 pt-80 ontop">
                    <div class="call-box text-center mb-80">
                        <h2>
                            <a href="{{url('contact')}}">Let's <span class="stroke"> Discuss</span></a>
                            <span class="arrow">
                                    <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                        </h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="colum md-mb50">
                                <div class="tit mb-20">
                                    <h6>Address</h6>
                                </div>
                                <div class="text">
                                    <p>Level 22, Tornado Tower, Doha - Qatar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 offset-lg-1">
                            <div class="colum md-mb50">
                                <div class="tit mb-20">
                                    <h6>Say Hello</h6>
                                </div>
                                <div class="text">
                                    <p class="mb-10">
                                        <a href="mailto:info@stellarofqatar.com">info@stellarofqatar.com</a>
                                    </p>
                                    <h5>
                                        <a href="#">00974 77757916</a>
                                    </h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 md-mb50">
                            <div class="tit mb-20">
                                <h6>Social</h6>
                            </div>
                            <ul class="rest social-text">
                                <li>
                                    <a href="#0">Facebook</a>
                                </li>
                                <li>
                                    <a href="#0">Twitter</a>
                                </li>
                                <li>
                                    <a href="#0">LinkedIn</a>
                                </li>
                                <li>
                                    <a href="#0">Instagram</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <div class="tit mb-20">
                                <h6>Newsletter</h6>
                            </div>
                            <div class="subscribe">
                                <form action="https://ui-themez.smartinnovates.net/items/geekfolio/dark/contact.php">
                                    <div class="form-group rest">
                                        <input type="email" placeholder="Type Your Email">
                                        <button type="submit">
                                            <i class="fas fa-arrow-right"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub-footer pt-40 pb-40 bord-thin-top ontop">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="logo">
                                    <a href="#">
                                        <img src="{{'front-assets/assets/imgs/Large-Logo-white.png'}}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="copyright d-flex">
                                    <div class="ml-auto">
                                        <p class="fz-13">© 2023 Steller </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <!-- ==================== End Footer ==================== -->


    </div>
</div>



<!-- jQuery -->
<script src="{{asset('front-assets/assets/js/jquery-3.6.0.min.js')}}"></script>


<!-- jQuery -->
<script src="{{asset('front-assets/assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('front-assets/assets/js/jquery-migrate-3.4.0.min.js')}}"></script>

<!-- plugins -->
<script src="{{asset('front-assets/assets/js/plugins.js')}}"></script>

<script src="{{asset('front-assets/assets/js/ScrollTrigger.min.js')}}"></script>
<script src="{{asset('front-assets/assets/js/hscroll.js')}}"></script>

<!-- custom scripts -->
<script src="{{asset('front-assets/assets/js/scripts.js')}}"></script>
</body>
</html>
