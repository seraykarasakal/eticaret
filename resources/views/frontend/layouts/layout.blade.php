<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers &mdash; Colorlib e-Commerce Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])


   {{--  <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}"> --}} 
    <link rel="stylesheet" href="{{ asset("css/magnific-popup.css") }}">
    <link rel="stylesheet" href="{{ asset("css/jquery-ui.css" )}}">
    <link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/owl.theme.default.min.css") }}">
    

    
    <link rel="stylesheet" href="{{ asset("css/aos.css") }}">

    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
  </head>
  <body>
  
  <div class="site-wrap">
    @include('frontend.inc.header')

    @yield('content')
        
    @include('frontend.inc.footer')

  </div>

  <script src="{{ asset("js/jquery-3.3.1.min.js") }}"></script>
  <script src="{{ asset("js/jquery-ui.js") }}"></script>
  <script src="{{ asset("js/popper.min.js") }}"></script>
  <script src="{{ asset("js/bootstrap.min.js") }}"></script>
  <script src="{{ asset("js/owl.carousel.min.js") }}"></script>
  <script src="{{ asset("js/jquery.magnific-popup.min.js") }}"></script>
  <script src="{{ asset("js/aos.js") }}"></script>
  <script src="{{ asset("js/main.js") }}"></script>
    
  </body>
</html>