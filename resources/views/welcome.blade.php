@extends('layouts.template')
@section('content')
    @include('layouts.header')

    <!-- ==================== Start about ==================== -->

    <section class="about-intro section-padding">
        <div class="container">
            <div class="row mb-80">
                <div class="col-lg-5">
                    <div class="sec-lg-head md-mb30">
                        <h6 class="dot-titl-non mb-15 wow fadeIn">OUR BENEFITS</h6>
                        <h2 class="d-rotate wow">
                            <span class="rotate-text">Our Team of Dedicated Digital Professionals.</span>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-5 offset-lg-2 valign">
                    <div class="text">
                        <p class="d-slideup wow">
                                        <span class="sideup-text">
                                            <span class="up-text">Through our years of experience, we’ve also learned that while</span>
                                        </span>
                            <span class="sideup-text">
                                            <span class="up-text">each channel has its own set of advantages, they all work best</span>
                                        </span>
                            <span class="sideup-text">
                                            <span class="up-text">when strategically paired with other channels.</span>
                                        </span>
                        </p>
                        <div class="vew-all mt-50 ml-30 wow fadeIn" data-wow-delay=".8s">
                            <a href="blog-classic.html">View All Our News
                                <span>
                                                <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M13.922 4.5V11.8125C13.922 11.9244 13.8776 12.0317 13.7985 12.1108C13.7193 12.1899 13.612 12.2344 13.5002 12.2344C13.3883 12.2344 13.281 12.1899 13.2018 12.1108C13.1227 12.0317 13.0783 11.9244 13.0783 11.8125V5.51953L4.79547 13.7953C4.71715 13.8736 4.61092 13.9176 4.50015 13.9176C4.38939 13.9176 4.28316 13.8736 4.20484 13.7953C4.12652 13.717 4.08252 13.6108 4.08252 13.5C4.08252 13.3892 4.12652 13.283 4.20484 13.2047L12.4806 4.92188H6.18765C6.07577 4.92188 5.96846 4.87743 5.88934 4.79831C5.81023 4.71919 5.76578 4.61189 5.76578 4.5C5.76578 4.38811 5.81023 4.28081 5.88934 4.20169C5.96846 4.12257 6.07577 4.07813 6.18765 4.07812H13.5002C13.612 4.07813 13.7193 4.12257 13.7985 4.20169C13.8776 4.28081 13.922 4.38811 13.922 4.5Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 rest">
                    <div class="imgs md-mb50">
                        <div class="img1">
                            <div class="o-hidden">
                                <div class="imago wow">
                                    <img src="{{asset('front-assets/assets/imgs/about/01.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="img2">
                            <div class="o-hidden">
                                <div class="imago wow">
                                    <img src="{{asset('front-assets/assets/imgs/about/1.jpg')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 valign rest">
                    <div class="cont">
                        <h2 class="d-rotate wow">
                            <span class="rotate-text">Unlock Revenue Growth for Your Business.</span>
                        </h2>
                        <div class="feat mt-80">
                            <div class="item-flex d-flex align-items-center mb-50 wow fadeIn" data-wow-delay=".4s">
                                <div>
                                    <div class="icon-img-50">
                                        <img src="{{asset('front-assets/assets/imgs/serv-icons/0.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="cont ml-30">
                                    <h6>High Standerd</h6>
                                    <p class="fz-15"> High-standard services are characterized by exceptional customer service, professionalism,
                                        efficiency, and personalized attention to meet the specific needs of clients.
                                    </p>
                                </div>
                            </div>
                            <div class="item-flex d-flex align-items-center wow fadeIn" data-wow-delay=".8s">
                                <div>
                                    <div class="icon-img-50">
                                        <img src="{{asset('front-assets/assets/imgs/serv-icons/1.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="cont ml-30">
                                    <h6>Ease of Communication</h6>
                                    <p class="fz-15">Utilizing modern communication tools and
                                        platforms can streamline communication processes and make it easier to stay connected..
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="marquee">
        <div class="container-fluid rest">
            <div class="row">
                <div class="col-12">
                    <div class="main-marq">
                        <div class="slide-har st1">
                            <div class="box non-strok">
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>POSTS</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>REELS</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Giveaways</span>
                                        <span class="fz-50 ml-50 stroke icon">*</span>
                                    </h4>
                                </div>
                                <div class="item">
                                    <h4 class="d-flex align-items-center"><span>Campaigns</span> <span
                                            class="fz-50 ml-50 stroke icon">*</span></h4>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End marq ==================== -->


    <section class="serv-box section-padding pb-0">
        <div class="container">
            <div class="sec-lg-head mb-80">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="position-re">
                            <h6 class="dot-titl-non mb-15 wow fadeIn">Featured Services</h6>
                            <h2 class="d-rotate wow">
                                <span class="rotate-text">Our Services</span>
                            </h2>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center">
                        <div class="text wow fadeIn">
                            <p>We are a dedicated team of IT professionals primarily offering Web/Application development
                                & Digital Marketing Services.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="serv-item md-mb50 radius-10">
                        <div class="icon-img-60 mb-40">
                            <img src="{{asset('front-assets/assets/imgs/serv-icons/0.png')}}" alt="">
                        </div>
                        <h5 class="mb-30 pb-30 bord-thin-bottom">Brand Strategy & <br> Art Direction</h5>
                        <p>
                            Brand strategy is a comprehensive plan that outlines the long-term
                            vision, goals, and guidelines for developing, managing, and positioning a brand in the market</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="serv-item md-mb50 radius-10">
                        <div class="icon-img-60 mb-40">
                            <img src="{{asset('front-assets/assets/imgs/serv-icons/1.png')}}" alt="">
                        </div>
                        <h5 class="mb-30 pb-30 bord-thin-bottom">UX/UI Design & <br> Website/App Design</h5>
                        <p>Website and app design are crucial
                            aspects of creating a successful digital presence and delivering a positive user experience.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="serv-item radius-10">
                        <div class="icon-img-60 mb-40">
                            <img src="{{asset('front-assets/assets/imgs/serv-icons/2.png')}}" alt="">
                        </div>
                        <h5 class="mb-30 pb-30 bord-thin-bottom">Typography & <br> Video Production</h5>
                        <p>Video production refers to the process of creating video
                            content, whether for entertainment, marketing, educational purposes, or any other use</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Services ==================== -->



    <!-- ==================== Start section ==================== -->

    <section class="works thecontainer">

        <div class="panel mt-30">
            <div class="item">
                <div class="img">
                    <img src="{{asset('front-assets/assets/imgs/portfolio/4/01.jpg')}}" alt="">
                </div>
                <div class="cont d-flex align-items-end">
                    <div>
                        <span>Web Design</span>
                        <h5>Color Integration</h5>
                    </div>
                    <div class="ml-auto">
                        <h6>2023</h6>
                    </div>
                </div>
                <a href="#0" class="link-overlay"></a>
            </div>
        </div>

        <div class="panel mt-30">
            <div class="item">
                <div class="img">
                    <img src="{{asset('front-assets/assets/imgs/portfolio/4/02.jpg')}}" alt="">
                </div>
                <div class="cont d-flex align-items-end">
                    <div>
                        <span>Web Design</span>
                        <h5>Mobile Software</h5>
                    </div>
                    <div class="ml-auto">
                        <h6>2023</h6>
                    </div>
                </div>
                <a href="#0" class="link-overlay"></a>
            </div>
        </div>

        <div class="panel mt-30">
            <div class="item">
                <div class="img">
                    <img src="{{asset('front-assets/assets/imgs/portfolio/4/03.jpg')}}" alt="">
                </div>
                <div class="cont d-flex align-items-end">
                    <div>
                        <span>Web Design</span>
                        <h5>New Gadgets</h5>
                    </div>
                    <div class="ml-auto">
                        <h6>2023</h6>
                    </div>
                </div>
                <a href="#0" class="link-overlay"></a>
            </div>
        </div>

        <div class="panel mt-30">
            <div class="item">
                <div class="img">
                    <img src="{{asset('front-assets/assets/imgs/portfolio/4/04.jpg')}}" alt="">
                </div>
                <div class="cont d-flex align-items-end">
                    <div>
                        <span>Web Design</span>
                        <h5>Digital Platform</h5>
                    </div>
                    <div class="ml-auto">
                        <h6>2023</h6>
                    </div>
                </div>
                <a href="#0" class="link-overlay"></a>
            </div>
        </div>

        <div class="panel mt-30">
            <div class="item">
                <div class="img">
                    <img src="{{asset('front-assets/assets/imgs/portfolio/4/05.jpg')}}" alt="">
                </div>
                <div class="cont d-flex align-items-end">
                    <div>
                        <span>Web Design</span>
                        <h5>Branding Process</h5>
                    </div>
                    <div class="ml-auto">
                        <h6>2023</h6>
                    </div>
                </div>
                <a href="#0" class="link-overlay"></a>
            </div>
        </div>

        <div class="panel mt-30">
            <div class="item">
                <div class="img">
                    <img src="{{asset('front-assets/assets/imgs/portfolio/4/06.jpg')}}" alt="">
                </div>
                <div class="cont d-flex align-items-end">
                    <div>
                        <span>Web Design</span>
                        <h5>Branding Process</h5>
                    </div>
                    <div class="ml-auto">
                        <h6>2023</h6>
                    </div>
                </div>
                <a href="#0" class="link-overlay"></a>
            </div>
        </div>

    </section>

    <!-- ==================== End section ==================== -->



    <!-- ==================== Start testimonails ==================== -->

    <section class="testim-crv2 section-padding sub-bg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="sec-lg-head mb-80">
                        <div class="position-re text-center">
                            <h6 class="dot-titl-non mb-15 wow fadeIn">Testimonials</h6>
                            <h2 class="d-rotate wow">
                                <span class="rotate-text">What People Says?</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 position-re wow fadeIn" data-wow-delay=".4s">
                    <div class="bord-qoute d-flex align-items-center justify-content-center">
                        <div class="qoute-icon main-bg">
                            <img src="{{asset('front-assets/assets/imgs/svg-assets/quote.png')}}" alt="">
                        </div>
                    </div>
                    <div class="img-qoute">
                        <img src="{{asset('front-assets/assets/imgs/about/sq1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-7 wow fadeIn" data-wow-delay=".4s">
                    <div class="testim-swiper" data-carousel="swiper" data-items="1" data-loop="true"
                         data-space="30">
                        <div id="content-carousel-container-unq-testim" class="swiper-container"
                             data-swiper="container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="cont mb-40">
                                            <div class="rate-stars mb-20 fz-16">
                                                            <span class="rate main-color4">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                            </div>
                                            <h5 class="fw-400">I cannot praise Stellar Innovation enough for the outstanding work they did on our website. From the moment we engaged with them, their professionalism and expertise were evident. Their team took the time to understand our business needs
                                                and goals, and they went above and beyond to deliver a website that exceeded our expectations..</h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="img circle-60">
                                                    <img src="{{asset('front-assets/assets/imgs/testim/1.jpg')}}" alt=""
                                                         class="circle-img">
                                                </div>
                                            </div>
                                            <div class="ml-30">
                                                <div class="info">
                                                    <h6 class="fz-16">John Heiser</h6>
                                                    <span class="opacity-7 sub-title">Ceo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="item">
                                        <div class="cont mb-40">
                                            <div class="rate-stars mb-20 fz-16">
                                                            <span class="rate main-color4">
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                                <i class="fas fa-star"></i>
                                                            </span>
                                            </div>
                                            <h5 class="fw-400">The design they created was not only visually stunning but also highly functional and user-friendly. Our new website has significantly improved the overall user experience, resulting in increased traffic and longer visit durations. It
                                                truly showcases our brand identity and effectively communicates our message to our target audience.</h5>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="img circle-60">
                                                    <img src="{{asset('front-assets/assets/imgs/testim/2.jpg')}}" alt=""
                                                         class="circle-img">
                                                </div>
                                            </div>
                                            <div class="ml-30">
                                                <div class="info">
                                                    <h6 class="fz-16">Rahul Khanna</h6>
                                                    <span class="opacity-7 sub-title">Ceo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="swiper-controls testim-controls arrow-out d-flex ml-auto">
                            <div class="swiper-button-prev">
                                            <span class="left">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.2031 10.3281L11.5781 15.9531C11.535 15.9961 11.4839 16.0303 11.4276 16.0536C11.3713 16.077 11.3109 16.089 11.25 16.089C11.1891 16.089 11.1287 16.077 11.0724 16.0536C11.0161 16.0303 10.965 15.9961 10.9219 15.9531C10.8788 15.91 10.8446 15.8588 10.8213 15.8025C10.798 15.7462 10.786 15.6859 10.786 15.6249C10.786 15.564 10.798 15.5036 10.8213 15.4473C10.8446 15.391 10.8788 15.3399 10.9219 15.2968L15.7422 10.4687H3.125C3.00068 10.4687 2.88145 10.4193 2.79354 10.3314C2.70564 10.2435 2.65625 10.1242 2.65625 9.99993C2.65625 9.87561 2.70564 9.75638 2.79354 9.66847C2.88145 9.58056 3.00068 9.53118 3.125 9.53118H15.7422L10.9219 4.70305C10.8349 4.61603 10.786 4.498 10.786 4.37493C10.786 4.25186 10.8349 4.13383 10.9219 4.0468C11.0089 3.95978 11.1269 3.91089 11.25 3.91089C11.3731 3.91089 11.4911 3.95978 11.5781 4.0468L17.2031 9.6718C17.2476 9.71412 17.2829 9.76503 17.3071 9.82143C17.3313 9.87784 17.3438 9.93856 17.3438 9.99993C17.3438 10.0613 17.3313 10.122 17.3071 10.1784C17.2829 10.2348 17.2476 10.2857 17.2031 10.3281Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                            </div>
                            <div class="swiper-button-next ml-50">
                                            <span class="right">
                                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                     xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M17.2031 10.3281L11.5781 15.9531C11.535 15.9961 11.4839 16.0303 11.4276 16.0536C11.3713 16.077 11.3109 16.089 11.25 16.089C11.1891 16.089 11.1287 16.077 11.0724 16.0536C11.0161 16.0303 10.965 15.9961 10.9219 15.9531C10.8788 15.91 10.8446 15.8588 10.8213 15.8025C10.798 15.7462 10.786 15.6859 10.786 15.6249C10.786 15.564 10.798 15.5036 10.8213 15.4473C10.8446 15.391 10.8788 15.3399 10.9219 15.2968L15.7422 10.4687H3.125C3.00068 10.4687 2.88145 10.4193 2.79354 10.3314C2.70564 10.2435 2.65625 10.1242 2.65625 9.99993C2.65625 9.87561 2.70564 9.75638 2.79354 9.66847C2.88145 9.58056 3.00068 9.53118 3.125 9.53118H15.7422L10.9219 4.70305C10.8349 4.61603 10.786 4.498 10.786 4.37493C10.786 4.25186 10.8349 4.13383 10.9219 4.0468C11.0089 3.95978 11.1269 3.91089 11.25 3.91089C11.3731 3.91089 11.4911 3.95978 11.5781 4.0468L17.2031 9.6718C17.2476 9.71412 17.2829 9.76503 17.3071 9.82143C17.3313 9.87784 17.3438 9.93856 17.3438 9.99993C17.3438 10.0613 17.3313 10.122 17.3071 10.1784C17.2829 10.2348 17.2476 10.2857 17.2031 10.3281Z"
                                                        fill="currentColor"></path>
                                                </svg>
                                            </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- ==================== End testimonails ==================== -->







@endsection
