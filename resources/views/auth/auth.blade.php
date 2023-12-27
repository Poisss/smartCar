<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no, maximum-scale=1" />
        <title>SmartHome| {{ __('Авторизация') }}</title>
        <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
        <link rel="shortcut icon" href="{{asset('public/images/static/logo.png')}}" />
    </head>
    <body style="background: rgb(244,244,244)">
        <div class="main">
            <div class="form form-auth">
                <a href="/">
                    <span style="color: rgb(0,101,177)" class="bold">Smart</span><span style="color: rgb(238,63,88)" class="bold">Home</span>
                </a>
                <h2>{{ __('Авторизация') }}</h2>

                <x-form.body action="{{route('signup')}}" method="post" name="signup">
                    <x-form.item>
                        <x-form.label for="email">{{ __('Email') }}</x-form.label>
                        <x-form.input type="email" name="email" id="email" placeholder="Введите email"  autofocus/>
                        <x-error name="email"/>
                    </x-form.item>

                    <x-form.item>
                        <x-form.label for="password">{{ __('Пароль') }}</x-form.label>
                        <x-form.input type="password" name="password" id="password" placeholder="Введите пароль"/>
                        <x-error name="password"/>
                    </x-form.item>

                    @if(session()->has('success'))
                        <div class="green">
                            {{session()->get('success')}}
                        </div>
                    @endif
                    @if(session()->has('error'))
                        <div class="red">
                            {{session()->get('error')}}
                        </div>
                    @endif
                    <div class="margin">
                        <input class="input-create" type="submit"value="Авторизация">
                    </div>
                </x-form.body>
            </div>
            <p style="margin-top: 10px">{{ __('Новичок в Smarthome? ') }}<a href="/create" style="color: #0d4cd3">{{ __('Зарегистрироваться') }}</a></p>
        </div>
    </body>
</html>
