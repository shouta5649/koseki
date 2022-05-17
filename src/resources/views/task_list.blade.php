@extends('fullcalendar')


@section('content')



<h1>タスク一覧</h1>

    @csrf
    <div class="col-md-6">
      <input class="form-control" type="text" name="task_name" placeholder="タスク名" maxlength="30">
      *入力必須
    </div>
    <div class="col-md-6">

      <input class="form-control" type="text" name="task_det" placeholder="タスク詳細" maxlength="30">
    </div>

    <div class="col-md-2">
      <label for="inputZip" class="form-label">日付</label>
      <input class="form-control" type="date" name="task_date" min="<?php echo date('Y-m-d'); ?>"
        value="<?php echo date('Y-m-d'); ?>">
      *入力必須
    </div>

    <div class="col-md-2">
      <label for="inputZip" class="form-label">開始時間</label>
      <input class="form-control" type="time" name="task_datetime">
    </div>
    <div class="col-md-2">

      <label for="inputZip" class="form-label">完了期限</label>
      <input class="form-control" type="date" name="task_comp" min="<?php echo date('Y-m-d'); ?>"
        value="<?php echo date('Y-m-d'); ?>">

    </div>


    
  <div class="col-md-2">
    <label for="inputState" class="form-label">優先度</label>
    <select name='task_pri'class="form-select">
      <option value='#FF0000'>赤</option>
      <option value='#00FFFF'>青</option>
      <option value='#7CFC00'>緑</option>
    </select>
  </div>
  </form>

  <button id="bt2">
    Ajax->DBにPostテスト
  </button>


<div id='calendar'></div>



<a href="http://localhost/index">トップページ</a>
</form>
@endsection