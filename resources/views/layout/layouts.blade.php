<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no, maximum-scale=1" />
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
                <div class="play_market">
                    <div class="border-content play_market-content">
                        <div class="play_market-main">
                            <div class="play_market-main-text">
                                    <pre><h2>
Управляй своей машиной прямиком
в новом приложении
</h2></pre>
                            </div>
                            <div class="play_market-main-src">
                                <a href="">
                                    <div class="play_market-main-src-btn">
                                        <div class="play_market-main-src-btn-img">
                                            <img src="{{asset('public/img/google-play.png')}}" alt="google-play">
                                        </div>
                                        <div class="play_market-main-src-btn-text">
                                            <p class="white">Загрузите в</p>
                                            <p class="bold white">Google Play</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="play_market-img">
                            <div class="play_market-img-border">
                                <img src="{{asset('public/img/phone.png')}}" alt="phone">
                            </div>

                        </div>
                        <div class="play_market-qr_code">
                            <div class="play_market-qr_code-img">
                                <img src="{{asset('public/img/qr_code.jfif')}}" alt="qr_code" class="qr_code">
                            </div>
                            <div class="play_market-qr_code-text">
                                <pre>
Наведите камеру
на QR-код, чтобы
скачать
                                </pre>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map">
                    <div class="border-content">
                        Карта
                    </div>
                </div>
                <div class="nav">
                    <div class="border-content">

                    </div>
                </div>
                <div class="about">
                    <div class="border-content footer-content">
                        <div>
                            <a href="">Пользовательское соглашение</a>
                        </div>
                        <div>
                            Проектная работа &copy; 2023 МпК МГТУ им. Г.И Носова
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </body>
</html>
