@extends('layouts.default')
@section('title')
  シークワーズ：申込テスト
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
          <h2>シークワーズ：申込テスト</h2>
        </div>
@include('parts.1_nazotoki.nazo-button')
        <div class="input_area">
          <form class="" action="#" method="post">
            <div class="product_area">
              <div class="product_name">
                <h3>なぞときシークワーズパズルラリー　基本セット</h3>
                <p>テキストテキストテキストテキストテキスト</p>
                <p>テキストテキストテキストテキストテキスト</p>
                <p>テキストテキストテキストテキストテキスト</p>
                <p>テキストテキストテキストテキストテキスト</p>
                <p>テキストテキストテキストテキストテキスト</p>
                <p>テキストテキストテキストテキストテキスト</p>
                <p>テキストテキストテキストテキストテキスト</p>
              </div>
              <div class="flex_2col">
                <p>単価</p>
                <p class="item_price" data-price="300000">￥300,000</p>
              </div>
              <div class="flex_2col">
                <p>数量</p>
                <select class="selection" name="rally_title">
                  <option >0</option>
                  <option selected>1</option>
                </select>
              </div>
            </div>
@include('parts.1_nazotoki.nazo-options')
          </form>
        </div>
        <div class="price_area">
@include('parts.1_nazotoki.calculation')
        </div>
      </section>
    </main>
@endsection('content')
