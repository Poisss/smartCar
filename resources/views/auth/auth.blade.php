<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no, maximum-scale=1" />
        <title>SmartHome| Авторизация</title>
        <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
        <link rel="shortcut icon" href="{{asset('public/images/static/logo.png')}}" />
    </head>
    <body style="background: rgb(244,244,244)">
        <div class="main">
            <div class="form">
                <a href="/">
                    <span style="color: rgb(0,101,177)" class="bold">Smart</span><span style="color: rgb(238,63,88)" class="bold">Home</span>
                </a>
                <h2>Авторизация</h2>
                @if(session()->has('success'))
                <div>
                    {{session()->get('success')}}
                </div>
                @endif
                <form action="{{route('signup')}}" method="post" name="signup">
                    @csrf
                    <div>
                        Email
                    </div>
                    <div class="margin">
                        <input class="input-create" type="email" name="email" placeholder="Введите email" value="" required>
                    </div>
                    <div>
                        Пароль
                    </div>
                    <div class="margin">
                        <input class="input-create" type="password" name="password" placeholder="Введите пароль" value="" required>
                    </div>
                    <div class="margin">
                        <input class="input-create" type="submit"value="Авторизация">
                    </div>
                </form>
            </div>
            <p style="margin-top: 30px">Новичок в Smarthome? <a href="/create" style="color: #0d4cd3">Зарегистрироваться</a></p>
        </div>
    </body>
</html>
