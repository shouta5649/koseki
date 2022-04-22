<!doctype html>
<html lang="ja">
<head>
    <p>ヘッダー</p>
  <meta charset="UTF-8">
  <title>@yield('title', 'TODO')</title>
  <link rel="stylesheet" href="css/common.css"/>
  @yield('stylesheet')
  
</head>
<body>
  @yield('content')
  <footer>
    <p>フッター</p>
    </footer>
</body>
</html>