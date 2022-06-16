<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

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
</head>
<body>
    <div id="app">
       <header >
            <div class="preHeader">
                <select name="language" id="language" class="m-2 btn btn-primary">
                    <option value="Ar" selected>Ar</option>
                    <option value="En">En</option>
                </select>
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
                            تسجيل خروج</a>
                    @else
                        <a href="/register" class="btn btn-primary">اشتراك</a>
                        <a href="/login" class="btn btn-primary">تسجيل الدخول</a>
                    @endif
                </div>
            </div>
            <nav>
                <img src="https://scsl.org.lb/wp-content/uploads/2018/07/Asset-12.png" alt="" class="logo">
                <a href="" class="navlink">معلومات عنا</a>
                <a href="" class="navlink">اتصل بنا</a>
                <a href="" class="navlink">أفراد</a>
                <a href="" class="navlink">التقديمات</a>
                <span class="spanwidth"></span>
            </nav>
       </header>

        <main class="py-4">
            @yield('content')
        </main>

        <footer>
            <img src="https://scsl.org.lb/wp-content/uploads/2018/07/Asset-12.png" alt="" class="logo">
            <div>
                <p>نقابة علوم الحاسوب في لبنان © 2022 | التأسيس: وزارة العمل ، مرسوم رقم 76/1</p>
            </div>
            <div class="socialmedia">
                <h3>تواصل معنا</h3>
                <ul>
                    <li>+961 (78) 863 490</li>
                    <li>+961 (1) 660 406</li>
                    <li><a href="mailto:info@scsl.org.lb">info@scsl.org.lb</a></li>
                    <li><a href="mailto:web@scsl.org.lb"> web@scsl.org.lb</a></li>
                    <li><a href="https://www.facebook.com/SyndicateCSLB/">Facebook</a></li>
                    <li><a href="https://www.linkedin.com/company/syndicatecslb">Facebook</a></li>
                </ul>
            </div>
        </footer>
    </div>
</body>
</html>
