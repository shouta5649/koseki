<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\tasks;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;


class Task_ListController extends Controller
{
   /* public function getTasks () {
    //
    $tasks = DB::table('tasks')->whereNull('deleted_at')->get();
    return view("task_list")->with("tasks",$tasks);
    }*/
    public function store(Request $request)
    { 

        $tasks = tasks::create([
            'task_id' => $request->task_id,
            'task_name' => $request->task_name,
            'task_det' =>$request->task_det,
            'task_date' =>$request->task_date,
            'task_datetime' =>$request->task_datetime,
            'task_pri' =>$request->task_pri,
            'task_comp' =>$request->task_comp,
        ]);

        event(new Registered($tasks));



        return redirect('task_list');
    }
    public function show($id)
    {
        $tasks = tasks::find($id);

        return view('task_detail',compact('tasks'));
        
    }
    public function index(Request $request) {

        if ($request->ajax()) {
          $tasks = DB::table('tasks')->select('task_name','task_date')->get();
          return response()->json($tasks);
          }
      
      return view('task_list');
      }

}
