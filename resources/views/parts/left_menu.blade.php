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
