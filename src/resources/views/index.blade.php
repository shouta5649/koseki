@extends('layout')


@section('content')

          <h1>トップページ</h1>

          <p class="card-text"><a class="btn btn-primary" href="http://localhost/task_end">見終えた作品</a>
          
          <p class="card-text"><a class="btn btn-primary" href="http://localhost/task_list">見たい作品</a>

          <form method="POST" action="{{ route('logout') }}">
             @csrf
             <p class="card-text"><input class="btn btn-primary" type="submit" value="ログアウト">

      </form>
@endsection
