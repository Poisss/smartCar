@extends('layout.layouts')
@section('title','Инструкция')
@section('content')
<h1>Список сущностей REST API</h1>
<ul>
    <li>
        <a href="instructions">Пользователь</a>
        <ul>
            <li>
                <a href="instructions#get">Get</a>
            </li>
            <li>
                <a href="instructions#post">Post</a>
            </li>
            <li>
                <a href="instructions#put">Put</a>
            </li>
            <li>
                <a href="instructions#delete">Delete</a>
            </li>
        </ul>
    </li>
</ul>
@endsection
