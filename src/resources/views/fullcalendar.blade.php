<!doctype html>
<html lang="ja">

<head>
  <meta charset='utf-8' />
  <title>@yield('title', 'TODO')</title>
  <link rel="stylesheet" href="/css/main.css">
  <script src="/js/main.js"></script>
  <script src="/js/ja.js"></script>
  <script src="https://unpkg.com/micromodal/dist/micromodal.min.js"></script>

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
initialDate: '2022-05-06',
        navLinks: true, // can click day/week names to navigate views
        businessHours: true, // display business hours
        editable: true,
        selectable: true,
        events: [
          {
            title: '打ち合わせ',
            start: '2022-05-13',
            allDay : true,
            constraint: '予定１',
            color: '#257e4a',
          },
          {
              title: '打ち合わせ',
              start: '2022-05-14',
              allDay : true,
              constraint: '予定１',
              color: '#257e4a',
            },
          {
            title: '研修',
            start: '2022-05-15',
            end: '2022-05-16',
            color: 'orange'
          },
          {
              title: '打ち合わせ',
              start: '2022-05-18T10:00:00',
              end: '2022-05-19T12:00:00',
              color: '#257e4a'
            },
          {
            title: '重要',
            start: '2022-05-20',
            color: 'yellow',
            display: 'background'
          },
          {
            title: '訪問',
            start: '2022-05-22',
            allDay : true,
            color: 'red',
          },
        ],

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