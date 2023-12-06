@extends('layout.layouts')
@section('title','Профиль')
@section('content')
<div  class="border-content">
    <h1>Настройки</h1>
    <h2 class="margin">Личные данные</h2>
    <div>
        <div class="menu-window-info">
            <div class="logo">
                <img src="{{asset($data->user->image)}}" alt="">
            </div>
            <div>
                <h2>{{$data->user->email}}</h2>
            </div>
        </div>
        <hr class="margin">
        <div class="info-block margin">
            <div class="info-key">
                Имя
            </div>
            <div class="info-value">
                {{$data->user->firstname}}
            </div>
        </div>
        <div class="info-block margin">
            <div class="info-key">
                Фамилия
            </div>
            <div class="info-value">
                {{$data->user->lastname}}
            </div>
        </div>
        <div class="info-block margin">
            <div class="info-key">
                Отчество
            </div>
            <div class="info-value">
                {{$data->user->patronymic}}
            </div>
        </div>
        <div class="info-block margin">
            <div class="info-key">
                Пол
            </div>
            <div class="info-value">
                @if ($data->user->gender=='М')
                    Мужской
                @else
                    Женский
                @endif
            </div>
        </div>
    </div>

</div>
@endsection
