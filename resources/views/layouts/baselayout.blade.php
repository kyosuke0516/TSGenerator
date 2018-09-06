<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <!-- cssの呼び出し -->
    <link href="css/extension.css" rel="stylesheet" type="text/css">
    @yield('css')
  </head>
  <body>
    @yield('content')
  </body>
</html>
