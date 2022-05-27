@extends('fullcalendar')


@section('content')



<h1>見たい作品</h1>
<form class="row g-3" method="POST" action="{{ route('task_end') }}">
  @csrf
  <div class="col-md-6">
    <input class="form-control" type="text" name="task_name" maxlength="30" placeholder="作品名" >
    *入力必須
  </div>
  <div class="col-md-6">

    <input class="form-control" type="text" name="task_det" placeholder="作品詳細" maxlength="30">
  </div>

  <div class="col-md-2">
    <label for="inputZip" class="form-label">開始日付</label>
    <input class="form-control" type="date" name="task_date" min="<?php echo date('Y-m-d'); ?>"
      value="<?php echo date('Y-m-d'); ?>">
  </div>

 <!-- <div class="col-md-2">
    <label for="inputZip" class="form-label">開始時間</label>
    <input class="form-control" type="time" name="task_datetime">
  </div>
  <div class="col-md-2"> -->

    <label for="inputZip" class="form-label">完了期限</label>
    <input class="form-control" type="date" name="task_comp" min="<?php echo date('Y-m-d'); ?>">

  </div>



  <div class="col-md-2">
    <label for="inputState" class="form-label">優先度</label>
    <select name='task_pri' class="form-select">
      <option value='#ff0000'>優先(赤)</option>
      <option value='#00ffff'>それなりに(青)</option>
      <option value='#00ff00'>どっちでも(緑)</option>
    </select>
  </div>

  <div class="col-md-2">
  <label for="inputState" class="form-label">ステータス</label>
  <select class="form-select" name='task_sta'>
    <option value='1'>進行中</option>
  </select>
</div>
  <p class="card-text"><input class="btn btn-primary" type="submit" value="登録">


  <div id='calendar'></div>



  <a href="http://localhost/index">トップページ</a>
</form>
@endsection