<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Task_EndController;
use App\Http\Controllers\Task_ListController;
use App\Http\Controllers\Task_DetailController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ReviewInputController;
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
});

Route::get('/task_detail', function () {
    return view('task_detail');
});

//Route::get('/task_end', function () {
//   return view('task_end');
//});

Route::get('/task_list', function () {
    return view('task_list');
});

Route::get('/review', function () {
    return view('review');
});

Route::get('/review_input', function () {
    return view('review_input');
});

Route::get('task_end', [Task_EndController::class, 'getEnds'])
    ->name('task_end');

Route::get('task_list', [Task_EndController::class, 'getEvent'])
    ->name('task_list');

Route::post('task_list', [Task_EndController::class, 'store']);

//Route::post('task_list', [Task_ListController::class, 'store']);

Route::get('task_detail', [Task_ListController::class, 'getTasks'])
    ->name('task_detail');

//Route::get('review', [Task_ListController::class, 'getTasks'])
//   ->name('review');

Route::get('/task_detail/{id}', [Task_ListController::class, 'show'])
    ->name('task_detail/{id}');

Route::get('review', [ReviewController::class, 'getReview'])
    ->name('review');

Route::get('/review/{id}', [ReviewController::class, 'show'])
    ->name('review/{id}');

Route::get('/review_input/{id}', [ReviewInputController::class, 'show'])
    ->name('review_input/{id}');

Route::post('review_input', [ReviewInputController::class, 'store'])
    ->name('review_input');

//Route::get('task_list', [CompanyController::class, 'getCalendarDates'])
//  ->name('task_list');

Route::post('/task_detail/{id}', [Task_DetailController::class, 'update'])
    ->name('task_detail');

Route::delete('/task_detail/{id}', [Task_DetailController::class, 'destroy'])
    ->name('task_list');

Route::middleware('guest')->group(function () {

    Route::get('login', [LoginController::class, 'create'])
        //->middleware('guest')
        ->name('login');

    Route::post('login', [LoginController::class, 'store']);
    //->middleware('guest');
});


Route::post('task_end', [Task_EndController::class, 'store']);


Route::middleware('auth')->group(function () {

    Route::post('logout', [LoginController::class, 'destroy'])
        ->name('logout');
});
