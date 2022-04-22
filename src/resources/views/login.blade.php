@extends('layout')


@section('content')
    
    <p>ログインページ</p>

    <p> id </p>

    <input type="text" name="id" maxlength="10">

    <p>パスワード</p>

    <input type="password" name="password" maxlength="10" >
    <br>
    <form action="" method="post">
    <input type="submit" value="ログイン">
@endsection