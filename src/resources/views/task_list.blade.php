@extends('fullcalendar')


@section('content')
@csrf


<h1>タスク一覧</h1>
<div style="margin-top:30px; border:1px solid gray;">
  <form id="form" action="">
    <p><input type="text" name="task_name" placeholder="タイトル入力"></p>
    <p><input type="date" name="task_date" placeholder="日付入力"></p>
    <p><input type="color" name="task_pri"></p>
  </form>

  <button id="bt2">
    Ajax->DBにPostテスト
  </button>
</div>

<div id='calendar'></div>
<script>
  var calendar = new Calendar(calendarEl, {
  timeZone: 'UTC',
  events: [
    {
      id: 'a',
      title: 'testEvent',
      start: '2022-05-14'
    }
  ]
})
</script>


<a href="http://localhost/index">トップページ</a>
</form>
@endsection