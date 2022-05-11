<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\tasks;
use Illuminate\Http\Request;

class Task_ListController extends Controller
{
    public function getTasks () {
    //
    $tasks = DB::table('tasks')->get();
    return view("task_list")->with("tasks",$tasks);
    }

    public function show($id)
    {
        $tasks = tasks::find($id);

        return view('task_detail',compact('tasks'));
        
    }
}
