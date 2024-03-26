@extends('layouts.default')
@section('title')
  サンプル動画一覧
@endsection('title')
@section('other')
<link rel="stylesheet" href="{{asset("/css/nazotokitest.css")}}">
@endsection('other')
@section('content')
    <main>
@include('parts.left_menu')
      <section class="right_5fr">
        <div class="title_area">
          <h2>サンプル動画一覧</h2>
        </div>
        <div class="movie_container">
          <ul class="movie_col_3">
            <li>
              <video class="item" src="{{asset("/movie/シェイプアニメーション.mp4")}}" controls="" autoplay="" playsinline="" muted=""></video>
            </li>
            <li>
              <video class="item" src="{{asset("/movie/3Dポップアニメーション.mp4")}}" controls="" autoplay="" playsinline="" muted=""></video>
            </li>
            <li>
              <video class="item" src="{{asset("/movie/3D　ビジネス.mp4")}}" controls="" autoplay="" playsinline="" muted=""></video>
            </li>
            <li>
              <video class="item" src="{{asset("/movie/240326_ときこちゃん_会場紹介.mp4")}}" poster="{{asset("/img/サンプル動画_サムネイル.png")}}" controls="" playsinline="" muted=""></video>
            </li>
          </ul>
        </div>
      </section>
    </main>
@endsection('content')
