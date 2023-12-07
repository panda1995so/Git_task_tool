<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\progress;
use App\Models\Projects;
use App\Models\priorities;

class Managed extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Projects = Projects::all();
      // compactで変数を渡す
      return view('managed.managed',compact('Projects'));

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
      $ch_value = $request->input('register');
      if($ch_value === 'progress'){
        $rules = [
                  'progress' => 'required'
                ];
        $messages = ['required' => '空白は登録出来ません'];
        Validator::make($request->all(),$rules,$messages)->validate();
        $Progress = new progress;
        $Progress->progress_Str = $request->input('progress');
        $Progress->progress_Num = Str::random(5);
        $Progress->save();
        $completed_msg = '選択肢の追加が完了しました';

      }elseif($ch_value === 'project'){
        $rules = [
                  'project' => 'required'
                ];
        $messages = ['required' => '空白は登録出来ません'];
        Validator::make($request->all(),$rules,$messages)->validate();
        $Projects = new projects;
        $Projects->pj_Name = $request->input('project');
        $Projects->pj_Num = Str::random(5);
        $Projects->save();
        $completed_msg = 'プロジェクトの追加が完了しました';

      }elseif($ch_value === 'priority'){
        $rules = [
                  'priority' => 'required'
                ];
        $messages = ['required' => '空白は登録出来ません'];
        Validator::make($request->all(),$rules,$messages)->validate();
        $Priorities = new priorities;
        $Priorities->priority_Str = $request->input('priority');
        $Priorities->priority_Num = Str::random(5);
        $Priorities->save();
        $completed_msg = '優先度の追加が完了しました';

      }else{
        return redirect('/managed')->with('err_msg','登録できる内容はありません');
      }

        return redirect('/managed')->with('completed_msg',$completed_msg);
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
