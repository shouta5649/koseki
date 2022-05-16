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
    
    *タスク名
    <input class="form-control" type="text" name="task_name" value="{{ $tasks ->task_name }}" maxlength="30">
    <br>

    <p>タスク詳細</p>
    <input type="text" name="task_det" value="{{ $tasks ->task_det }}" maxlength="30">

    <br>

    <p>*日付</p>
    <input type="date" name="task_date" min="<?php echo date('Y-m-d'); ?>" value="{{ $tasks ->task_date }}">

    <br>

    <p>開始時間</p>
    <input type="time" name="task_datetime" value="{{ $tasks ->task_datetime }}">

    <br>

    <p>優先度</p>
    <select name='task_pri' value="{{ $tasks ->task_pri }}">
      <option value='1'>1</option>
      <option value='2'>2</option>
      <option value='3'>3</option>
    </select>

    <br>

    <p>完了期限</p>
    <input type="date" name="task_comp" min="<?php echo date('Y-m-d'); ?>" value="{{ $tasks ->task_comp }}">

    <br>

    <p> 達成日</p>
    <input type="date" name="dating"min="<?php echo date('Y-m-d'); ?>" >

    <p>ステータス</p>


    <p>*入力必須</p>

    <input type="submit" value="更新">
  </form>
  <form action="{{ route('task_detail', ['id'=>$tasks->task_id]) }}" method="POST">
  @method('DELETE')
  @csrf
  <button type="submit" name="delete" value="1">削除</button>
  </form>

  <a href="http://localhost/index">戻る</a>

  </form>
  @endsection