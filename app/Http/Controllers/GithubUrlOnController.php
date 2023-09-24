<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GithubContactForm;
use App\Models\ContactForm;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;//ログインユーザーに関する情報をAuth::～を使えるようにするuse宣言
use App\Models\User;//<--User情報をデータベースのusersテーブルから持ってくるために書く宣言
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class GithubUrlOnController extends Controller
{


    public function storeGithubContactForm(Request $request){
        //Request $requestの部分でフォームから送信されたデータを受け取る
        //最初のRequestは、use宣言で使われているillumiinate\Http\Requestを指している

        if ($request['research_password'] == null) {
            $validated = $request->validate([
            'VisitorName' => 'required|max:60|string',
            'VisitorEmail' => 'required|max:256|string',
            'QuestionOrOpinion' => 'required',
            'research_password' => '',
            ]);
        }else{
            $validated = $request->validate([
            'VisitorName' => 'required|max:60|string',
            'VisitorEmail' => 'required|max:256|string',
            'QuestionOrOpinion' => 'required',
            'research_password' => 'min:8|string',
            ]);
        }

        //上2つを組み合わせて、テーブルに挿入するデータを作成
        $dataToInsert2 = [
            'VisitorName' => $validated['VisitorName'],
            'VisitorEmail' => $validated['VisitorEmail'],
            'QuestionOrOpinion' => $validated['QuestionOrOpinion'],
            'research_password' => $validated['research_password']
            //なんかどうやら、idとtimestampsは自動でなんとかしてくれる
        ];
        if($dataToInsert2['research_password']!=null){
            $dataToInsert2['research_password']=Hash::make($dataToInsert2['research_password']);
        }

        //整理して作った$dataToInsertを挿入する
        $GithubContactFormPost = GithubContactForm::create($dataToInsert2);//ここの::左は対応するModel名から拡張子を除いたもの
        return back()->with('message','無事送信されました。');
    }

    public function showGithubURL()
    {
        $auth_users = User::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $login_user = Auth::user();//ログインユーザー情報を取得
        return view('links.github_contact',compact('auth_users','login_user'));
    }


            /**
     * 悪質な質問・意見等の削除処理
     * @param Request $request
     * @param ContactForm $post_id
     * @return Response
     */
    public function postdestroy(Request $request, $id)
    {
        // テーブルから指定のIDのレコード1件を取得
        $deletepost_GithubUser = GithubContactForm::find($id);
        if (!$deletepost_GithubUser) {
            // アイテムが存在しない場合の処理（エラー処理など）
            return redirect()->route('administrator.github_users_indexview'); // 一覧ページにリダイレクト
        }
        // レコードを削除
        $deletepost_GithubUser->delete();
        // 削除したら一覧画面にリダイレクト
        return redirect()->route('administrator.github_users_indexview');
    }

    public function editorview($id)
    {
        $Github_users_posts = GithubContactForm::all();//0のものは表示、１のものは論理削除
        $auth_users = User::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $login_user = Auth::user();//ログインユーザー情報を取得
        return view('PostEdit.GithubUser.edit',compact('auth_users','login_user','Github_users_posts'));
    }
    // ---------------------------------------------------------------------------------------------------------------------------
    // ここで変数にidを指定しているので、この関数に対する{{ route('items.editor.view',$item->id) }}の「->id」がないとエラーになる
    // なお、上のcompact内に$itemないが、渡したbladeでregistered_item_informationsを@foreach( )で as $itemとしているので使える
    // --------------------------------------------------------------------------------------------------------------------------
        /**
     * 商品詳細・編集画面の表示（ProfileControllerを真似しつつ、Laravelの教科書を参考に作成。上の注意書き、
     * タイプヒントに注意）
     */
    //updateメソッドでは、引数はRequest $requestと
    public function update(Request $request, GithubContactForm $post)
    {

        // 更新データの連想配列を作成
        if ($request['research_password'] == null) {
            $validated = $request->validate([
            'VisitorName' => 'required|max:60|string',
            'VisitorEmail' => 'required|max:256|string',
            'QuestionOrOpinion' => 'required',
            'research_password' => '',
            'delete_flag' => 'required|boolean'
            ]);
        }else{
            $validated = $request->validate([
            'VisitorName' => 'required|max:60|string',
            'VisitorEmail' => 'required|max:256|string',
            'QuestionOrOpinion' => 'required',
            'research_password' => 'min:8|string',
            'delete_flag' => 'required|boolean'
            ]);
        }

        //上2つを組み合わせて、テーブルに挿入するデータを作成
        $dataToInsert = [
            'VisitorName' => $validated['VisitorName'],
            'VisitorEmail' => $validated['VisitorEmail'],
            'QuestionOrOpinion' => $validated['QuestionOrOpinion'],
            'research_password' => $validated['research_password'],
            'delete_flag' => $validated['delete_flag']
            //なんかどうやら、idとtimestampsは自動でなんとかしてくれる
        ];

        if($dataToInsert['research_password']!=null){
            $dataToInsert['research_password']=Hash::make($dataToInsert['research_password']);
        }

        // モデルを取得し、条件に一致するレコードを更新
        // ここでは、例として id カラムが $request->input('id') に一致するレコードを更新すると仮定しています。
        $post->update($dataToInsert);//<--updateメソッドで更新

        //なお、更新後は、updated_atは自動的に更新されるため、上記の関数内にnow()などを記述する必要はない

        // $request->session();
        return back()->with('message','更新しました。');
                        //更新後のメッセージを$messageでbladeに渡す
    }

    // 個別表示機能追加

    public function ShowEach(GithubContactForm $post){
        // 関数の中の第一引数は、タイプヒント（引数の型を指定するもの  ※モデル名を書いて引数の型を制限
        // 第二引数の名前は任意でいいが、おそらくRoute設定のパラメータ名と一致させる必要がある）
        // おそらく、$itemはItemsモデルのインスタンスにあたる。
        // これを書いた時点で$itemのidをデータベースに受け渡し、
        // 該当の$itemレコードを取得という流れが設定されたことになるらしい（依存注入という）。
        return view('admin_menu.show_each',compact('post'));
    }


}
