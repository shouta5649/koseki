<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Task_ListController extends Controller
{
    public function getTasks () {
    //
    $tasks = DB::table('tasks')->select('task_name','task_det')->first();
    return view("task_list")->with("tasks",$tasks);
    }
}
