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
    return view('nazotokitest',compact('Projects'));
  }
}
