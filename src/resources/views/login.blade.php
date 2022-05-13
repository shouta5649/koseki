@extends('layout')


@section('content')

<div id="form">
    <p class="form-title">ログインページ</p>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <p> id </p>
    <p class="mail">
    <input type="text" name="email" maxlength="10">
</p>
    <p>パスワード</p>
    <p class="pass">
    <input type="text" name="password" maxlength="10">
</p>
    

<p class="submit">
    <input type="submit" value="ログイン">
</p>
</form>
</div>
@endsection