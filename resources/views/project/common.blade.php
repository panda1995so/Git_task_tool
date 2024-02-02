@extends('layouts.default')
@section('title')
  {{$Projects_Name->pj_Name}}
@endsection('title')
@section('other')
<script type="text/javascript">
function window_Fadein(taskid){
  var openWindow = document.getElementById('taskWindow' + taskid);
console.log(openWindow);
  if (openWindow.classList.contains('opened')){
    // 何もしない
  }else {
    var closeWindow = document.getElementsByClassName('opened');
    if(closeWindow.length> 0){
      closeWindow[0].classList.remove('opened');
    };
  };
  openWindow.classList.toggle('opened');
};
</script>
@endsection('other')
@section('content')
    <main>
@include('parts.left_menu')
      <section class="right_5fr">
        <div class="pjmenu_area">
          <h2>{{$Projects_Name->pj_Name}}</h2>
@include('parts.add_task_form')
        </div>
        <div class="task_area">
@if(Session::has('completed_msg'))
    <div class="msg_box_2">
      <p>
        {{session('completed_msg')}}
      </p>
    </div>
@endif
<!-- Task section Start -->
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
            <tr class="table_row" onclick="window_Fadein({{$task->id}})">
              <td>{{$task->id}}</td>
              <td>{{$task->task_Name}}</td>
              <td>{{$task->limitDate}}</td>
              <td>{{$task->priority_Str}}</td>
              <td>大栁</td>
            </tr>
            @endforeach
          </table>
          @foreach($Tasks as $task)
          <div id="taskWindow{{$task->id}}" class="taskWindow_area">
            <h4>{{$task->task_Name}}</h4>
            <table>
              <tr>
                <th>期日：</th>
                <td>{{$task->limitDate}}</td>
              </tr>
              <tr>
                <th>担当：</th>
                <td>{{$task->main_Mg}}</td>
              </tr>
              <tr>
                <th>優先度：</th>
                <td>{{$task->priority_Str}}</td>
              </tr>
            </table>
            <div class="priority_Str_area">
              <p>{{$task->About}}</p>
            </div>
          </div>
          @endforeach
          <div class="section_addbtn">
@include('parts.add_task_form')
          </div>
        </div>
<!-- Task section End -->
      </section>
    </main>
@endsection('content')
