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

          <h1>トップページ</h1>

          <p class="card-text"><a class="btn btn-primary" href="http://localhost/task_input">タスク登録</a>
          
          <p class="card-text"><a class="btn btn-primary" href="http://localhost/task_list">タスク一覧</a>

          <form method="POST" action="{{ route('logout') }}">
             @csrf
             <p class="card-text"><input class="btn btn-primary" type="submit" value="ログアウト">

      </form>
@endsection
