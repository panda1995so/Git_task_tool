@extends('layouts.default')
@section('title')
  設定
@endsection('title')
@section('content')
    <main>
@include('parts.left_menu')
      <section class="right_5fr">
@if(Session::has('err_msg'))
<div class="msg_box">
  <p>
    {{session('err_msg')}}
  </p>
</div>
@endif
@if(Session::has('completed_msg'))
<div class="msg_box_2">
  <p>
    {{session('completed_msg')}}
  </p>
</div>
@endif
        <div class="add_form">
          <div class="">
            <p class="text_bold">進捗：選択肢追加</p>
            <form action="managed" class="form_area" method="post">
              @csrf
              <input type="text" name="progress" placeholder="入力してください">
              <button class="btn_hover" type="submit" name="register" value="progress">登録する
            </form>
          </div>
          <div class="">
            <p class="text_bold">プロジェクト追加</p>
            <form action="managed" class="form_area" method="post">
              @csrf
              <input type="text" name="project" placeholder="入力してください">
              <button class="btn_hover" type="submit" name="register" value="project">登録する
            </form>
          </div>
          <div class="">
            <p class="text_bold">優先度：選択肢追加</p>
            <form class="form_area" action="managed" method="post">
              @csrf
              <input type="text" name="priority" placeholder="入力してください">
              <button class="btn_hover" type="submit" name="register" value="priority">登録する
            </form>
          </div>
        </div>
        <div class="color_check1">

        </div>
        <div class="color_check2">

        </div>
        <div class="color_check3">

        </div>
        <div class="color_check4">

        </div>
      </section>
    </main>
@endsection('content')
