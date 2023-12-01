@extends('layout.layouts')
@section('title','Инструкция user')
@section('content')
<div class="border-content">
    <h1>Пользователи: users</h1>
    <div class="nav-border">
        <ul class="list_level_two">
            <li>
                <a href="#get" class="a li">Get /user</a>
            </li>
            <li>
                <a href="#get-id" class="a li">Get /user/:id</a>
            </li>
            <li>
                <a href="#post" class="a li">Post /user</a>
            </li>
            <li>
                <a href="#put-id" class="a li">Put /user/:id</a>
            </li>
            <li>
                <a href="#delete-id" class="a li">Delete /user/:id</a>
            </li>
        </ul>
    </div>
    <div class="table_info">
        <p class="bold">
            Ресурс
        </p>
        <p class="bold">
            Описание
        </p>
        <p>
            GET /users
        </p>
        <p>
            Получить список пользователей
        </p>
    </div>
</div>
@endsection
