<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Thank You - Stellar Euphoria">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Thank You - Stellar Euphoria</title>
    <link rel="stylesheet" href="{{asset('public/euphoria/css/core-style.css')}}">
    <link rel="stylesheet" href="{{asset('public/euphoria/style.css')}}">
    <link href="{{asset('public/euphoria/css/responsive.css')}}" rel="stylesheet">
</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <div class="showbox">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
</div>

<!-- Gradient Background Overlay -->
<div class="gradient-background-overlay"></div>

<!-- Header Area Start -->
<header class="header-area bg-img" style="background-image: url({{asset('public/euphoria/img/bg-img/14.jpg')}});">
    <div class="container-fluid h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12 h-100">
                <div class="main-menu h-100">
                    <nav class="navbar h-100 navbar-expand-lg">
                        <!-- Logo Area  -->
                        <a class="navbar-brand" href="{{url('stellar/euphoria/home')}}"><img src="{{asset('public/euphoria/img/core-img/logo.png')}}" alt="Logo"></a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#studioMenu" aria-controls="studioMenu" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i> Menu</button>

                        <div class="collapse navbar-collapse" id="studioMenu">
                            <!-- Menu Area Start  -->
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{url('stellar/euphoria/home')}}">Home <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('stellar/euphoria/about')}}">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('stellar/euphoria/portfolio')}}">Portfolio</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('stellar/euphoria/blog')}}">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{url('stellar/euphoria/contact')}}">Contact</a>
                                </li>
                            </ul>
                            <!-- Search Form -->
                            <div class="header-search-form ml-auto">
                                <form action="#">
                                    <input type="search" class="form-control" placeholder="Input your keyword then press enter..." id="search" name="search">
                                    <input class="d-none" type="submit" value="submit">
                                </form>
                            </div>
                            <!-- Search btn -->
                            <div id="searchbtn">
                                <img src="{{asset('public/euphoria/img/core-img/search.png')}}" alt="">
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->

<!-- Thank You Page Content -->
<section class="thank-you-page-content section_padding_100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="thank-you-message text-center">
                    <br /><br />
                    <h2>Thank You!</h2>
                    <p>Thank you for your interest in Stellar Euphoria Scale Model Making. We appreciate your support and will be happy to assist you further. Choose from the following options to continue exploring:</p>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-md-4">
                <div class="single-option text-center wow fadeInUp" data-wow-delay="0.1s">
                    <a class="btn btn-primary" href="{{url('stellar/euphoria/home')}}">Back to Homepage</a>
                    <p>If you wish to go back to the homepage and continue exploring Stellar Euphoria, click the button above.</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="single-option text-center wow fadeInUp" data-wow-delay="0.4s">
                    <a class="btn btn-primary" href="{{url('stellar/euphoria/blog')}}">Blog</a>
                    <p>If you would like to learn more about model making from our perspective, click the button above to visit our blog.</p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="single-option text-center wow fadeInUp" data-wow-delay="0.7s">
                    <a class="btn btn-primary" href="{{url('stellar/euphoria/portfolio')}}">Portfolio</a>
                    <p>To see the portfolio of our work and explore our scale models, click the button above.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Core JavaScript -->
<script src="{{asset('public/euphoria/js/jquery/jquery-2.2.4.min.js')}}"></script>
<script src="{{asset('public/euphoria/js/plugins.js')}}"></script>
<script src="{{asset('public/euphoria/js/active.js')}}"></script>

</body>

</html>
