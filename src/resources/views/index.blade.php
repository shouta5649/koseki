@extends('layout')


@section('content')
    <body>

          <h1>トップページ</h1>

          <a href="http://localhost/task_input">タスク登録</a>

          <br>
          
          <a href="http://localhost/task_list">タスク一覧</a>

          <br>
          <form method="POST" action="{{ route('logout') }}">
             @csrf
          <input type="submit" value="ログアウト">

      </form>
@endsection
