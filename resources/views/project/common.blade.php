<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="cache-control" content="no-cache, no-store">
    <title>{{$Projects_Name->pj_Name}}/タスク管理＜Panda＞</title>
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
              <a class="btn_hover" href="{{url('project')}}?pjNum={{$project->pj_Num}}" data-value="{{$project->pj_Num}}"><li>{{$project->pj_Name}}</li></a>
              @endforeach
            </ul>
            <ul>
              <a class="btn_hover" href="{{url('managed')}}"><li>設定</li></a>
              <li>ログアウト</li>
            </ul>
          </nav>
        </div>
      </section>
      <section class="right_5fr">
        <div class="pjmenu_area">
          <h2>{{$Projects_Name->pj_Name}}</h2>
          <label class="open btn_hover" for="pop-up">＋</label>
          <input type="checkbox" id="pop-up">
          <div class="overlay">
            <div class="popup_form">
              <label class="close" for="pop-up">閉じる</label>
              <form class="add_task" action="project" method="post">
                @csrf
                <input type="hidden" name="pjtable_Num" value="{{$Projects_Name->pj_Num}}">
                <label>タスク名：<input type="text" name="task_Name" placeholder="必須"></label>
                <label>内容：<input type="text" name="About" placeholder="任意"></label>
                <label>期日：<input type="date" name="limitDate" placeholder="任意"></label>
                <label>担当：<input type="number" name="main_Mg" placeholder="任意"></label>
                <label>優先度：<select class="" name="priority">
                  <option hidden>選択してください</option>
                  @foreach($Priorities as $priority)
                    <option value={{$priority->priority_Num}}>{{$priority->priority_Str}}</option>
                  @endforeach
                </select></label>
                <label>進捗：<select class="" name="progress">
                  <option hidden>選択してください</option>
                  @foreach($Progress as $progress)
                    <option value={{$progress->progress_Num}}>{{$progress->progress_Str}}</option>
                  @endforeach
                </select></label>
                <button class="btn_hover" type="submit" name="task_register" value="task_register">登録する
              </form>
            </div>
          </div>
        </div>
        <div class="task_area">
          <h3>セクション名</h3>
          <table>
            <tr class="table_title">
              <th>No</th>
              <th>タスク名</th>
              <th>期日</th>
              <th>優先度</th>
              <th>担当</th>
            </tr>
            @foreach($Tasks as $task)
            <tr class="table_row">
              <td>{{$task->id}}</td>
              <td>{{$task->task_Name}}</td>
              <td>{{$task->limitDate}}</td>
              <td>{{$task->priority_Str}}</td>
              <td>大栁</td>
            </tr>
            @endforeach
            <tr class="table_row">
              <td>
                <label class="open btn_hover" for="pop-up">＋</label>
                <input type="checkbox" id="pop-up">
                <div class="overlay">
                  <div class="popup_form">
                    <label class="close" for="pop-up">閉じる</label>
                    <form class="add_task" action="project" method="post">
                      @csrf
                      <input type="hidden" name="pjtable_Num" value="{{$Projects_Name->pj_Num}}">
                      <label>タスク名：<input type="text" name="task_Name" placeholder="必須"></label>
                      <label>内容：<input type="text" name="About" placeholder="任意"></label>
                      <label>期日：<input type="date" name="limitDate" placeholder="任意"></label>
                      <label>担当：<input type="number" name="main_Mg" placeholder="任意"></label>
                      <label>優先度：<select class="" name="priority">
                        <option hidden value="">選択してください</option>
                        @foreach($Priorities as $priority)
                          <option value={{$priority->priority_Num}}>{{$priority->priority_Str}}</option>
                        @endforeach
                      </select></label>
                      <label>進捗：<select class="" name="progress">
                        <option hidden value="">選択してください</option>
                        @foreach($Progress as $progress)
                          <option value={{$progress->progress_Num}}>{{$progress->progress_Str}}</option>
                        @endforeach
                      </select></label>
                      <button class="btn_hover" type="submit" name="task_register" value="task_register">登録する
                    </form>
                  </div>
                </div>
              </td>
            </tr>
          </table>
        </div>
      </section>
    </main>
  </body>
</html>
