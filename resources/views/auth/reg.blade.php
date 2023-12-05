<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        {{-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> --}}
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no, maximum-scale=1" />
        <title>SmartHome| Регистрация</title>
        <link rel="stylesheet" href="{{asset('public/css/app.css')}}">
        <link rel="shortcut icon" href="{{asset('public/images/static/logo.png')}}" />
    </head>
    <body style="background: rgb(244,244,244)">
        <div class="main">
            <div class="form form-reg">
                <a href="/">
                    <span style="color: rgb(0,101,177)" class="bold">Smart</span><span style="color: rgb(238,63,88)" class="bold">Home</span>
                </a>
                <h2>Регистрация</h2>

                <form action="{{route('store')}}" method="post" name="login">
                    @csrf
                    <p>Имя</p>
                    <p class="margin">
                        <input class="input-create" type="text" name="firstname" placeholder="Введите имя" value="" required>
                    </p>
                    <p>Фамилию</p>
                    <p class="margin">
                        <input class="input-create" type="text" name="lastname" placeholder="Введите фамилию" value="" required>
                    </p>
                    <p>Отчество</p>
                    <p class="margin">
                        <input class="input-create" type="text" name="patronymic" placeholder="Введите отчество" value="">
                    </p>
                    <p>Пол</p>
                    <div class="radio margin">
                        <label for="one" class="radio-cursor">
                            <input type="radio" id="one" name="gender" value="М">
                            <span>Мужской</span>
                        </label>
                        <label for="two" class="radio-cursor">
                            <input type="radio" id="two" name="gender" value="Ж">
                            <span >Женский</span>
                        </label>
                    </div>
                    <p>Email</p>
                    <p class="margin">
                        <input class="input-create" type="email" name="email" placeholder="Введите email" value="" required>
                    </p>
                    <p>Пароль</p>
                    <p class="margin">
                        <input class="input-create" type="password" name="password" placeholder="Введите пароль" value="" required>
                    </p>
                    <p>Пароль повтор</p>
                    <p class="margin">
                        <input class="input-create" type="password" name="password_confirmation" placeholder="Подтвердите пароль" value="" required>
                    </p>
                    @if(session()->has('success'))
                        <div class="red">
                            {{session()->get('success')}}
                        </div>
                    @endif
                    <p class="margin">
                        <input class="input-create" type="submit"value="Зарегистрироваться">
                    </p>
                </form>
            </div>
            <p style="margin-top: 30px">Уже есть на Smarthome? <a href="/login" style="color: #0d4cd3">Авторизоваться</a></p>
        </div>
    </body>
</html>
