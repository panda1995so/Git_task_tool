<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use App\Models\Projects;

class nazotokitest extends Controller
{
  public function index(){
    $Projects = Projects::all();
    $url = url() -> current();
    if(preg_match("/nazotoki/",$url)){
      return view('nazotoki.nazotokitest',compact('Projects'));
    }elseif(preg_match("/rally_suudoku/",$url)){
      return view('nazotoki.nazo_suudoku',compact('Projects'));
    }elseif(preg_match("/rally_crosswords/",$url)){
      return view('nazotoki.nazo_crosswords',compact('Projects'));
    }elseif(preg_match("/rally_slitherlink/",$url)){
      return view('nazotoki.nazo_slitherlink',compact('Projects'));
    }elseif(preg_match("/rally_seekwords/",$url)){
      return view('nazotoki.nazo_seekwords',compact('Projects'));
    }
  }
}
