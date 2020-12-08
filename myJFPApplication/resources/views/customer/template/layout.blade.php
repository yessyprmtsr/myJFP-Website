<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>myJFP website</title>
        <link href="{{ asset ('/assets/style.css') }}" rel="stylesheet">
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

    <script src="script.js"></script>
</body>

</html>