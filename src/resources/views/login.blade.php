@extends('layout')


@section('content')
    
    <p>ログインページ</p>
    <form method="POST" action="{{ route('login') }}">
    <p> id </p>

    <input type="text" name="id" maxlength="10">

    <p>パスワード</p>

    <input type="password" name="password" maxlength="10" >
    <br>
    
    <input type="submit" value="ログイン">
    </form>
@endsection