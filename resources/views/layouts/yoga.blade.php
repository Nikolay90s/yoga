<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ $title }}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Work+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('asset/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/ionicons.min.css') }}">

    <link rel="stylesheet" href="{{ asset('asset/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/jquery.timepicker.css') }}">


    <link rel="stylesheet" href="{{ asset('asset/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
  </head>
  <body>
  	@yield('nav')

	@yield('content')

    @yield('footer')

  <script src="{{ asset('asset/js/jquery.min.js') }}"></script>
  <script src="{{ asset('asset/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('asset/js/popper.min.js') }}"></script>
  <script src="{{ asset('asset/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('asset/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('asset/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('asset/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('asset/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('asset/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('asset/js/aos.js') }}"></script>
  <script src="{{ asset('asset/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('asset/js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('asset/js/jquery.timepicker.min.js') }}"></script>
  <script src="{{ asset('asset/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('asset/js/google-map.js') }}"></script>
  <script src="{{ asset('asset/js/main.js') }}"></script>

  </body>
</html>