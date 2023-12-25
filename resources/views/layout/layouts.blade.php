<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no, maximum-scale=1" />
        <title>SmartHome| @yield('title','Home')</title>
        <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
        <link rel="shortcut icon" href="{{asset('public/images/static/logo.png')}}" />
        <style>
            .interior{
                background-attachment: fixed;
                background-image: url({{asset('public/images/static/interior.jpg')}});
            }
            .background{
                background-attachment: fixed;
                background-image: url({{asset('public/images/static/background1.jpg')}});
            }
        </style>
    </head>
    <body>
        <div class="wrapper">
            <header>
                <nav class="border-content nav-content">
                    <div>
                        <a href="/" >
                            <pre>
<span style="color: rgb(0,101,177)" class="bold">Smart</span><span style="color: rgb(238,63,88)" class="bold">Home</span>
<span class="white">Company</span>
                            </pre>

                        </a>
                    </div>
                    <div class="nav-content-block">
                        <a href="/devices" class="nav-a">
                            Устройства
                        </a>
                        <a href="/" class="nav-a">
                            Справочник
                        </a>
                        <a href="/devices" class="nav-a">
                            Мои устройства
                        </a>
                    </div>
                    @if ($data->role=='quest')
                        <div>
                            <div class="btn-login">
                                <a href="/login">Войти</a>
                            </div>
                        </div>
                    @endif
                    @if ($data->role=='user'||$data->role=='admin')
                        <div class="menu">
                            <div class="logo btn-menu-open pointer">
                                <img src="{{asset($data->image)}}" alt="">
                            </div>
                            <div class="menu-window">
                                <div class="logo btn-menu-close">
                                    <img src="{{asset('public/images/static/close.png')}}" alt="">
                                </div>
                                <div class="menu-window-info">
                                    <div class="logo">
                                        <a href="/profile"><img src="{{asset($data->image)}}" alt=""></a>
                                    </div>
                                    <div>
                                        <h3 class="bold">{{$data->name}}</h3>
                                        <p>{{$data->email}}</p>
                                    </div>
                                </div>
                                @if ($data->role=='admin')
                                <a href="/admin">
                                    <div class="btn-menu">
                                        Админка
                                    </div>
                                </a>
                                @endif
                                <a href="/access">
                                    <div class="btn-menu">
                                        Доступ
                                    </div>
                                </a>
                                <a href="/profile">
                                    <div class="btn-menu">
                                        Настройки
                                    </div>
                                </a>
                                <hr class="margin" style="width: 100%">
                                <a href="/logout">
                                    <p class="btn-menu">Выход</p>
                                </a>
                            </div>
                        </div>

                    @endif
                </nav>
            </header>
            <div class="content">
                <div class="border-content-height">
                    @yield('content')
                </div>
            </div>
            <footer>
                {{-- <script src="https://api-maps.yandex.ru/2.1/?apikey=91a91a1d-c68a-48b0-a7f6-b0670b4b5494&lang=ru_RU" type="text/javascript"></script>
                    <script type="text/javascript">
                        ymaps.ready(init);
                        function init(){
                            var myMap = new ymaps.Map("map", {
                                center: [53.397198, 58.983943],
                                zoom: 17,
                                zoomRange: {min: 16, max: 19},
                                controls: ['zoomControl','fullscreenControl'],

                            });
                        }
                    </script> --}}
                {{-- <div class="map">
                    <div class="border-content">
                        <div id="map" class="map-block"></div>
                    </div>
                </div> --}}
                <div class="nav">
                    <div class="border-content">
                        <hr>
                        <div class="footer-nav-grid">
                            <div>
                                <h3 class="bold margin">
                                    Дополнительная информация
                                </h3>

                                <p class="margin">
                                    <a href="/info" class="a">О проекте</a>
                                </p>
                                <p class="margin">
                                    <a href="/instructions" class="a">Запросы</a>
                                </p>
                            </div>
                            <div>
                                <h3>

                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about">
                    <div class="border-content footer-content">
                        <div>
                            <a href="/agreement">Пользовательское соглашение</a>
                        </div>
                        <div>
                            Проектная работа &copy; 2023 МпК МГТУ им. Г.И Носова
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <script src="{{asset('public/js/js.js')}}"></script>
    </body>
</html>
