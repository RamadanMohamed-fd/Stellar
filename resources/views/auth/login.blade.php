<!DOCTYPE html>
<html lang="en">
<head>
    <!--  Title -->
    <title>Mordenize</title>
    <!--  Required Meta Tag -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="handheldfriendly" content="true" />
    <meta name="MobileOptimized" content="width" />
    <meta name="description" content="Stellar | Admin" />
    <meta name="author" content="" />
    <meta name="keywords" content="Stellar | Admin" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!--  Favicon -->
    <link rel="shortcut icon" type="image/png" href="https://demos.adminmart.com/premium/bootstrap/modernize-bootstrap/package/dist/images/logos/favicon.ico" />
    <!-- Core Css -->
    <link  id="themeColors"  rel="stylesheet" href="{{asset('public/admin-assets/dist/css/style.min.css')}}" />
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
<div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100">
        <div class="position-relative z-index-5">
            <div class="row">
                <div class="col-xl-7 col-xxl-8">
                    <a href="#" class="text-nowrap logo-img d-block px-4 py-9 w-100">
                        <img src="{{asset('public/admin-assets/Large-Logo-white.png')}}" width="180" alt="">
                    </a>
                    <div class="d-none d-xl-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
                        <img src="{{asset('public/admin-assets/Large-Logo-white.png')}}" alt="" class="img-fluid" width="500">
                    </div>
                </div>
                <div class="col-xl-5 col-xxl-4">
                    <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
                        <div class="col-sm-8 col-md-6 col-xl-9">
                            <h2 class="mb-3 fs-7 fw-bolder">Welcome to Stellar Admin</h2>
                            <p class=" mb-9">Your Admin Dashboard</p>

                            <form  method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Username</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                           name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="mb-4">
                                    <label for="exampleInputPassword1" class="form-label">Password</label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                           name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                </div>

                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!--  Import Js Files -->
<script src="{{asset('public/admin-assets/dist/libs/jquery/dist/jquery.min.js')}}"></script>
<script src="{{asset('public/admin-assets/dist/libs/simplebar/dist/simplebar.min.js')}}"></script>
<script src="{{asset('public/admin-assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
<!--  core files -->
<script src="{{asset('public/admin-assets/dist/js/app.min.js')}}"></script>
<script src="{{asset('public/admin-assets/dist/js/app.init.js')}}"></script>
<script src="{{asset('public/admin-assets/dist/js/app-style-switcher.js')}}"></script>
<script src="{{asset('public/admin-assets/dist/js/sidebarmenu.js')}}"></script>

<script src="{{asset('public/admin-assets/dist/js/custom.js')}}"></script>
</body>
</html>
