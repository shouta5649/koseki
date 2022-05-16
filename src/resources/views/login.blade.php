@extends('layout')
<style>
    html {
        height: 100%;
        margin: 0 auto;
        padding: 0;
        display: table;
    }

    body {
        min-height: 100%;
        margin: 0 auto;
        padding: 0;
        display: table-cell;
        vertical-align: middle;
    }
</style>

@section('content')
<form method="POST" action="{{ route('login') }}" class="text-center card">
    @csrf
    <div class="card-body">

        <p class="card-text"><input class="form-control" type="email" name="email" placeholder="メールアドレス" maxlength="50" required autofocus></p>

        <p class="card-text"><input class="form-control" type="password" name="password" placeholder="パスワード" maxlength="10" required></p>

        <p class="card-text"><input class="btn btn-primary" type="submit" value="ログイン">
    </div>



</form>
@endsection