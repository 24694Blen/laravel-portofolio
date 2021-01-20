<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Portofolio') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>

<body>
    <div id="app">
        <header>
            <nav class="nav">
                <div class="nav__left">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="">Home</a>
                        </li>
                    </ul>
                </div>
                <div class="nav__center">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="">Home</a>
                        </li>
                        <li class="nav__item">
                            <a href="">Projects</a>
                        </li>
                        <li class="nav__item">
                            <a href="">About me</a>
                        </li>
                        <li class="nav__item">
                            <a href="">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <main>
            @yield('content')
        </main>




        <footer>
            <div class="footer">
                <p>Footer</p>
            </div>
        </footer>
    </div>
</body>

</html>
