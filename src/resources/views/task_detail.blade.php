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
    
    タスク名
    <input class="form-control" type="text" name="task_name" value="{{ $tasks ->task_name }}" maxlength="30">
    *入力必須
  </div>

  <div class="col-md-6">
    タスク詳細
    <input class="form-control" type="text" name="task_det" value="{{ $tasks ->task_det }}" maxlength="30">
  </div>

  <div class="col-md-2">
    日付
    <input class="form-control" type="date" name="task_date" min="<?php echo date('Y-m-d'); ?>" value="{{ $tasks ->task_date }}">
    *入力必須
  </div>

  <div class="col-md-2">
    開始時間
    <input class="form-control" type="time" name="task_datetime" value="{{ $tasks ->task_datetime }}">
</div>
  
<div class="col-md-2">
    優先度
    <select class="form-select" name='task_pri' value="{{ $tasks ->task_pri }}">
      <option value='#ff0000'>優先(赤)</option>
      <option value='#00ffff'>それなりに(青)</option>
      <option value='#00ff00'>どっちでも(緑)</option>
    </select>
  </div>

    <div class="col-md-2">
    完了期限
    <input class="form-control" type="date" name="task_comp" min="<?php echo date('Y-m-d'); ?>" value="{{ $tasks ->task_comp }}">
</div>

    <div class="col-md-2">
     達成日
    <input class="form-control" type="date" name="dating"min="<?php echo date('Y-m-d'); ?>" >
  </div>




  <p class="card-text"><input class="btn btn-primary" type="submit" value="更新">
  </form>
  <form action="{{ route('task_detail', ['id'=>$tasks->task_id]) }}" method="POST">
  @method('DELETE')
  @csrf
  <p class="card-text"><button class="btn btn-primary" type="submit" name="delete" value="1">削除</button>
  </form>

  <p class="card-text"><a class="btn btn-primary" href="http://localhost/index">戻る</a>

  </form>
  @endsection