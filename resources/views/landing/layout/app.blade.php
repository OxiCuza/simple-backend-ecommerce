<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Bumdes Mall Kenanten</title>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('landing_page/css/styles.css')}}" rel="stylesheet" />
        <link src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css" crossorigin="anonymous" rel="stylesheet" />

    </head>
    <body>
    <header>
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
            <span class="site-heading-upper text-primary mb-3">BUMDES MALL</span>
            <span class="site-heading-lower">DESA KENANTEN</span>
        </h1>
    </header>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container">
                <a class="navbar-brand text-uppercase fw-bold d-lg-none" href="{{url('/')}}">BUMDES MALL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4 @if(Request::is('/')) active @endif">
                            <a class="nav-link text-uppercase" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item px-lg-4 @if(Request::is('about')) active @endif">
                            <a class="nav-link text-uppercase" href="{{url('/about')}}">About</a>
                        </li>
                        <li class="nav-item px-lg-4 @if(Request::is('products')) active @endif">
                            <a class="nav-link text-uppercase" href="{{url('/products')}}">Products</a>
                        </li>
                        <li class="nav-item px-lg-4 @if(Request::is('store')) active @endif">
                            <a class="nav-link text-uppercase" href="{{url('/store')}}">Store</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')

        <footer class="footer text-faded text-center py-5">
            <div class="container"><p class="m-0 small">Copyright &copy; Desa Kenanten {{\Carbon\Carbon::now()->year}} </p></div>
        </footer>

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('landing_page/js/scripts.js')}}"></script>
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    </body>
</html>
