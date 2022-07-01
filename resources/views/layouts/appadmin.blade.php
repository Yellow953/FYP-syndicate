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

    <link href="{{asset('admin/css/sb-admin-2.min.css')}}" rel="stylesheet">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

</head>
<body>
    <div id="app">
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    
                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center mt-2" href="/en/admin">
                    <img src="https://scsl.org.lb/wp-content/uploads/2018/07/Asset-12.png" alt="" class="w-100">
                </a>
                <div class="sidebar-brand-text m-3 text-center">SCSL</div>
                <hr class="sidebar-divider my-0 bg-dark">

    
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                    <a class="nav-link" href="/en/admin">
                        <span>Dashboard</span></a>
                </li>
                <hr class="sidebar-divider my-0 bg-dark">
        
                <li class="nav-item">
                    <a class="nav-link" href="/en/admin/users">
                        <span>Users</span>
                    </a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" href="/en/admin/news">
                        <span>news</span>
                    </a>
                </li>
    
                <li class="nav-item">
                    <a class="nav-link" href="/en/admin/memberApplications">
                        <span>Member Applications</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/en/admin/insuranceApplications">
                        <span>Insurance Applications</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/en/admin/insurances">
                        <span>Insurances</span>
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="/en/admin/userQuestions">
                        <span>User Questions</span>
                    </a>
                </li>

                <hr class="sidebar-divider my-0 bg-dark">
                <li class="nav-item">
                    <a class="nav-link" href="/logout">
                        <span>Logout</span>
                    </a>
                </li>

                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>
            </ul>
            <!-- End of Sidebar -->
      
            <main class="py-4" id="content-wrapper">
                @yield('content')
            </main>
        </div>
    </div>

    

    
<!-- Bootstrap core JavaScript-->
<script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('admin/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('admin/js/sb-admin-2.min.js')}}"></script>

</body>
</html>
