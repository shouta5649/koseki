@extends('layout')


@section('content')


  <form class="row g-3" method="POST" action="{{ route('task_input') }}">
    @csrf
    <h1>タスク登録</h1>
    <div class="col-md-6">
    
    
    <input class="form-control" type="text" name="task_name" placeholder="タスク名" maxlength="30">
    *入力必須
  </div>

  <div class="col-md-6">

    <input class="form-control" type="text" name="task_det" placeholder="タスク詳細" maxlength="30">
  </div>
  
  <div class="col-md-2">
    <label for="inputZip" class="form-label">日付</label>
    <input class="form-control" type="date" name="task_date" min="<?php echo date('Y-m-d'); ?>" value="<?php echo date('Y-m-d'); ?>">
    *入力必須
  </div>

  <div class="col-md-2">
    <label for="inputZip" class="form-label">開始時間</label>
    <input class="form-control" type="time" name="task_datetime">
  </div>

  <div class="col-md-2">
    <label for="inputState" class="form-label">優先度</label>
    <select name='task_pri'class="form-select">
      <option value='#ff0000'>優先(赤)</option>
      <option value='#00ffff'>それなりに(青)</option>
      <option value='#00ff00'>どっちでも(緑)</option>
    </select>
  </div>

  <div class="col-md-2">

    <label for="inputZip" class="form-label">完了期限</label>
    <input class="form-control" type="date" name="task_comp" min="<?php echo date('Y-m-d'); ?>" >
  
  </div>

  <div class="col-md-2">
    <label for="inputState" class="form-label">ステータス</label>
    <select class="form-select" name='task_sta'>
      <option value='1'>進行中</option>
    </select>
  </div>
  
<p class="card-text"><input class="btn btn-primary" type="submit" value="登録">



    <p class="card-text"><a class="btn btn-primary" href="http://localhost/index">トップページ</a>

  </form>
  @endsection