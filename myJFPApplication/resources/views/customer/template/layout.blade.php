<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>myJFP website</title>
        <link href="{{ asset ('/assets/style.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('/assetscustomer/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assetscustomer/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assetscustomer/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('/assetscustomer/css/font-awesome.min.css') }}">
        <link rel="stylesheet" href="{{ asset('/assetscustomer/css/themify-icons.css') }}">
        <link rel="stylesheet" href="{{ asset('/assetscustomer/css/nice-select.css') }}">
        <link rel="stylesheet" href="{{ asset('/assetscustomer/css/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('/assetscustomer/css/gijgo.css') }}">
        <link rel="stylesheet" href="{{ asset('/assetscustomer/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('/assetscustomer/css/slicknav.css') }}">
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
    </head>
    

<body>
    <nav class="navbar">
        @include('customer.template.partial.navbar')
    </nav>

    <!-- home section -->
    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Welcome to myJFP</div>
                <div class="text-2">Your Satisfaction</div>
                <div class="text-3">Is our<span> Priority</span></div>
            </div>
        </div>
    </section>

    <!-- about section -->
    <div class="conn">
    @yield('content')
    </div>

    <!-- footer section -->
    @include('customer.template.partial.footer')

    <script src="{{ asset('/script.js')}}"></script>
    <script src="{{ asset('/assetscustomer/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{ asset('/assetscustomer/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('/assetscustomer/js/popper.min.js')}}"></script>
    <script src="{{ asset('/assetscustomer/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('/assetscustomer/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('/assetscustomer/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{ asset('/assetscustomer/js/ajax-form.js')}}"></script>
    <script src="{{ asset('/assetscustomer/js/waypoints.min.js')}}"></script>
    <script src="{{ asset('/assetscustomer/js/jquery.counterup.min.js')}}"></script>
    <script src="{{ asset('/assetscustomer/js/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{ asset('/assetscustomer/js/scrollIt.js')}}"></script>
    <script src="{{ asset('/assetscustomer/js/jquery.scrollUp.min.js')}}"></script>
    <script src="{{ asset('/assetscustomer/js/wow.min.js')}}"></script>
    <script src="{{ asset('/assetscustomer/js/nice-select.min.js')}}"></script>
    <script src="{{ asset('/assetscustomer/js/jquery.slicknav.min.js')}}"></script>
    <script src="{{ asset('/assetscustomer/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{ asset('/assetscustomer/js/plugins.js')}}"></script>
    <script src="{{ asset('/assetscustomer/js/gijgo.min.js')}}"></script>
</body>

</html>