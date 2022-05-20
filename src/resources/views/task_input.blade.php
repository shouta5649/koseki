@extends('layout')


@section('content')


<form>

  <h1>見終わった作品</h1>



  @foreach($tasks as $task)
  <p><a href="{{ route('task_detail',[$task->task_id]) }}">{{ $task ->task_name }}</a></p>
  @csrf
  @endforeach



  <p class="card-text"><a class="btn btn-primary" href="http://localhost/index">トップページ</a>

</form>
@endsection