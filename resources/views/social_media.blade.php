<!DOCTYPE html>
<html lang="zxx">
<head>

    <!-- Metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="Stellar of Qatar">
    <meta name="description" content="Stellar of Qatar">
    <meta name="author" content="">

    <!-- Title  -->
    <title>Stellar of Qatar</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/imgs/favicon.ico">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@100;200;300;400;500;600;700;800&amp;display=swap"
          rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;1,400;1,500;1,600;1,700;1,800&amp;display=swap"
        rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{asset('front-assets/assets/css/plugins.css')}}">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{asset('front-assets/assets/css/style.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('front-assets/assets/css/base.css')}}">

</head>

<body class="sub-bg">


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


<main class="main-bg">


    <div class="main-box main-bg ontop">


        <!-- ==================== Start Slider ==================== -->

        <header class="header-main full-height valign bg-img parallaxie"
                data-background="{{asset('front-assets/assets/imgs/background/14.jpg')}}" data-overlay-dark="7">
            <div class="container ontop">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="caption">
                            <h5 class="fw-300 mb-15">Supercharge Your Social Media Performance with a Free Audit</h5>
                            <h3 class="">Discover where you stand among your competitors
                                and unlock strategies for skyrocketing success</h3>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-end justify-content-end justify-end">
                        <div class="d-flex align-items-center">
                            <div>
                                <a href="#" class="hover-this">
                                    <div class="circle-button hover-anim">
                                        <div class="rotate-circle fz-30 text-u">
                                            <svg class="textcircle" viewBox="0 0 500 500">
                                                <defs>
                                                    <path id="textcircle"
                                                          d="M250,400 a150,150 0 0,1 0,-300a150,150 0 0,1 0,300Z">
                                                    </path>
                                                </defs>
                                                <text>
                                                    <textPath xlink:href="#textcircle" textLength="900">Get Your Free Audit Now
                                                    </textPath>
                                                </text>
                                            </svg>
                                        </div>
                                        <div class="arrow">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                    fill="currentColor"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- ==================== End Slider ==================== -->



        <!-- ==================== Start About ==================== -->

        <section class="about section-padding">
            <div class="container">
                <div class="row md-marg">
                    <div class="col-lg-8 valign">
                        <div class="cont md-mb50">
                            <h6 class="sub-title opacity-8 wow fadeInUp">Boost Your Social Media Performance with a Free Audit</h6>
                            <h5 class="d-slideup wow">
                                    <span class="sideup-text">
                                        <span class="up-text">Are you looking to elevate your social media game and outshine your competitors? Get ready to supercharge your online presence with our free social media audit!
                                            Discover how you stack up against your top three competitors and uncover valuable insights to enhance your performance.</span>
                                    </span>
                            </h5>


                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="img">
                            <img src="{{asset('front-assets/assets/imgs/about/2.jpg')}}" alt="">

                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="about section-padding">
            <div class="container">
                <div class="row md-marg">
                    <div class="col-lg-4">
                        <div class="img">
                            <img src="{{asset('front-assets/assets/imgs/about/2.jpg')}}" alt="">

                        </div>
                    </div>

                    <div class="col-lg-8 valign">
                        <div class="cont md-mb50">
                            <h6 class="sub-title opacity-8 wow fadeInUp">Unlock the Power of Data:</h6>
                            <h5 class="d-slideup wow">
                                    <span class="sideup-text">
                                        <span class="up-text">Our team of experts will conduct a comprehensive analysis of your social media presence, leaving no stone unturned. We'll examine your profiles across
                                            various platforms, evaluate your content strategy, assess engagement levels, and scrutinize your competitor's activities</span>
                                    </span>
                            </h5>


                        </div>
                    </div>

                </div>
            </div>
        </section>

        <!-- ==================== End About ==================== -->



        <!-- ==================== Start Portfolio ==================== -->

        <section class="portfolio-fixed">
            <div class="container-fluid rest">
                <div class="row">
                    <div class="col-lg-6 rest">
                        <div class="left" id="sticky_item">
                            <div id="tab-1" class="img bg-img"
                                 data-background="{{asset('front-assets/assets/imgs/portfolio/gallery/1.jpg')}}">
                            </div>
                            <div id="tab-2" class="img bg-img"
                                 data-background="{{asset('front-assets/assets/imgs/portfolio/gallery/2.jpg')}}">
                            </div>
                            <div id="tab-3" class="img bg-img"
                                 data-background="{{asset('front-assets/assets/imgs/portfolio/gallery/3.jpg')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 sub-bg right">
                        <div class="cont active" data-tab="tab-1">
                            <div class="img-hiden">
                                <img src="{{asset('front-assets/assets/imgs/portfolio/gallery/1.jpg')}}" alt="">
                            </div>

                            <h2 class="mb-15">Comprehensive Social Media Analysis:</h2>
                            <div class="row">
                                <div class="col-md-9">
                                    <p>Our free audit offers a comprehensive analysis of your social media presence. We examine your profiles across various platforms, evaluate your content strategy, and assess engagement levels. By delving into the nitty-gritty details, we provide
                                        you with a clear picture of your strengths and weaknesses, enabling you to make data-driven decisions for improvement.</p>

                                </div>
                            </div>
                        </div>
                        <div class="cont" data-tab="tab-2">
                            <div class="img-hiden">
                                <img src="{{asset('front-assets/assets/imgs/portfolio/gallery/2.jpg')}}" alt="">
                            </div>

                            <h2 class="mb-15">Benchmark Against Competitors</h2>
                            <div class="row">
                                <div class="col-md-9">
                                    <p>Discover how you rank among your top three competitors with our audit. We analyze their social media activities, strategies, and tactics to provide you with insights on what's working for them. This
                                        benchmarking allows you to identify new opportunities, learn from successful practices, and stay ahead of the competition.</p>

                                </div>
                            </div>
                        </div>
                        <div class="cont" data-tab="tab-3">
                            <div class="img-hiden">
                                <img src="{{asset('front-assets/assets/imgs/portfolio/gallery/3.jpg')}}" alt="">
                            </div>
                            <h2 class="mb-15">Actionable Recommendations for Success.</h2>
                            <div class="row">
                                <div class="col-md-9">
                                    <p>Our audit report goes beyond just highlighting areas of improvement. We provide you with actionable recommendations tailored specifically to your brand. These recommendations will guide you in implementing effective
                                        strategies to boost your social media performance, increase your followers, improve engagement, and generate more leads..</p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Portfolio ==================== -->



        <!-- ==================== Start about ==================== -->

        <section class="intro-corp section-padding">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-lg-5 valign md-mb50">
                        <div class="imgs mb-80">
                            <div class="img1 wow fadeInUp">
                                <img src="{{asset('front-assets/assets/imgs/about/sq1.jpg')}}" alt="">
                            </div>
                            <div class="img2 wow fadeInLeft">
                                <img src="{{asset('front-assets/assets/imgs/about/sq2.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 valign">
                        <div class="cont">
                            <div class="text">
                                <h4 class="d-slideup wow">
                                        <span class="sideup-text">
                                            <span class="up-text">Don't miss out on this opportunity
                                                to supercharge your social media presence. Claim your free audit now and unleash your brand's true potential!</span>
                                        </span>


                                </h4>
                                <button type="submit" class="butn butn-full butn-bord radius-30">
                                    <span class="text">Get Your Free Audit Now!</span>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End about ==================== -->







    </div>

    <!-- ==================== Start Contact ==================== -->

    <section class="contact-crev no-crev section-padding">
        <div class="contact-container">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2>Get Your Free Audit Now!</h2>
                        <h4>Get Your Free Audit Now!</h4>
                        <br>
                        <p>
                            Is your social media performance falling short of expectations? We understand the challenges businesses face when it comes to optimizing their social media strategies. As a token of our commitment to helping you succeed,
                            we are offering a complimentary Social Media Audit and Action Plan for clients who receive a low score on our assessment.
                        </p>
                        <br>
                        <h4>Here's what you'll receive:</h4>
                        <br>
                        <p>
                            Social Media Audit: Our experts will conduct a thorough evaluation of your current social media presence, analyzing key metrics, content strategy, audience engagement, branding consistency,
                            and more. This comprehensive audit will identify areas for improvement and highlight untapped opportunities
                        </p>
                        <br>
                        <p>
                            Customized Action Plan: Based on the findings of the audit, we will create a tailored Action Plan specifically designed to address the shortcomings and maximize the potential of your social media channels. This plan
                            will provide actionable steps, strategic recommendations, and best practices to elevate your social media performance.
                        </p>
                        <br>
                        <p>
                            Expert Recommendations: Our team of experienced social media professionals will provide personalized recommendations based on industry trends and your specific business goals.
                            These insights will help you navigate the ever-changing social media landscape and stay ahead of your competitors.
                        </p>
                        <br>
                        <p>
                            Consultation Session: To ensure you have a clear understanding of the Action Plan and recommendations, we will schedule a consultation session to discuss the findings in detail.
                            This session will provide an opportunity to ask questions, clarify strategies, and gain valuable insights from our experts.
                        </p>
                        <br>
                        <p>
                            Take the first step toward transforming your social media presence and driving better results. Contact us today to claim your free Social Media Audit and Action Plan.
                            Let us partner with you to unlock the true potential of your social media channels and achieve your business objectives.
                        </p>
                        <br>
                        <button type="submit" style="width: 300px;" class="butn butn-full butn-bord radius-30">
                            <span class="text">Get Your Free Audit Now!</span>
                        </button>
                        <br><br>

                        <h4>To claim your free Social Media Audit and Action Plan, contact us at<br><b> 00974 77757916</b> or mail to <span ><a href="mailto:info@stellarofqatar.com"><b><u>info@stellarofqatar.com</u></b></a> </span>
                            Don't miss this opportunity to revitalize your social media strategy and propel your business to new heights</h4>
                        <br>
                        <br>
                        <p><b>Remember, improvement starts
                                with taking action. Reach out to us today and let's transform your social media presence together!</b></p>

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Contact ==================== -->

</main>



<!-- ==================== Start Footer ==================== -->

<footer class="sub-bg">
    <div class="footer-container">
        <div class="container pb-80 pt-80 ontop">
            <div class="call-box text-center mb-80">
                <h2>
                    <a href="{{url('stellar/innovation/contact')}}">Let's <span class="stroke"> Discuss</span></a>
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
                                <img src="{{asset('front-assets/assets/imgs/Large-Logo-white.png')}}" alt="">
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







<!-- jQuery -->
<script src="{{asset('front-assets/assets/js/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('front-assets/assets/js/jquery-migrate-3.4.0.min.js')}}"></script>

<!-- plugins -->
<script src="{{asset('front-assets/assets/js/plugins.js')}}"></script>

<script src="{{asset('front-assets/assets/js/ScrollTrigger.min.js')}}"></script>

<!-- custom scripts -->
<script src="{{asset('front-assets/assets/js/scripts.js')}}"></script>

</body>
</html>
