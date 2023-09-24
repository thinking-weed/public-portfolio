<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use App\Models\GithubContactForm;
use App\Models\User;//<--User情報をデータベースのusersテーブルから持ってくるために書く宣言
use Illuminate\Support\Facades\Auth;//<--Auth::user()とか使うときに書く宣言

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */


public function SearchAndIndex(Request $request)
    {
        $posts = ContactForm::where('delete_flag', 0)->get();//0のものは表示、１のものは論理削除
        $auth_users = User::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $login_user = Auth::user();//ログインユーザー情報を取得
        $searchTerm = $request->input('searchTerm');

        // データベースの3つのカラムを対象にあいまい検索を実行
        $search_results = ContactForm::where('VisitorName', 'like', "%$searchTerm%")
                            ->orWhere('VisitorEmail', 'like', "%$searchTerm%")
                            ->orWhere('QuestionOrOpinion', 'like', "%$searchTerm%")
                            ->get();//->get()で一気に取得
        $count_search_results = ContactForm::where('VisitorName', 'like', "%$searchTerm%")
                                ->orWhere('VisitorEmail', 'like', "%$searchTerm%")
                                //orWhereはたぶんorだし、またはこれを検索結果に含めるの意味
                                ->orWhere('QuestionOrOpinion', 'like', "%$searchTerm%")
                                ->count();//->count()で取得したレコードの数を数える

        return view('admin_menu.searched_index', compact('search_results','count_search_results','auth_users','posts','login_user'));
    }

}
