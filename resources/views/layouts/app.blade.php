<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>blog - index</title>
    <!--  bootstrap  -->
    <link rel="stylesheet" href="{{ asset('/Frontend/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('/Frontend/assets/css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('/Frontend/assets/css/swiper.css') }}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @yield('css')
</head>
<body>

<!--header-->
@include('layouts.header')
<!--end header-->

<!--main-->
<main>
    @yield('content')
</main>
<!--end main-->

<!--footer-->
@include('layouts.footer')
<!--end footer-->
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="{{ asset('/Frontend/assets/js/index.js') }}"></script>
@yield('js')
</body>
</html>
