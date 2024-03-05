@extends('layouts.default')
@section('title')
  お見積り内容確認：申込テスト
@endsection('title')
@section('other')
<link rel="stylesheet" href="{{asset("/css/nazotokitest.css")}}">
<script type="text/javascript" src="{{asset("/javascript/nazotoki_use.js")}}"></script>
@endsection('other')
@section('content')
  <main>
  @include('parts.left_menu')
    <section class="right_5fr">
      <div class="title_area">
        <h2>お見積り内容確認：申込テスト</h2>
      </div>

@endsection('content')
