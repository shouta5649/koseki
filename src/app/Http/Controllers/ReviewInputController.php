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

    $review = review::create([
        'review_id' => $request->review_id,
        'review_ice' => $request->review_ice,
        'review_date' => $request->review_date,
        'review_layer' => $request->review_layer,
        'review_genre' => $request->review_genre,
        'review_impre' => $request->review_impre,
    ]);

    event(new Registered($review));



    return redirect()->route('review',['id' => $review->review_id]);
}
}