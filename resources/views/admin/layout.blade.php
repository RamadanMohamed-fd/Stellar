<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Title -->
    <title>Stellar | Admin</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Stellar of Qatar" />
    <meta name="author" content="" />
    <meta name="keywords" content="Stellar of Qatar" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" />
    <!-- Owl Carousel  -->
    <link rel="stylesheet" href="{{asset('public/admin-assets/dist/libs/owl.carousel/dist/assets/owl.carousel.min.css')}}">

    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="{{asset('public/admin-assets/dist/css/style.min.css')}}" />
    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
</head>
<body>
<!-- Preloader -->
<div class="preloader">
    <img src="{{asset('public/admin-assets/Large-Logo-white.png')}}" alt="loader" class="lds-ripple img-fluid" />
</div>
<!-- Preloader -->
<div class="preloader">
    <img src="{{asset('public/admin-assets/Large-Logo-white.png')}}" alt="loader" class="lds-ripple img-fluid" />
</div>
<!--  Body Wrapper -->
<div class="page-wrapper" id="main-wrapper" data-theme="blue_theme"  data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
        <!-- Sidebar scroll-->
        <div>
            <div class="brand-logo d-flex align-items-center justify-content-between">
                <a href="#" class="text-nowrap logo-img" style="background-color: black;">
                    <img src="{{asset('public/admin-assets/Large-Logo-white.png')}}" class="dark-logo" width="180" alt="" />
                    <img src="{{asset('public/admin-assets/Large-Logo-white.png')}}" class="light-logo"  width="180" alt="" />
                </a>
                <div class="close-btn d-lg-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
                    <i class="ti ti-x fs-8 text-muted"></i>
                </div>
            </div>
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav scroll-sidebar" data-simplebar>
                <ul id="sidebarnav">
                    <!-- ============================= -->
                    <!-- Home -->
                    <!-- ============================= -->

                    <!-- =================== -->
                    <!-- Dashboard -->
                    <!-- =================== -->


                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('dashboard')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-aperture"></i>
                  </span>
                            <span class="hide-menu">Dashboard</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('add-blog')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-plus"></i>
                  </span>
                            <span class="hide-menu">Add Blog</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{route('blog-list')}}" aria-expanded="false">
                  <span>
                    <i class="ti ti-list"></i>
                  </span>
                            <span class="hide-menu">Blog List</span>
                        </a>
                    </li>

{{--                    <li class="sidebar-item">--}}
{{--                        <a class="sidebar-link" href="index.html" aria-expanded="false">--}}
{{--                  <span>--}}
{{--                    <i class="ti ti-list"></i>--}}
{{--                  </span>--}}
{{--                            <span class="hide-menu">Contact Form Data</span>--}}
{{--                        </a>--}}
{{--                    </li>--}}
                    </ul>
                <div class="unlimited-access hide-menu bg-light-primary position-relative my-7 rounded">
                    <div class="d-flex">
                        <div class="unlimited-access-title">


                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>

                    </div>
                </div>
            </nav>
            <div class="fixed-profile p-3 bg-light-secondary rounded sidebar-ad mt-3">
                <div class="hstack gap-3">
                    <div class="john-img">
                        <img src="../../dist/images/profile/user-1.jpg" class="rounded-circle" width="40" height="40" alt="">
                    </div>
                    <div class="john-title">
                        <h6 class="mb-0 fs-4 fw-semibold">Mathew</h6>
                        <span class="fs-2 text-dark">Designer</span>
                    </div>
                    <button class="border-0 bg-transparent text-primary ms-auto" tabindex="0" type="button" aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
                        <i class="ti ti-power fs-6"></i>
                    </button>
                </div>
            </div>
            <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">

        <!--  Header End -->
        <div class="container-fluid">
            @yield('main')

        </div>
    </div>
</div>

<!--  Import Js Files -->
<script src="{{asset('public/admin-assets/dist/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script src="{{asset('public/admin-assets/dist/libs/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{asset('public/admin-assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!--  core files -->
<script src="{{asset('public/admin-assets/dist/js/app.min.js')}}"></script>
<script src="{{asset('public/admin-assets/dist/js/app.init.js')}}"></script>
<script src="{{asset('public/admin-assets/dist/js/app-style-switcher.js')}}"></script>
<script src="{{asset('public/admin-assets/dist/js/sidebarmenu.js')}}"></script>
<script src="{{asset('public/admin-assets/dist/js/custom.js')}}"></script>
<!--  current page js files -->
<script src="{{asset('public/admin-assets/dist/libs/owl.carousel/dist/owl.carousel.min.js')}}"></script>
<script src="{{asset('public/admin-assets/dist/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
<script src="{{asset('public/admin-assets/dist/js/dashboard.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            height: 150
        });

    });



</script>
</body>
</html>
