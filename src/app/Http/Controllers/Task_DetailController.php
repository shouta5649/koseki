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

    public function update(Request $request, $id,tasks $tasks)
    {

        $tasks = tasks::find($id);

        $tasks-> task_name = $request->task_name;
        $tasks-> task_det = $request->task_det;
        $tasks-> task_date = $request->task_date;
        $tasks-> task_datetime = $request->task_datetime;
        $tasks-> task_pri = $request->task_pri;
        $tasks-> task_comp = $request->task_comp;
        $tasks->save();

        return redirect()->route('task_detail',['id' => $tasks->task_id]);
    }


    public function destroy($id)
    {
        $tasks = tasks::find($id);

        $tasks->delete();

        return redirect()->route('task_list');
    }
}
