<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Shoppers &mdash; Admin Dashboard</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("css/magnific-popup.css") }}">
    <link rel="stylesheet" href="{{ asset("css/jquery-ui.css" )}}">
    <link rel="stylesheet" href="{{ asset("css/owl.carousel.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/owl.theme.default.min.css") }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="{{ asset("css/aos.css") }}">
    <link rel="stylesheet" href="{{ asset("css/style.css") }}">
  </head>

  <body class=" font-ebgaramond">
  
     

    <div class="container-fluid">
        <div class="row">
            @include('admin.inc.navbar')
        </div>
        
        <div class="row">
            @include('admin.inc.sidebar')   
            <main class="col-lg-10 p-5">
                @yield('content')
            </main>
        </div>
    </div>
    @yield('js')
    <script src="../path/to/flowbite/dist/flowbite.min.js"></script>
    <script src="{{ asset("js/jquery-3.3.1.min.js") }}"></script>
    <script src="{{ asset("js/jquery-ui.js") }}"></script>
    <script src="{{ asset("js/popper.min.js") }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="{{ asset("js/owl.carousel.min.js") }}"></script>
    <script src="{{ asset("js/jquery.magnific-popup.min.js") }}"></script>
    <script src="{{ asset("js/aos.js") }}"></script>
    <script src="{{ asset("js/main.js") }}"></script>
    
  </body>
</html>