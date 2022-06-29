<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FYP') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/styles.css')}}">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
    <!-- Site CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">
</head>
<body>
    <div id="app">
        <div class="preHeader">
            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle pl-3 m-1" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  EN 
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down mx-2" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z"/>
                  </svg>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="/home">AR</a>
                  <a class="dropdown-item" href="/en/home">EN</a>
                </div>
            </div>
            <div class="m-1">
                @if (Auth()->user())
                    <a href="/profile/{{Auth()->user()->id}}" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-1 ml-0 bi bi-person" viewBox="0 0 16 16">
                            <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                        </svg>
                        {{Auth()->user()->name}}</a>
                    <a href="/logout" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="mr-1 ml-0 bi bi-box-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                        </svg>
                        Logout</a>
                @else
                    <a href="/register" class="btn btn-primary">Register</a>
                    <a href="/login" class="btn btn-primary">Login</a>
                @endif
            </div>
        </div>

       <header class="main-header">
            <!-- Start Navigation -->
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
                <div class="container">
                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                        <a class="navbar-brand" href="/home"><img src="https://scsl.org.lb/wp-content/uploads/2018/07/Asset-12.png" class="logo" alt=""></a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                            <li class="nav-item {{$route == '/en/home' ? 'active' : ''}}"><a class="nav-link" href="/en/home">Home</a></li>
                            <li class="nav-item {{$route == '/en/aboutus' ? 'active' : ''}}"><a class="nav-link" href="/en/aboutus">About Us</a></li>
                            <li class="nav-item {{$route == '/en/contactus' ? 'active' : ''}}"><a class="nav-link" href="/en/contactus">Contact Us</a></li>
                            <li class="nav-item {{$route == '/en/members' ? 'active' : ''}}"><a class="nav-link" href="/en/members">Members</a></li>
                            <li class="nav-item {{$route == '/en/appliances' ? 'active' : ''}}"><a class="nav-link" href="/en/appliances">Appliances</a></li>
                        </ul>
                    </div>
                </div>
            </nav>    
        </header>


        <main class="py-4">
            @yield('content')
        </main>

        <footer>
            <div class="footer-main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-top-box">
                                <img src="https://scsl.org.lb/wp-content/uploads/2018/07/Asset-12.png" alt="" class="logo">
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-top-box">
                                <p class="text-dark">نقابة علوم الحاسوب في لبنان © 2022 | التأسيس: وزارة العمل ، مرسوم رقم 76/1</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <div class="footer-top-box">
                                <h3 class="text-dark">Social Media</h3>
                                <ul>
                                    <li class="text-dark mx-auto">+961 (78) 863 490</li><br>
                                    <li class="text-dark">+961 (1) 660 406</li><br>
                                    <li><a href="mailto:info@scsl.org.lb" class="text-dark">info@scsl.org.lb</a></li><br>
                                    <li><a href="mailto:web@scsl.org.lb" class="text-dark">web@scsl.org.lb</a></li><br>
                                    <li><a href="https://www.facebook.com/SyndicateCSLB/" class="text-dark">Facebook</a></li><br>
                                    <li><a href="https://www.linkedin.com/company/syndicatecslb" class="text-dark">LinkedIn</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
       
    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{asset('assets/js/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
    <!-- ALL PLUGINS -->
    <script src="{{asset('assets/js/jquery.superslides.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap-select.js')}}"></script>
    <script src="{{asset('assets/js/inewsticker.js')}}"></script>
    <script src="{{asset('assets/js/bootsnav.js.')}}"></script>
    <script src="{{asset('assets/js/images-loded.min.js')}}"></script>
    <script src="{{asset('assets/js/isotope.min.js')}}"></script>
    <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/js/baguetteBox.min.js')}}"></script>
    <script src="{{asset('assets/js/form-validator.min.js')}}"></script>
    <script src="{{asset('assets/js/contact-form-script.js')}}"></script>
    <script src="{{asset('assets/js/custom.js')}}"></script>

    </div>
</body>
</html>