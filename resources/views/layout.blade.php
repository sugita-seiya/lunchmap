<!-- ////////////////////////////////// -->
<!-- 共通テンプレートの作成 -->
<!-- ////////////////////////////////// -->

<!DOCTYPE html>
<html>
  <head>
      <meta charset='utf-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
      <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' >
      <title>Lunchmap</title>
      <style>body {padding-top: 80px;}</style>
  </head>
  <body>
  <nav class='navbar navbar-expand-md navbar-dark bg-dark fixed-top'>
    <a href={{route('shop.list')}} class="navbar-brand">Lunchmap</a>
  </nav>
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>