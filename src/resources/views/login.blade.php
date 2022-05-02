@extends('layout')


@section('content')
    

    <p>ログインページ</p>
    <form method="POST" action="{{ route('login') }}">
    @csrf
    <p> id </p>

    <input type="text" name="email" maxlength="10">

    <p>パスワード</p>

    <input type="text" name="password" maxlength="10" >
    <br>
    
    
    <input type="submit" value="ログイン">
    </form>
@endsection