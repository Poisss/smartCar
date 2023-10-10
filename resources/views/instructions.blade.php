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
                        <h2>
                            Smart Car
                        </h2>
                        <p></p>
                    </div>
                    <ul class="nav">
                        <li>
                            <a href="#user">
                                Пользователь
                            </a>
                        </li>
                        <li>
                            <a href="#car">
                                Машина
                            </a>
                        </li>
                        <li>
                            <a href="#functional">
                                Функционал
                            </a>
                        </li>
                    </ul>
                </nav>
            </header>
            <div class="content">
                <div class="border-content">
                    <div class="info">

                    </div>
                    <div id="user">

                    </div>
                    <div id="car">

                    </div>
                    <div id="functional">

                    </div>
                </div>
            </div>
            <footer>
                <div class="border-content footer-content">
                    <div>
                        Проектная работа &copy; 2023 МпК МГТУ им. Г.И Носова
                    </div>
                    <a href="#header" class="btn-up">
                        <p>Вверх</p>
                        <img src="{{asset('public/img/caret-up-solid.svg')}}" alt="caret-up" class="caret-up">
                    </a>
                </div>
            </footer>
        </div>
    </body>
</html>
