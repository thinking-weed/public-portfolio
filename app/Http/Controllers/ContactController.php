<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactForm;
use App\Models\GithubContactForm;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;//ログインユーザーに関する情報をAuth::～を使えるようにするuse宣言
use App\Models\User;//<--User情報をデータベースのusersテーブルから持ってくるために書く宣言
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{

        /**
     * Store a newly created resource in storage.
     */
    public function storeContactForm(Request $request){
        //Request $requestの部分でフォームから送信されたデータを受け取る
        //最初のRequestは、use宣言で使われているillumiinate\Http\Requestを指している
        //$requestはform内に含まれるinputタグの数を要素の数とする、keyがnameの値
        //valueがinputタグでできる入力欄に入っている入力値になっている連想配列の可能性が高い

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
        $dataToInsert1 = [
            'VisitorName' => $validated['VisitorName'],
            'VisitorEmail' => $validated['VisitorEmail'],
            'QuestionOrOpinion' => $validated['QuestionOrOpinion'],
            'research_password' => $validated['research_password']
            //なんかどうやら、idとtimestampsは自動でなんとかしてくれる
        ];

        //Hash::makeを使うときはuse宣言で～Hashが必要
        if($dataToInsert1['research_password']!=null){
            $dataToInsert1['research_password']=Hash::make($dataToInsert1['research_password']);
        }

        //整理して作った$dataToInsertを挿入する
        $ContactFormPost = ContactForm::create($dataToInsert1);
        //ここの::左は対応するModel名から拡張子を除いたもの
        return back()->with('message','無事送信されました。');
    }


    /**
     * Display the specified resource.
     */
    public function show()
    {
        $auth_users = User::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $login_user = Auth::user();//ログインユーザー情報を取得
        return view('links.contact',compact('auth_users','login_user'));

        //例
        //$posts = Post::all();
        /*モデルのPost.phpと紐付いたpostsテーブルのデータを全て取得*/
        //return view('post.index',compact('posts'));
        /*viewのpostファイル直下のindex.blade.phpを表示する。
        なお、その際に上で定義した変数$postsを使用する*/
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
        $deletepost = ContactForm::find($id);
        if (!$deletepost) {
            // アイテムが存在しない場合の処理（エラー処理など）
            return redirect()->route('administrator.nongithub_users_indexview'); // 一覧ページにリダイレクト
        }
        // レコードを削除
        $deletepost->delete();
        // 削除したら一覧画面にリダイレクト
        return redirect()->route('administrator.nongithub_users_indexview');
    }

        /**
     *質問・意見等の編集（コメントの付与）
     * */
    public function editorview(ContactForm $post)
    {
        $auth_users = User::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $login_user = Auth::user();//ログインユーザー情報を取得
        return view('PostEdit.NonGithubUser.edit',compact('post','auth_users','login_user'));
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
    public function update(Request $request, ContactForm $post)
    {

        // 条件付きバリデーション
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
        //再検索用パスワードが入っている場合、更新時ハッシュ化
        if($dataToInsert['research_password']!=null){
            $dataToInsert['research_password']=Hash::make($dataToInsert['research_password']);
        }

        // モデルを取得し、条件に一致するレコードを更新
        // ここでは、例として id カラムが $request->input('id') に一致するレコードを更新すると仮定しています。
        $post->update($dataToInsert);//<--updateメソッドで更新

        //なお、更新後は、updated_atは自動的に更新されるため、上記の関数内にnow()などを記述する必要はない

        // $request->session();
        return back()->with('message','更新をしました。');
                        //更新後のメッセージを$messageでbladeに渡す
    }

    // ------------------------------------ 個別表示機能追加 ---------------------------------------

    public function ShowEach(ContactForm $post){
        $auth_users = User::all();//Usersテーブルの情報をデータベースのusersテーブルから全て取得
        $login_user = Auth::user();//ログインユーザー情報を取得
        // 関数の中の第一引数は、タイプヒント（引数の型を指定するもの  ※モデル名を書いて引数の型を制限
        // 第二引数の名前は任意でいいが、おそらくRoute設定のパラメータ名と一致させる必要がある）
        // おそらく、$itemはItemsモデルのインスタンスにあたる。
        // これを書いた時点で$itemのidをデータベースに受け渡し、
        // 該当の$itemレコードを取得という流れが設定されたことになるらしい（依存注入という）。
        return view('main.admin_menu.non_github_users_post_showeach',compact('post','auth_users','login_user'));
    }

    // ---------------------------------------検索機能追加（管理者権限画面）------------------------------------

    public function SearchAndIndex(Request $request)
    {
        $posts = ContactForm::where('delete_flag', 0)->paginate(10);//0のものは表示、１のものは論理削除
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

        return view('main.admin_menu.Non_Github_users_searched_index', compact('search_results','count_search_results','auth_users','posts','login_user'));
    }

}
