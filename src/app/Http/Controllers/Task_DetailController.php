<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\tasks;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class Task_DetailController extends Controller
{
    public function getTasks () {
    //
    $tasks = DB::table('tasks')->get();
    return view("task_list")->with("tasks",$tasks);
    }
}
