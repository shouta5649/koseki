<!doctype html>
<html lang="ja">

<head>
  <meta charset='utf-8' />
  <title>@yield('title', 'TODO')</title>
  <link rel="stylesheet" href="/css/main.css">
  <script src="/js/main.js"></script>
  <script src="/js/ja.js"></script>
  <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

  @yield('stylesheet')
  <script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {

          locale: 'ja',
          firstDay: 1,

          dayCellContent: function(e) {
    e.dayNumberText = e.dayNumberText.replace('日', '');
},  



        events: 'getEvent',

        });
        calendar.render();
      });

  </script>

</head>

<body>
  @yield('content')

  <footer>
    <p>フッター</p>
  </footer>
</body>

</html>