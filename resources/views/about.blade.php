@extends('layouts.template')
@section('content')
    @include('layouts.about_header')





    <!-- ==================== Start About ==================== -->

    <section class="pg-about section-padding sub-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="bg-img radius-10 md-mb50" data-background="{{asset('front-assets/assets/imgs/about/sq1.jpg')}}"></div>
                </div>
                <div class="col-lg-8">
                    <div class="bg-img radius-10" data-background="{{asset('front-assets/assets/imgs/about/sq2.jpg')}}"></div>
                </div>
                <div class="col-lg-4">
                    <div class="sec-head mt-80">
                        <h6 class="sub-title">Our Story.</h6>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="cont mt-80">
                        <h4><b>Stellar Innovation</b> are digital marketing experts and can partner with you to implement tactical campaigns which engage and connect audiences whilst driving ROI for your brand. We are SEO and SEM professionals and have implemented successful search campaigns for clients which drive super-charge improvements in organic rankings, increase visits and grow revenue. </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End About ==================== -->



    <!-- ==================== Start Services ==================== -->

    <section class="serv-box section-padding">
        <div class="container">
            <div class="sec-lg-head mb-80">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="position-re">
                            <h6 class="dot-titl-non mb-10">Featured Services</h6>
                            <h2 class="fz-60 fw-700">Our Services</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 d-flex align-items-center">
                        <div class="text">
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



    <!-- ==================== Start about ==================== -->

    <section class="intro-corp section-padding pt-0">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-5 valign md-mb50">
                    <div class="imgs mb-80">
                        <div class="img1">
                            <img src="{{asset('front-assets/assets/imgs/about/sq1.jpg')}}" alt="" class="radius-10">
                        </div>
                        <div class="img2">
                            <img src="{{asset('front-assets/assets/imgs/about/sq2.jpg')}}" alt="" class="radius-10">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 valign">
                    <div class="cont">
                        <div class="text">
                            <h2 class="d-slideup wow">
                                    <span class="sideup-text">
                                        <span class="up-text">3 Moral Values We </span>
                                    </span>
                                <span class="sideup-text">
                                        <span class="up-text">Implement In Our Work</span>
                                    </span>

                            </h2>
                        </div>
                        <div class="accordion bord mt-40">

                            <div class="item mb-15 wow fadeInUp" data-wow-delay=".1s">
                                <div class="title">
                                    <h6 class="fz-18">Understanding Business Goal</h6>
                                    <span class="ico"></span>
                                </div>
                                <div class="accordion-info">
                                    <p class="fz-14">Our Team Understand Your Business Objective
                                        and Based on That we will Suggest Digital Strategy which Works Best.</p>
                                </div>
                            </div>

                            <div class="item mb-15 wow fadeInUp" data-wow-delay=".3s">
                                <div class="title">
                                    <h6 class="fz-18">Marketing Implementation</h6>
                                    <span class="ico"></span>
                                </div>
                                <div class="accordion-info">
                                    <p class="fz-14">Our Experts will Implement All The
                                        Strategies What Gives Better ROI for Your Business and Help You Succeed Online.</p>
                                </div>
                            </div>

                            <div class="item wow fadeInUp" data-wow-delay=".5s">
                                <div class="title">
                                    <h6 class="fz-18">Growth & Results</h6>
                                    <span class="ico"></span>
                                </div>
                                <div class="accordion-info">
                                    <p class="fz-14">After Implementing Strategy We
                                        will helps you Grow Your Business and Provide desired Results.</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End about ==================== -->



    <!-- ==================== Start Testimonials ==================== -->

    <section class="testim-vrt sub-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 valign">
                    <div class="cont">
                        <div>
                            <h6 class="sub-title mb-15">Since From 2008</h6>
                            <h3>Keep pushing forward. We've got your back.</h3>
                            <div class="text mt-10 pb-30 bord-thin-bottom">
                                <p>Things go wrong have questions. We’ve understand. So we have people</p>
                            </div>
                            <div class="stauts d-flex mt-20">
                                <div class="item d-flex align-items-center mt-30">
                                    <h2 class="mr-20">12k</h2>
                                    <p class="fz-14">Happy Users <br> Around World</p>
                                </div>
                                <div class="item d-flex align-items-center ml-auto mt-30">
                                    <h2 class="mr-20">150k</h2>
                                    <p class="fz-14">Projects <br> Already Done</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div>
                        <div class="main-marqv">
                            <div class="slide-vertical st1">

                                <div class="box">
                                    <div class="item radius-30 mt-30">
                                        <div class="cont mb-40">
                                            <div class="rate-stars mb-30 fz-12">
                                                    <span class="rate main-color">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                            </div>
                                            <p class="fw-400">I cannot praise Stellar Innovation enough for the outstanding work they did on our website. From the moment we engaged with them, their professionalism and expertise were evident. Their team took the time to understand our business needs
                                                and goals, and they went above and beyond to deliver a website that exceeded our expectations.</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="img circle-80">
                                                    <img src="{{asset('front-assets/assets/imgs/testim/1.jpg')}}" alt="" class="circle-img">
                                                </div>
                                            </div>
                                            <div class="ml-30">
                                                <div class="info">
                                                    <h6>John Heiser</h6>
                                                    <span class="main-color sub-title">Ceo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item radius-30 mt-30">
                                        <div class="cont mb-40">
                                            <div class="rate-stars mb-30 fz-12">
                                                    <span class="rate main-color">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                            </div>
                                            <p class="fw-400">The design they created was not only visually stunning but also highly functional and user-friendly. Our new website has significantly improved the overall user experience, resulting in increased traffic and longer visit durations. It
                                                truly showcases our brand identity and effectively communicates our message to our target audience.</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="img circle-80">
                                                    <img src="{{asset('front-assets/assets/imgs/testim/1.jpg')}}" alt="" class="circle-img">
                                                </div>
                                            </div>
                                            <div class="ml-30">
                                                <div class="info">
                                                    <h6>Rahul Khanna</h6>
                                                    <span class="main-color sub-title">Ceo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item radius-30 mt-30">
                                        <div class="cont mb-40">
                                            <div class="rate-stars mb-30 fz-12">
                                                    <span class="rate main-color">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                    </span>
                                            </div>
                                            <p class="fw-400">Throughout the entire process, Stellar Innovation demonstrated exceptional communication and responsiveness. They kept us updated every step of the way, and any changes or feedback we provided were promptly addressed.
                                                Their attention to detail and dedication to delivering a top-notch product was truly commendable..</p>
                                        </div>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="img circle-80">
                                                    <img src="{{asset('front-assets/assets/imgs/testim/1.jpg')}}" alt="" class="circle-img">
                                                </div>
                                            </div>
                                            <div class="ml-30">
                                                <div class="info">
                                                    <h6>Leonard Heiser</h6>
                                                    <span class="main-color sub-title">Ceo</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End Testimonials ==================== -->




    <!-- ==================== Start clients ==================== -->

    <div class="clients section-padding pb-100 position-re">
        <div class="container">
            <div class="row justify-content-center mb-80">
                <div class="col-lg-6 text-center">
                    <div class="text">
                        <h3>We create <span>experiences</span> and turn ideas into reality.</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="row md-marg">
                        <div class="col-md-4 col-6 brand box-bg">
                            <div class="item mb-30 wow fadeIn" data-wow-delay=".6s">
                                <div class="img">
                                    <img src="{{asset('front-assets/assets/imgs/brands/01.png')}}" alt="">
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 col-6 brand box-bg">
                            <div class="item mb-30 wow fadeIn" data-wow-delay=".6s">
                                <div class="img">
                                    <img src="{{asset('front-assets/assets/imgs/brands/02.png')}}" alt="">
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 col-6 brand box-bg">
                            <div class="item mb-30 wow fadeIn" data-wow-delay=".8s">
                                <div class="img">
                                    <img src="{{asset('front-assets/assets/imgs/brands/03.png')}}" alt="">
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 col-6 brand box-bg">
                            <div class="item mb-30 wow fadeIn" data-wow-delay=".3s">
                                <div class="img">
                                    <img src="{{asset('front-assets/assets/imgs/brands/04.png')}}" alt="">
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 col-6 brand box-bg">
                            <div class="item mb-30 wow fadeIn" data-wow-delay=".4s">
                                <div class="img">
                                    <img src="{{asset('front-assets/assets/imgs/brands/05.png')}}" alt="">
                                </div>

                            </div>
                        </div>
                        <div class="col-md-4 col-6 brand box-bg">
                            <div class="item mb-30 wow fadeIn" data-wow-delay=".7s">
                                <div class="img">
                                    <img src="{{asset('front-assets/assets/imgs/brands/03.png')}}" alt="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ==================== End clients ==================== -->



@endsection
