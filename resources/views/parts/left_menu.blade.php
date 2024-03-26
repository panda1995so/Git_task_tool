<section class="left_1fr">
  <div class="main-menu">
    <nav>
      <ul>
        <li>ホーム</li>
        <li>マイタスク</li>
      </ul>
      <ul>
        @guest

        @else
          @foreach($Projects as $project)
          <a class="btn_hover" href="{{url('project')}}?pjNum={{$project->pj_Num}}" data-value="{{$project->pj_Num}}"><li>{{$project->pj_Name}}</li></a>
          @endforeach
        @endguest
      </ul>
      <ul>
        <a class="btn_hover" href="{{url('managed')}}"><li>設定</li></a>
        <a class="btn_hover" href="{{url('/rally_suudoku/')}}"><li>なぞときパズル</li></a>
        <a class="btn_hover" href="{{url('/4ZiquE8Z4Aw7')}}"><li>なぞときサンプル動画</li></a>
        <a class="btn_hover" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            <li>ログアウト</li>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </ul>
    </nav>
  </div>
</section>
