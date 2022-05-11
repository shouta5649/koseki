<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\tasks;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class Task_InputController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('task_input');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
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
}