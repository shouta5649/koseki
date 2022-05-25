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
        $task = tasks::find($id);
        $review = $task->review;
        return view('review',compact('task','review'));
    }
    
    public function getReview () {
        //
        $review = DB::table('review')->get();
        return view("review")->with("review",$review);
        }

        public function update(Request $request, $id,review $review)
        {
    
            $review = review::find($id);
    
            $review-> review_ice = $request->review_ice;
            $review-> review_layer = $request->review_layer;
            $review-> review_genre = $request->review_genre;
            $review-> review_impre = $request->review_impre;
            $review->save();
    
            return redirect()->route('review',['id' => $review->review_id]);
        }

}