<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Shop | @yield('title','Home')</title>
        <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
    </head>
    <body>
        <div class="wrapper">
            <header id="header">
                <nav class="border-content nav-content">
                    <div class="logo">
                        <div>
                            <h2>
                                Smart Car
                            </h2>
                            <p>
                                company
                            </p>
                        </div>
                    </div>
                    <a href="/" class="info a">О проекте</a>
                    <a href="/instructions" class="instructions a">Инструкция</a>
                </nav>
            </header>
            <div class="content">
                <div class="border-content">
                    @yield('content')
                </div>
            </div>
            <footer>
                <div class="border-content footer-content">
                    <div>
                        Проектная работа &copy; 2023 МпК МГТУ им. Г.И Носова
                    </div>
                    <a href="#header" class="btn-up">
                        <img src="{{asset('public/img/caret-up-solid.png')}}" alt="caret-up" class="caret-up">
                    </a>
                </div>
            </footer>
        </div>
    </body>
</html>
