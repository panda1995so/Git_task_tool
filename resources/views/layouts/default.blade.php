<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="cache-control" content="no-cache, no-store">
    <meta name="robots" content="noindex" />
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="{{asset("/css/common.css")}}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <title>@yield('title')/タスク管理＜Panda＞</title>
    @yield('other')
  </head>
  <body>
  @include('parts.header')
  @yield('content')
</html>
