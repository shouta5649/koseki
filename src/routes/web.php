<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/index', function () {
//     return view('index');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/task_input', function () {
    return view('task_input');
});

Route::get('/task_list', function () {
    return view('task_list');
});

Route::get('/task_detail', function () {
    return view('task_detail');
});

Route::get('samplepost', 'App\Http\Controllers\LoginController@test'); 