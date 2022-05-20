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

<form class="row g-3" action="{{ route('task_detail', ['id'=>$tasks->task_id]) }}" method="POST">
  @csrf
  <h1>タスク詳細</h1>
  <div class="col-md-6">
    @if($tasks->task_sta==2)
    タスク名
    <input class="form-control" type="text" name="task_name" value="{{ $tasks ->task_name }}" maxlength="30" >
    *入力必須
  </div>
  @else
  タスク名
  <input class="form-control" type="text" name="task_name" value="{{ $tasks ->task_name }}" maxlength="30">
  *入力必須
  </div>
  @endif

  <div class="col-md-6">
    タスク詳細
    <input class="form-control" type="text" name="task_det" value="{{ $tasks ->task_det }}" maxlength="30">
  </div>

  <div class="col-md-2">
    日付
    <input class="form-control" type="date" name="task_date" value="{{ $tasks ->task_date }}">
    *入力必須
  </div>

  <div class="col-md-2">
    開始時間
    <input class="form-control" type="time" name="task_datetime" value="{{ $tasks ->task_datetime }}">
  </div>

  <div class="col-md-2">
    優先度
    @if($tasks->task_sta==2)
    <select class="form-select" name='task_pri' value="{{ $tasks ->task_pri }}" >
      <option value='#808080'>完了</option>
    </select>
    @else
    <select class="form-select" name='task_pri' value="{{ $tasks ->task_pri }}">
      <option value='#ff0000'>優先(赤)</option>
      <option value='#00ffff'>それなりに(青)</option>
      <option value='#00ff00'>どっちでも(緑)</option>
      <option value='#808080'>完了(灰)</option>
    </select>
    @endif
  </div>

  <div class="col-md-2">
    完了期限
    <input class="form-control" type="date" name="task_comp" value="{{ $tasks ->task_comp }}">
  </div>

  <div class="col-md-2">
    達成日
    @if($tasks->task_sta==2)
    <input class="form-control" type="date" name="task_reach" value="{{ $tasks ->task_reach }}" >
    @else
    <input class="form-control" type="date" name="task_reach" min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>">
    @endif
  </div>

  <div class="col-md-2">
    ステータス
    @if($tasks->task_sta==2)
    <select class="form-select" name='task_sta' >
      <option value='2'>完了</option>
    </select>
    @else
    <select class="form-select" name='task_sta'>
      <option value='1'>進行中</option>
      <option value='2'>完了</option>
      <option value='3'>期限切れ</option>
    </select>
    @endif
  </div>


  @if($tasks->task_sta==2)
  <form action="{{ route('task_detail', ['id'=>$tasks->task_id]) }}" method="POST">
    @method('DELETE')
    @csrf
    <p class="card-text"><button class="btn btn-primary" type="submit" name="delete" value="1">削除</button>
  <p class="card-text"><a class="btn btn-primary" href="http://localhost/task_list">戻る</a>
    @else
  <p class="card-text"><input class="btn btn-primary" type="submit" value="更新">
</form>

<form action="{{ route('task_detail', ['id'=>$tasks->task_id]) }}" method="POST">
  @method('DELETE')
  @csrf
  <p class="card-text"><button class="btn btn-primary" type="submit" name="delete" value="1">削除</button>
</form>

<p class="card-text"><a class="btn btn-primary" href="http://localhost/task_list">戻る</a>

  </form>
  @endif

  @endsection