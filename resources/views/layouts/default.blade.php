<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="cache-control" content="no-cache, no-store">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="{{asset("/css/common.css")}}">
    <title>@yield('title')/タスク管理＜Panda＞</title>
    @yield('other')
  </head>
  <body>
  @include('parts.header')
  @yield('content')
</html>
