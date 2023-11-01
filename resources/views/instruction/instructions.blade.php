@extends('layout.layouts')
@section('title','Инструкция')
@section('content')
<h1>Список сущностей REST API</h1>
<ul class="list-level-one">
    <li>
        <a href="instructions/user" class="a li">Пользователь:User</a>
        <ul class="list-level-two">
            <li>
                <a href="instructions/user#get" class="a li">Get /user</a>
            </li>
            <li>
                <a href="instructions/user#get-id" class="a li">Get /user/:id</a>
            </li>
            <li>
                <a href="instructions/user#post" class="a li">Post /user</a>
            </li>
            <li>
                <a href="instructions/user#put-id" class="a li">Put /user/:id</a>
            </li>
            <li>
                <a href="instructions/user#delete-id" class="a li">Delete /user/:id</a>
            </li>
        </ul>
    </li>
</ul>
@endsection
