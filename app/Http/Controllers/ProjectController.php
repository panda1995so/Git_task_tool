<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Tasks;
use App\Models\progress;
use App\Models\Projects;
use App\Models\priorities;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $Progress = progress::all();
      $Priorities = priorities::all();
      $url_param = $request->query('pjNum');
      $Projects = Projects::all();
      $Projects_Name = DB::table('Projects')
        ->where('Projects.pj_Num', '=' , $url_param)
        ->first();

      $Tasks = DB::table('Tasks')
        ->leftJoin('priorities','Tasks.priority', '=', 'priorities.priority_Num')
        ->leftJoin('progress','Tasks.progress', '=', 'progress.progress_Num')
        ->select('Tasks.id','Tasks.pjtable_Num','Tasks.task_Name','Tasks.About',
                  'Tasks.main_Mg','Tasks.limitDate','Tasks.priority','priorities.priority_Str',
                  'Tasks.progress','progress.progress_Str')
        ->where('Tasks.pjtable_Num', '=', $url_param)
        ->orderBy('Tasks.id')
        ->get();
// dd($Tasks);
      return view('project.common',compact('Progress','Priorities','Projects','Projects_Name','Tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      if($request->has('task_register')){
        $url_param = $request->input('pjtable_Num');
        $text_memo = $request->input('Text_memo');
        if ($text_memo === null){
          $text_memo = '';
        }else{
          $text_memo = $request->input('Text_memo');
        }
        $rules = [
            'pjtable_Num' => 'required',
            'section_Num' => 'nullable',
            'task_Num'    => 'nullable',
            'task_Name'   => 'required',
            'About'       => 'nullable',
            'limitDate'   => 'nullable',
            'main_Mg'     => 'nullable',
            'priority'    => 'nullable',
            'progress'    => 'nullable',
        ];
        $messages = [
          'task_Name.required' => 'タスク名が選択されていません',
        ];
        Validator::make($request->all(), $rules, $messages)->validate();
        $Tasks = new Tasks;
        $Tasks->pjtable_Num = $url_param;
        $Tasks->task_Name   = $request->input('task_Name');
        $Tasks->About       = $request->input('About') ?? '';
        $Tasks->limitDate   = $request->input('limitDate') ?? '';
        $Tasks->main_Mg     = $request->input('main_Mg') ?? '';
        $Tasks->priority    = $request->input('priority') ?? '';
        $Tasks->progress    = $request->input('progress') ?? '';
        $Tasks->save();
        $completed_msg = 'タスクの登録が完了しました';
        $url = url()->current();
        $urlwithparams = $url . '?pjNum=' . $url_param;
        return redirect()->to($urlwithparams)->with('completed_msg',$completed_msg);
      }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
