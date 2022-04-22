@extends('layout')


@section('content')
    <body>
      <form>
          <h1>タスク登録</h1>

          <br>

          <p>*タスク名</p>
          <input type="text" name="tname" maxlength="30">

          <br>

          <p>タスク詳細</p>
          <input type="text" name="tdet" maxlength="30">

          <br>

          <p>*日付</p>
            <input type="date" name="dating">
          <br>
          
          <p>開始時間</p>
            <input type="time" name="btime">
          <br>
          
          <p>優先度</p>
          <select name='age'>
            <option value='1'>1</option>
            <option value='2'>2</option>
            <option value='3'>3</option>
            </select>
          
          <br>
          
          <p>完了期限</p>
            <input type="date" name="dating">
          <br>

            <p>*入力必須</p>

          <form action="task_input.php" method="post">

            <input type="submit" value="登録">

        <br>

        <a href="http://localhost/index">トップページ</a>
        
      </form>
@endsection
