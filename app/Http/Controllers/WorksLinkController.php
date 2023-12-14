<?php

namespace App\Http\Controllers;

use App\Models\WorksLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;//ログインユーザーに関する情報をAuth::～を使えるようにするuse宣言
use App\Models\User;//<--User情報をデータベースのusersテーブルから持ってくるために書く宣言

class WorksLinkController extends Controller
{

    public function showWasWorks()
    {
        $auth_users = User::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $login_user = Auth::user();//ログインユーザー情報を取得
        return view('links.was',compact('auth_users','login_user'));

        //例
        //$posts = Post::all();
        /*モデルのPost.phpと紐付いたpostsテーブルのデータを全て取得*/
        //return view('post.index',compact('posts'));
        /*viewのpostファイル直下のindex.blade.phpを表示する。
        なお、その際に上で定義した変数$postsを使用する*/
    }

    public function showQiita_article_imageWorks()
    {
        $auth_users = User::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $login_user = Auth::user();//ログインユーザー情報を取得
        return view('links.Qiita_article_image',compact('auth_users','login_user'));

        //例
        //$posts = Post::all();
        /*モデルのPost.phpと紐付いたpostsテーブルのデータを全て取得*/
        //return view('post.index',compact('posts'));
        /*viewのpostファイル直下のindex.blade.phpを表示する。
        なお、その際に上で定義した変数$postsを使用する*/
    }

}
