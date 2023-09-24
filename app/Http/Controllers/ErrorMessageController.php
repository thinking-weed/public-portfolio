<?php

namespace App\Http\Controllers;


use App\Models\User;//<--User情報をデータベースのusersテーブルから持ってくるために書く宣言
use Illuminate\Support\Facades\Auth;//<--Auth::user()とか使うときに書く宣言
use Illuminate\Http\Request;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Throwable;
use Illuminate\Auth\Access\AuthorizationException;

class ErrorMessageController extends Controller
{
    public function render($request, Throwable $exception)
    {
        if ($exception instanceof AuthorizationException) {
            // カスタムエラーメッセージを取得
            $message = __('auth.403');

            $auth_users = User::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
            $login_user = Auth::user();//ログインユーザー情報を取得
            // カスタムエラーメッセージをビューに渡して表示
            return response()->view('layouts.custom_errors_message', ['message' => $message], 403,compact('auth_users','login_user'));
        }

        return parent::render($request, $exception);
    }
}
