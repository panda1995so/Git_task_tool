<!DOCTYPE html>
<html lang="ja" >
  <head>
    <meta charset="utf-8">
    <meta http-equiv="cache-control" content="no-cache, no-store">
    <title>ホーム/タスク管理＜Panda＞</title>
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="stylesheet" href="../public/css/common.css">
  </head>
  <body>
    <header>
      <h1>test</h1>
    </header>
    <main>
      <section class="left_1fr">
        <div class="main-menu">
          <nav>
            <ul>
              <li>ホーム</li>
              <li>マイタスク</li>
            </ul>
            <ul>
              @foreach($Projects as $project)
              <a href"" value="{{$project->pj_Num}}"><li>{{$project->pj_Name}}</li>
              @endforeach
            </ul>
            <ul>
              <li>設定</li>
              <li>ログアウト</li>
            </ul>
          </nav>
        </div>
      </section>
      <section class="right_3fr">
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
              <input type="text" name="progress" placeholder="入力してください">
              <button class="btn_hover" type="submit" name="data_register" value="登録する">登録する
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
  </body>
</html>
