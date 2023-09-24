<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use App\Models\GithubContactForm;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;//ログインユーザーに関する情報をAuth::～を使えるようにするuse宣言
use App\Models\User;//<--User情報をデータベースのusersテーブルから持ってくるために書く宣言

class AdministratorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function NonGithubUsersIndex()
    {
        $auth_users = User::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $login_user = Auth::user();//ログインユーザー情報を取得
        $non_Github_users_posts = ContactForm::where('delete_flag', 0)->get();//0のものは表示、１のものは論理削除
        /**
         * ContactFormモデルと紐付いた、contact_formsテーブルからデータを全て取得
         * **/
        return view('main.admin_menu.Non_Github_users_index',compact('non_Github_users_posts','auth_users','login_user'));
        //上で取得した$postsをmain.admin_menu.opinionindex.blade.phpで使えるようにする。
    }

        /**
     * Display a listing of the resource.
     */
    public function GithubUsersIndex()
    {
        $auth_users = User::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $login_user = Auth::user();//ログインユーザー情報を取得
        $Github_users_posts = GithubContactForm::where('delete_flag', 0)->get();//0のものは表示、１のものは論理削除
        /**
         * ContactFormモデルと紐付いた、contact_formsテーブルからデータを全て取得
         * **/
        return view('main.admin_menu.Github_users_index',compact('Github_users_posts','auth_users','login_user'));
        //上で取得した$postsをmain.admin_menu.opinionindex.blade.phpで使えるようにする。
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $auth_users = User::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $login_user = Auth::user();//ログインユーザー情報を取得
        return view('main.administrator',compact('auth_users','login_user'));
    }



}
