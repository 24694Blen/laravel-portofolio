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
    <link rel="stylesheet" href="https://cdn.rawgit.com/mfd/09b70eb47474836f25a21660282ce0fd/raw/e06a670afcb2b861ed2ac4a1ef752d062ef6b46b/Gilroy.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">

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
                            <a href="">@include('images.logo')</a>
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
                <div class="nav__right">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a class="nav__btn nav__btn--style" href="">Give me a Job</a>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class="header">

            </div>
        </header>

        <main>
            @yield('content')
        </main>




        <footer class="footer">
            <div class="footer__one">
                <ul class="footer__list">
                    <li class="footer__item">
                        <a href="">@include('images.logo')</a>
                    </li>
                    <li class="footer__item">
                        <p class="footer__item--description">
                            Ik ben jong, gemotiveerd en leergierig. Ik hou van een uitdaging
                        </p>
                    </li>
                </ul>
            </div>
            <div class="footer__two">
                <ul class="footer__list">
                    <li class="footer__item">
                        <a class="footer__item--text footer__item--title" href="">Sitemap</a>
                    </li>
                    <li class="footer__item">
                        <a class="footer__item--text" href="">Home</a>
                    </li>
                    <li class="footer__item">
                        <a class="footer__item--text" href="">Projects</a>
                    </li>
                    <li class="footer__item">
                        <a class="footer__item--text" href="">About me</a>
                    </li>
                    <li class="footer__item">
                        <a class="footer__item--text" href="">Contact</a>
                    </li>
                </ul>
            </div>
          
            <div class="footer__four">
                <ul class="footer__list">
                    <li class="footer__item">
                        <a class="footer__item--text footer__item--title" href="">Contact</a>
                    </li>
                    <li class="footer__item">
                        <p class="footer__item--text">E-mail: <a href="">blen2001@2outlook.com</a></p>
                    </li>
                    <li class="footer__item">
                        <p class="footer__item--text">Tel: <a href="">0628221992</a></p>
                    </li>
                    <li class="footer__item">
                        <p class="footer__item--text">Locatie: unknown</p>
                    </li>
                </ul>
            </div>
            <div class="footer__three">
                <ul class="footer__list">
                    <li class="footer__item">
                        <a class="footer__item--text footer__item--title" href="">Service</a>
                    </li>
                    <li class="footer__item">
                        <a class="footer__item--text" href="">Nieuws</a>
                    </li>
                    <li class="footer__item">
                        <a class="footer__item--text" href="">Jobs</a>
                    </li>
                    <li class="footer__item">
                        <a class="footer__item--text" href="">Blog</a>
                    </li>
                    <li class="footer__item">
                        <div class="footer__social">
                            <ul class="footer__list">
                                <li class="footer__item">
                                    <a class="footer__btn" href="">@include('images.insta')</a>
                                </li>
                                <li class="footer__item">
                                    <a class="footer__btn" href="">@include('images.facebook')</a>
                                </li>
                                <li class="footer__item">
                                    <a class="footer__btn" href="">@include('images.linkedin')</a>
                                </li>
                                <li class="footer__item">
                                    <a class="footer__btn" href="">@include('images.twitter')</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
</body>

</html>
