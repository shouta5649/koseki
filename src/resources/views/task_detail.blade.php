@extends('layout')


@section('content')
    <body>
      <form>
          <h1>タスク詳細</h1>

          <br>
          <p>*タスク名</p>
            <input type="text" name="task_name" value="タスク名" maxlength="30">

          <br>

          <p>タスク詳細</p>
            <input type="text" name="task_det" maxlength="30">

          <br>

          <p>*日付</p>
            <input type="date" name="task_date">

          <br>
          
          <p>開始時間</p>
            <input type="time" name="task_datetime">

          <br>
          
          <p>優先度</p>
            <select name='task_pri'>
                <option value='1'>1</option>
                <option value='2'>2</option>
                <option value='3'>3</option>
             </select>
          
          <br>
          
          <p>完了期限</p>
            <input type="date" name="task_comp">

          <br>

          <p> 達成日</p>
          <input type="date" name="dating">

          <p>ステータス</p>


          <p>*入力必須</p>

          <form action="task_input.php" method="post">

            <input type="submit" value="更新">

        <button type="submit" name="delete" value="1">削除</button>

        <a href="http://localhost/index">戻る</a>
        
      </form>
@endsection