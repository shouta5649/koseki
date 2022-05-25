<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tasks;
use App\Models\review;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\DB;

class ReviewInputController extends Controller
{
    public function store(Request $request)
{
    

    $review = new review;
        $review->review_id = $request->input('review_id');
        $review->review_ice = $request->input('review_ice');
        $review->review_date = $request->input('review_date');
        $review->review_layer = $request->input('review_layer');
        $review->review_genre = $request->input('review_genre');
        $review->review_impre = $request->input('review_impre');
        $review->task_id = $request->input('task_id');
        $review->save();

        return redirect()->route('review/{id}',$review->review_id);
    
}
public function show($id)
{
    $task = tasks::find($id);

    return view('review_input',compact('task'));
    
}

public function showreview($id)
{
    $review = review::find($id);

    return view('review',compact('review'));
    
}
}