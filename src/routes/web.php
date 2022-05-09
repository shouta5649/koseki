<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Task_InputController;
use App\Http\Controllers\Task_ListController;
use App\Http\Controllers\CompanyController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//require __DIR__.'/auth.php';

//Route::get('/login', function () {
//   return view('login');
//});

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/task_detail', function () {
    return view('task_detail');
});

//Route::get('/task_input', function () {
//   return view('task_input');
//});

Route::get('task_list', [Task_ListController::class, 'getTasks'])
    ->name('task_list');


//Route::get('task_list', [CompanyController::class, 'getCalendarDates'])
  //  ->name('task_list');

Route::middleware('guest')->group(function () {

    Route::get('login', [LoginController::class, 'create'])
        //->middleware('guest')
        ->name('login');

    Route::post('login', [LoginController::class, 'store']);
    //->middleware('guest');
});

Route::get('task_input', [Task_InputController::class, 'create'])
    ->name('task_input');

Route::post('task_input', [Task_InputController::class, 'store']);


Route::middleware('auth')->group(function () {

    Route::post('logout', [LoginController::class, 'destroy'])
        ->name('logout');
});
