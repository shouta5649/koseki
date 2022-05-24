@extends('layout')

@section('content')
レビューページ
<br>
タイトル
<input class="form-control" type="text" name="task_name" value="{{ $task ->task_name }}" maxlength="30">

<p><a href="{{ route('review_input/{id}',[$task->task_id]) }}">レビュー登録</a></p>
@csrf

<p class="card-text"><a class="btn btn-primary" href="http://localhost/index">トップページ</a>

    @endsection