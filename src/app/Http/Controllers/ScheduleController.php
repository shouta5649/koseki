<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tasks;
use Illuminate\Auth\Events\Registered;

class ScheduleController extends Controller
{

    /**
     * イベントを登録
     *
     * @param  Request  $request
     */
    public function scheduleAdd(Request $request)
    {

        // 登録処理
        $task = tasks::create([
            'task_id' => $request->task_id,
            'task_name' => $request->task_name,
            'task_det' =>$request->task_det,
            'task_date' =>$request->task_date,
            'task_datetime' =>$request->task_datetime,
            'task_pri' =>$request->task_pri,
            'task_comp' =>$request->task_comp,
        ]);
        event(new Registered($task));



        return redirect('task_list');
    }
}