@extends('layouts.default')
@section('title')
  申込テスト
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
          <h2>申込テスト</h2>
        </div>
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
                <p>￥250,000</p>
              </div>
              <div class="flex_2col">
                <p>数量</p>
                <select class="selection" name="rally_title">
                  <option >0</option>
                  <option selected>1</option>
                </select>
              </div>
            </div>
            <div class="product_area">
              <div class="product_name">
                <h3>なぞときシークワーズパズルラリー　基本セット</h3>
                <p>テキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</p>
                <p>テキストテキストテキストテキストテキスト</p>
                <p>テキストテキストテキストテキストテキスト</p>
              </div>
              <div class="flex_2col">
                <p>単価</p>
                <p>￥1,000</p>
              </div>
              <div class="flex_2col">
                <p class="text_center">数量</p>
                <select class="selection" name="rally_title">
                  <option selected>0</option>
                  <option>1</option>
                </select>
              </div>
            </div>

            <input type="number" name="rally_option" value="">
            <input type="number" name="rally_option" value="">
            <input type="number" name="rally_option" value="">
            <input type="number" name="rally_option" value="">
            <input type="number" name="rally_option" value="">
            <input type="number" name="rally_option" value="">
            <input type="number" name="rally_option" value="">
            <input type="number" name="rally_option" value="">
          </form>
        </div>
        <div class="price_area">
          <table>
            <tr>
              <th>小計：</th>
              <td id="subtotal">0円</td>
            </tr>
            <tr>
              <th>消費税：</th>
              <td id="tax">0円</td>
            </tr>
            <tr>
              <th>合計：</th>
              <td id="total_price">0円</td>
            </tr>
          </table>
        </div>
      </section>
    </main>
@endsection('content')
