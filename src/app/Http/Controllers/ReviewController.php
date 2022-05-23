<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\tasks;
use App\Models\review;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;

class ReviewController extends Controller
{
    public function getTasks () {
    //
    $tasks = DB::table('tasks')->whereNull('deleted_at')->get();
    return view("task_end")->with("tasks",$tasks);
    }

    public function show($id)
    {
        $tasks = tasks::find($id);

        return view('review',compact('tasks'));
        
    }
    public function getReview () {
        //
        $review = DB::table('review')->get();
        return view("review")->with("review",$review);
        }
}