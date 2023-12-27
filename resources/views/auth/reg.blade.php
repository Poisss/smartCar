<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no, maximum-scale=1" />
        <title>SmartHome| {{ __('Регистрация') }}</title>
        <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
        <link rel="shortcut icon" href="{{asset('public/images/static/logo.png')}}" />
    </head>
    <body style="background: rgb(244,244,244)">
        <div class="main">
            <div class="form form-reg">
                <a href="/">
                    <span style="color: rgb(0,101,177)" class="bold">Smart</span><span style="color: rgb(238,63,88)" class="bold">Home</span>
                </a>
                <h2>{{ __('Регистрация') }}</h2>
                <x-form.body action="{{route('store')}}" method="post">
                    <x-form.item>
                        <x-form.label required for="firstname">{{ __('Имя') }}</x-form.label>
                        <x-form.input type="text" name="firstname" id="firstname" placeholder="Введите имя" autofocus/>
                        <x-error name="firstname"/>
                    </x-form.item>

                    <x-form.item>
                        <x-form.label required for="lastname">{{ __('Фамилию') }}</x-form.label>
                        <x-form.input type="text" name="lastname" id="lastname" placeholder="Введите фамилию"/>
                        <x-error name="lastname"/>
                    </x-form.item>

                    <x-form.item>
                        <x-form.label for="patronymic">{{ __('Отчество') }}</x-form.label>
                        <x-form.input type="text" name="patronymic" id="patronymic" placeholder="Введите отчество"/>
                        <x-error name="patronymic"/>
                    </x-form.item>

                    <x-form.item>
                        <x-form.label for="gender-one">{{ __('Пол') }}</x-form.label>
                        <div class="radio">
                            <label for="gender-one" class="radio-cursor">
                                <x-form.input type="radio" name="gender" id="gender-one" value="М"/><span>Мужской</span>
                            </label>
                            <label for="gender-two" class="radio-cursor">
                                <x-form.input type="radio" name="gender" id="gender-two" value="Ж"/><span>Женский</span>
                            </label>
                        </div>
                        <x-error name="gender"/>
                    </x-form.item>

                    <x-form.item>
                        <x-form.label required for="email">{{ __('Email') }}</x-form.label>
                        <x-form.input type="email" name="email" id="email" placeholder="Введите email"/>
                        <x-error name="email"/>
                    </x-form.item>

                    <x-form.item>
                        <x-form.label required for="password">{{ __('Пароль') }}</x-form.label>
                        <x-form.input type="password" name="password" id="password" placeholder="Введите пароль"/>
                        <x-error name="password"/>
                    </x-form.item>

                    <x-form.item>
                        <x-form.label required for="password_confirmation">{{ __('Пароль повтор') }}</x-form.label>
                        <x-form.input type="password" name="password_confirmation" id="password_confirmation" placeholder="Подтвердите пароль"/>
                        <x-error name="password_confirmation"/>
                    </x-form.item>

                    <x-form.item>
                        <input class="input-create" type="submit"value="Зарегистрироваться">
                    </x-form.item>
                </x-form.body>
            </div>
            <p style="margin-top: 10px">{{ __('Уже есть на Smarthome? ') }}<a href="/login" style="color: #0d4cd3">{{ __('Авторизоваться') }}</a></p>
        </div>
    </body>
</html>
