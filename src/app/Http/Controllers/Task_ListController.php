<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\tasks;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;


class Task_ListController extends Controller
{
    public function getTasks () {
    //
    $tasks = DB::table('tasks')->whereNull('deleted_at')->get();
    return view("task_input")->with("tasks",$tasks);
    }
    
    public function store(Request $request)
    { 

        $tasks = new tasks;
            $tasks->task_id = $request->input('task_id');
            $tasks->task_name = $request->input('task_name');
            $tasks->task_det = $request->input('task_det');
            $tasks->task_dat = date('Y-m-d', $request->input('task_date')/ 1000);
            $tasks->task_datetime = $request->input('task_datetime');
            $tasks->task_pri = $request->input('task_pri');
            $tasks->task_comp = $request->input('task_comp');
            $tasks->task_sta = $request->input('task_sta');
            $tasks->save();



        return redirect('task_list');
    }
    public function show($id)
    {
        $tasks = tasks::find($id);

        return view('task_detail',compact('tasks'));
        
    }
    public function getEvent(Request $request) {

        if ($request->ajax()) {
          $tasks = DB::table('tasks')->select('task_id as id','task_name as title','task_date as start')->get();
          return response()->json($tasks);
          }
      
      return view('task_list');
      }

}
