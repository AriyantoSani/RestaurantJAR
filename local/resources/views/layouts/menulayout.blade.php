<!DOCTYPE html>
<html lang="en">

<head>
    <title>RestaurantJAR</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="{{ asset('./images/logo.jpg') }}"/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('vendors/menupage/css/open-iconic-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/menupage/css/animate.css')}}">

    <link rel="stylesheet" href="{{asset('vendors/menupage/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/menupage/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/menupage/css/magnific-popup.css')}}">

    <link rel="stylesheet" href="{{asset('vendors/menupage/css/aos.css')}}">

    <link rel="stylesheet" href="{{asset('vendors/menupage/css/ionicons.min.css')}}">

    <link rel="stylesheet" href="{{asset('vendors/menupage/css/bootstrap-datepicker.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/menupage/css/jquery.timepicker.css')}}">


    <link rel="stylesheet" href="{{asset('vendors/menupage/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/menupage/css/icomoon.css')}}">
    <link rel="stylesheet" href="{{asset('vendors/menupage/css/style.css')}}">
    @yield('css')
</head>

<body class="goto-here">
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
        <a class="navbar-brand" href="{{asset('home')}}">Back To Home</a>
            <a class="navbar-brand">Welcome, Table {{$id}}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
        </div>
    </nav>
    <!-- END nav -->
    @yield('content')

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>


    <script src="{{asset('vendors/menupage/js/jquery.min.js')}}"></script>
    <script src="{{asset('vendors/menupage/js/jquery-migrate-3.0.1.min.js')}}"></script>
    <script src="{{asset('vendors/menupage/js/popper.min.js')}}"></script>
    <script src="{{asset('vendors/menupage/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('vendors/menupage/js/jquery.easing.1.3.js')}}"></script>
    <script src="{{asset('vendors/menupage/js/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('vendors/menupage/js/jquery.stellar.min.js')}}"></script>
    <script src="{{asset('vendors/menupage/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('vendors/menupage/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('vendors/menupage/js/aos.js')}}"></script>
    <script src="{{asset('vendors/menupage/js/jquery.animateNumber.min.js')}}"></script>
    <script src="{{asset('vendors/menupage/js/bootstrap-datepicker.js')}}"></script>
    <script src="{{asset('vendors/menupage/js/scrollax.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false">
    </script>
    <script src="{{asset('vendors/menupage/js/google-map.js')}}"></script>
    <script src="{{asset('vendors/menupage/js/main.js')}}"></script>
    @yield('js')
</body>

</html>
