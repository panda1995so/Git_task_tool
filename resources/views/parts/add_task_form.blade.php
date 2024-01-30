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
