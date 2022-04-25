<?php

declare(strict_types=1); // 暗黙の型変換を防止する

namespace App\Http\Controllers;

use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // ログイン機能を呼び出してくれる

class LoginController extends Controller
{
  public function getAuth(request $request)
  {
    $param =['message' => 'ログインして下さい。'];
    return view('login', $param);
  }
    // ログインフォームを表示させるメソッド
    public function postAuth(Request $request)
    {
        $id = $request->id;
        $password = $request->password;

   if (Auth::attempt(['id' => $id,'password' => $password])) {
        $msg = 'ログインしました。('.Auth::user()->name.')';

     } else {
       $msg = 'ログインに失敗しました。';
     }

     return view('login',['message' => $msg]);
    } 
}