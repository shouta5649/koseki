@extends('layout')

@section('content')
レビューページ
<br>
タイトル

@foreach($tasks as $task)

<p>{{ $task->task_name }}</p>
@csrf

@endforeach




 @endsection