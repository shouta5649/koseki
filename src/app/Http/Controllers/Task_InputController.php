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
use Illuminate\Support\Facades\DB;

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
            'task_det' => $request->task_det,
            'task_date' => $request->task_date,
            'task_datetime' => $request->task_datetime,
            'task_pri' => $request->task_pri,
            'task_comp' => $request->task_comp,
            'task_sta' => $request->task_sta
        ]);

        event(new Registered($tasks));



        return redirect('task_list');
    }
    public function getEvent(Request $request)
    {



        return view('task_list');
    }

    public function getTasks(Request $request)
    {
        $tasks = DB::table('tasks')->select(DB::raw('CONCAT(\'/task_detail/\',task_id)as url'), 'task_id as id', 'task_name as title', 'task_date as start', 'task_comp as end','task_pri as color', 'deleted_at')->whereNull('deleted_at')->get();
        
        return response()->json($tasks);
    }
    public function show($id)
    {
        $tasks = tasks::find($id);

        return view('task_detail', compact('tasks'));
    }
}
