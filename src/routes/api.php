<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Task_ListController;
use App\Http\Controllers\Task_InputController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('task_list', [Task_InputController::class, 'getTasks'])
->name('task_list');

Route::get('/task_detail/{id}', [Task_InputController::class, 'show'])
    ->name('task_detail/{id}');