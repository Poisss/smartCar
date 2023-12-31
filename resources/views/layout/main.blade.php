@extends('layout.layouts')
@section('title','О проекте')
@section('content')
<div class="main-info main-max background3">
    <div class="main-two">
        <div class="">
            <pre class="white big-size">
{{ __('Поделитесь
умным домом
с семьёй')}}</pre>
            <pre class="white margin">
{{ __('Вся семья сможет управлять умными устройствами
например включать чайник или зажигать свет.
Даже если вы далеко.')}}</pre>
            <a href="">
                <div class="btn-redirect white">
                    {{ __('Перейти')}}
                </div>
            </a>
        </div>
    </div>
</div>
{{-- <div class="main-two">
    <div class="main main-max background2 padding">
        <div class="main-img">
            <img src="{{asset('public/images/static/home_settings.png')}}" alt="">
        </div>
        <h1 style="text-align: center">{{ __('Настраивай так, как удобно тебе!')}}</h1>
    </div>
    <div class="main main-max background1 padding">
        <div class="main-img">
            <img src="{{asset('public/images/static/pngwing.png')}}" alt="">
        </div>
        <h1 style="text-align: center">{{ __('Управляй домам уже сегодня')}}</h1>
    </div>
</div> --}}
<div class="main main-min">
    <h1 class="big-size">{{ __('Для безопасности')}}</h1>
    <p>
        С датчиками всё будет под контролем. Проверяйте, как дела дома.
    </p>
</div>
<div class="main main-max background padding">
    <h1>
        {{ __('Выбирай устройства который нужны тебе')}}
    </h1>
    <div class="main-catalog">
        <a href="" class="main-a">
            <div>
                <div class="main-catalog-title">
                    Чайники
                </div>
                <div class="main-catalog-img">

                </div>
            </div>
        </a>
        <a href="" class="main-b">
            <div>
                <div class="main-catalog-title">
                    Свет
                </div>
                <div class="main-catalog-img">

                </div>
            </div>
        </a>
        <a href="" class="main-c">
            <div>
                <div class="main-catalog-title">
                    Розетки
                </div>
                <div class="main-catalog-img">

                </div>
            </div>
        </a>
        <a href="" class="main-d">
            <div>
                <div class="main-catalog-title">
                    Роботы-полесосы
                </div>
                <div class="main-catalog-img">

                </div>
            </div>
        </a>
    </div>
</div>

<div class="play_market">
    <div class="border-content play_market-content">
        <div class="play_market-main">
            <div class="play_market-main-text">
                    <pre><h2>
{{ __('Управляй своим домом прямиком
в новом приложении')}}
</h2></pre>
            </div>
            <div class="play_market-main-src">
                <a href="">
                    <div class="play_market-main-src-btn">
                        <div class="play_market-main-src-btn-img">
                            <img src="{{asset('public/images/static/google-play.png')}}" alt="google-play">
                        </div>
                        <div class="play_market-main-src-btn-text">
                            <p class="white">{{ __('Загрузите в')}}</p>
                            <p class="bold white">{{ __('Google Play')}}</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="play_market-img">
            <div class="play_market-img-border">
                <img src="{{asset('public/images/static/phone.png')}}" alt="phone">
            </div>

        </div>
        <div class="play_market-qr_code">
            <div class="play_market-qr_code-img">
                <img src="{{asset('public/images/static/qr_code.jfif')}}" alt="qr_code" class="qr_code">
            </div>
            <div class="play_market-qr_code-text">
                <pre>
{{ __('Наведите камеру
на QR-код, чтобы
скачать')}}
                </pre>
            </div>
        </div>
    </div>
</div>
@endsection
