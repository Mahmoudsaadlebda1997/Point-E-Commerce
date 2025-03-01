<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Point E-Commerce</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Favicon -->
    <link href="{{ asset('site/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&family=Montserrat:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('site/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('site/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet"/>

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('site/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('site/css/style.css') }}" rel="stylesheet">
    <style>
        /* Ensure the image container maintains the fixed size and centers the image */
        .image-wrapper {
            width: 100%;
            height: 200px; /* Adjust the height as needed */
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa; /* Optional: set a background color */
        }

        .fixed-size {
            width: auto;
            height: 100%;
            max-width: 100%;
            object-fit: cover; /* Ensures the image covers the fixed dimensions without distortion */
        }
        .breadcrumb {
            background: none;
        !important;
        }
    </style>
</head>
<body>

<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner"
         class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Header Start -->
    <div class="container-fluid bg-dark px-0" dir="rtl">
        <div class="row gx-0">
            <div class="col-lg-3 bg-dark d-none d-lg-block">
                <a href="/" class="navbar-brand w-100 h-100 m-0 p-0 d-flex align-items-center justify-content-center">
                    <h4 class="m-0 text-primary text-uppercase">Point E-Commerce</h4>
                </a>
            </div>
            <div class="col-lg-9">
                <div class="row gx-0 bg-white d-none d-lg-flex">
                    <div class="col-lg-8 px-5 text-start">
                        <div class="h-100 d-inline-flex align-items-center py-2 me-4 pl-5">
                            <p class="mb-0"> info@point-ecommerce.com</p>
                            <i class="fa fa-envelope text-primary me-2"></i>
                        </div>
                        <div class="h-100 d-inline-flex align-items-center py-2 pl-5">
                            <p class="mb-0"> 010 010 0100</p>
                            <i class="fa fa-phone-alt text-primary me-2"></i>
                        </div>
                    </div>
                    <div class="col-lg-4 px-5 text-end">
                        <div class="d-inline-flex align-items-center py-2">
                            <a class="me-3" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="me-3" href=""><i class="fab fa-twitter"></i></a>
                            <a class="me-3" href=""><i class="fab fa-instagram"></i></a>
                            <a class="me-3" href=""><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-expand-lg bg-dark navbar-dark p-3 p-lg-0" style="margin-left: 12%">
                    <a href="/" class="navbar-brand d-block d-lg-none">
                        <h1 class="m-0 text-primary text-uppercase">Point E-Commerce</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-bs-toggle="collapse"
                            data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav me-auto py-0">
                            <a href="/#" class="nav-item nav-link active">الرئيسية</a>
                            <a href="/#about" class="nav-item nav-link">من نحن</a>
                            <a href="/#products" class="nav-item nav-link">المنتجات</a>
                            <a href="{{ route('cart.index') }}" class="nav-item nav-link position-relative d-flex align-items-center">
                                <i class="fa fa-shopping-cart text-primary fs-5"></i>
                                <span class="badge bg-danger position-absolute top-0 mt-3 start-100 translate-middle cart-count"
                                      style="transform: translate(-50%, -50%);">
                                    {{ count(session('cart', [])) }}
                                </span>
                            </a>
                            @auth
{{--                                <a href="{{ route('myOrders') }}" class="nav-item nav-link">مشترياتي</a>--}}
                                <a href="{{ route('logoutUser') }}" class="nav-item nav-link">تسجيل الخروج</a>
                            @endauth
                            @guest
                                <a href="{{ route('loginUser') }}" class="nav-item nav-link">تسجيل الدخول</a>
                                <a href="{{ route('register') }}" class="nav-item nav-link">تسجيل عضوية</a>
                            @endguest
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Header End -->

    @include('admin.layouts.message')
    @yield('content')


</div>
{{--Toast--}}
<div id="toast-container" class="position-fixed top-0 start-50 translate-middle-x p-3" style="z-index: 1050;">
    <div id="success-toast" class="toast align-items-center text-white bg-success border-0" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body fs-5">
                تمت إضافة المنتج إلى السلة بنجاح!
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
</div>

<!-- Footer Start -->
<div class="container-fluid bg-dark text-light footer wow fadeIn" data-wow-delay="0.1s">
    <div class="container pb-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-4">
                <div class="bg-primary rounded p-4">
                    <a href="/"><h1 class="text-white text-uppercase mb-3">Point E-Commerce</h1></a>
                    <p class="text-white mb-0">
                        منصة بوينت للتجاره الالكترونيه .. اول منصة عربية للتجاره الالكترونيه في مجال الالكترونيات
                    </p>
                </div>
            </div>

            <div class="col-md-6 col-lg-3">
                <h6 class="section-title text-start text-primary text-uppercase mb-4">التواصل</h6>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>بوينت - للتجاره الالكترونيه</p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@point-ecommerce.com</p>
                <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-5 col-md-12">
                <div class="row gy-5 g-4">
                    <div class="col-md-6">
                        <h6 class="section-title text-start text-primary text-uppercase mb-4">روابط</h6>
                        <a class="btn btn-link" href="/#about">عن الموقع</a>
                        <a class="btn btn-link" href="/#">الرئيسية</a>
                        <a class="btn btn-link" href="/#hotels">المنتجات</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-12 text-center text-md-start mb-3">
                    &copy; <a class="border-bottom" href="#">
                        منصه بوينت لتجاره الاكترونيات </a>، كل الحقوق محفوظة.
                    {{ date('Y') }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="{{ asset('site/js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('site/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('site/lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('site/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('site/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('site/lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('site/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('site/lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('site/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('site/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('site/js/main.js') }}"></script>


@yield('custom-script')

</body>

</html>
