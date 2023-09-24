<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//ログインユーザーに関する情報をAuth::～を使えるようにするuse宣言
use App\Models\User;//<--User情報をデータベースのusersテーブルから持ってくるために書く宣言

class HomeController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function showHome()
    {
        $auth_users = User::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $login_user = Auth::user();//ログインユーザー情報を取得
        return view('main.home',compact('auth_users','login_user'));
    }


}
