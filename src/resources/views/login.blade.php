@extends('layout')


@section('content')
    

    <p>ログインページ</p>

    <p> id </p>

    <input type="text" name="id" maxlength="10">

    <p>パスワード</p>

    <input type="text" name="password" maxlength="10" >
    <br>
    <form method="post" action="{{ route('login') }}">
    @csrf
    <input type="submit" value="ログイン">
@endsection